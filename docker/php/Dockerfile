FROM php:7.2-fpm

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils

RUN apt-get update && apt-get install -y zip unzip git libmcrypt-dev libpq-dev

RUN apt-get update -y && \
    apt-get install -y libmcrypt-dev && \
    pecl install mcrypt-1.0.1 && \
    docker-php-ext-enable mcrypt

RUN docker-php-ext-install pdo_pgsql

RUN curl https://getcomposer.org/installer | php --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www
