FROM php:8.1.4-fpm-alpine
WORKDIR /var/www/app
COPY php.ini /usr/local/etc/php/
RUN docker-php-ext-install pdo_mysql
ENV TZ=UTC \
    # locale
    LANG=en_US.UTF-8 \
    LANGUAGE=en_US:en \
    LC_ALL=en_US.UTF-8 \
    # composer environment
    COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/composer
COPY --from=composer:2.4 /usr/bin/composer /usr/bin/composer