FROM php:8.3-fpm-alpine

# Installer les dépendances nécessaires
RUN apk add --no-cache \
    postgresql-dev \
    libpq \
    libzip-dev \
    unzip \
    curl \
    && docker-php-ext-install pdo_pgsql

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /srv/app
