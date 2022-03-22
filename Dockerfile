# Composer
FROM composer:latest as vendor

COPY database/ database/
COPY composer.json composer.json
COPY composer.lock composer.lock

RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

# Frontend
FROM node:14.19.0 as frontend

RUN mkdir -p /app/public
COPY package.json webpack.mix.js package-lock.json /app/
COPY resources/ /app/resources/
WORKDIR /app

RUN npm install && npm run production

# Application
FROM php:8.1.4-fpm-alpine3.15
COPY . /var/www/html
COPY ./000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY ./.env.production /var/www/html/.env

RUN chown -R www-data:www-data /var/www/html/bootstrap/cache /var/www/html/storage
RUN chmod -R 777 /var/www/html/storage/logs /var/www/html/storage/framework

COPY --from=vendor /app/vendor/ /var/www/html/vendor/
COPY --from=frontend /app/public/js/ /var/www/html/public/js/
COPY --from=frontend /app/public/css/ /var/www/html/public/css/
COPY --from=frontend /app/mix-manifest.json /var/www/html/mix-manifest.json
