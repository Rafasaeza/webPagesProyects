FROM php:7.4-apache

# Install MySQL extension
RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli
    # Enable Apache mod_rewrite
RUN a2enmod rewrite

COPY src/. /var/www/html/