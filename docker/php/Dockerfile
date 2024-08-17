FROM php:8.0-fpm

MAINTAINER cuongvm17@gmail.com

RUN apt-get update -y \
    && apt-get install -y zlib1g-dev \
    libicu-dev \
     g++ \
     zip \
     unzip \
     ssh \
     git \
     libssl-dev \
     libbz2-dev \
     && apt-get clean \
     && rm -rf /var/lib/apt/lists/*

ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS="0" \
    PHP_OPCACHE_MAX_ACCELERATED_FILES="10000" \
    PHP_OPCACHE_MEMORY_CONSUMPTION="192" \
    PHP_OPCACHE_MAX_WASTED_PERCENTAGE="10"

# Install addition php ext
RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl mysqli opcache pdo_mysql bz2 \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && pecl install apcu \
    && docker-php-ext-enable apcu

COPY ./docker/php/docker-php.ini /usr/local/etc/php/conf.d/docker-php.ini
COPY ./docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
COPY ./docker/php/apcu.ini /usr/local/etc/php/conf.d/apcu.ini
COPY ./docker/php/redis.ini /usr/local/etc/php/conf.d/redis.ini

WORKDIR /var/www

# Clean up
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \
    rm /var/log/lastlog /var/log/faillog

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

ARG PUID=10000
ARG PGID=10000

RUN groupmod -o -g ${PGID} www-data && \
    usermod -o -u ${PUID} -g www-data www-data

COPY --chown=www-data:www-data . /var/www

RUN composer install \
        --prefer-dist \
        --no-ansi \
        --no-interaction \
        --no-progress \
        --no-scripts \
        --no-dev \
        --optimize-autoloader

COPY ./docker/php/start.sh /usr/local/bin/start

RUN chmod u+x /usr/local/bin/start
