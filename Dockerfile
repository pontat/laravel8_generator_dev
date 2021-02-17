FROM php:8.0-fpm

COPY --from=composer:2.0.9 /usr/bin/composer /usr/bin/composer

COPY --from=node:14.15.5 /usr/local/bin /usr/local/bin
COPY --from=node:14.15.5 /usr/local/lib /usr/local/lib

RUN apt-get update && apt-get install -y zip unzip && \
    docker-php-ext-install pdo pdo_mysql