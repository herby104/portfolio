FROM php:8.2-cli

WORKDIR /app

# Installer dépendances système
RUN apt-get update && apt-get install -y \
    git unzip curl libzip-dev zip \
    && docker-php-ext-install zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier le projet
COPY . .

# Installer Laravel
RUN composer install --no-dev --optimize-autoloader

# Exposer port
EXPOSE 8000

# Lancer Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000