### EmpowHer Tech API ###
- API for EmpowHer project

### Stacks
- PHP 8.0 or newer
- [Composer](http://getcomposer.org)
- [Lumen](https://lumen.laravel.com/)
- Docker and Docker Compose

### Documentation ###
```
http://localhost/api/documentation
```

### Installation
Clone the repository:

```bash
https://github.com/cuongvm17
```

Copy the `.env` file

```
> cp env.example .env
```

Build docker image (cached or non-cache)

```
> docker-compose build
```

```
> docker-compose build --no-cache
```

Run docker image

```
docker-compose up
```

Run the following command to install the package through Composer:

```bash
> docker-compose exec php composer install
```

Generate the database
```bash
> docker-compose exec php bash
> php artisan mirgate
> php artisan db:seed
```

Stop docker

```
> docker-compose down
```
