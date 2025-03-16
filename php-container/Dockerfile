# Use PHP 8.1 CLI as base image
FROM php:8.1-cli

# Set working directory
WORKDIR /app

# Install required PHP extensions
RUN apt-get update && apt-get install -y unzip curl

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm composer-setup.php

# Copy application files
COPY . /app

# Expose port 8083
EXPOSE 8083

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:8083"]

