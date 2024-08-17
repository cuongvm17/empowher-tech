#!/usr/bin/env bash

set -e

role=${CONTAINER_ROLE:-app}
env=${APP_ENV:-production}


if [ "$role" = "app" ]; then
    exec php-fpm

elif [ "$role" = "queue" ]; then
    echo "Running the queue..."

    sleep 30 && php /var/www/artisan queue:listen redis --verbose --timeout=900

elif [ "$role" = "scheduler" ]; then

    while [ true ]
    do
        php /var/www/artisan schedule:run --verbose --no-interaction &
        sleep 60
    done

else
    echo "Could not match the container role \"$role\""
    exit 1
fi
