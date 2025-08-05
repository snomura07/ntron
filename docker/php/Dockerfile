FROM php:8.3-fpm

RUN apt-get update
RUN apt-get install -y --no-install-recommends \
        default-mysql-client \
        default-libmysqlclient-dev
RUN docker-php-ext-install pdo_mysql
RUN apt-get clean
RUN rm -rf /var/lib/apt/lists/*
