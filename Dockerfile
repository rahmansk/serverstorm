# Use an official PHP runtime as the base image
FROM php:8.1-apache

# Copy your app to the container
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo_mysql zip

# Expose port 80
EXPOSE 80
