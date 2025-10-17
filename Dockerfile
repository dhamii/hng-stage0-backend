# Use official PHP image with Composer
FROM php:8.3-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libzip-dev \
    libonig-dev \
    zip \
    && docker-php-ext-install mbstring zip
