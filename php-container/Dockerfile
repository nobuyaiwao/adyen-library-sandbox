FROM php:8.1-cli

WORKDIR /app

RUN apt-get update && apt-get install -y unzip

COPY . /app

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm composer-setup.php

RUN composer install --no-dev --prefer-dist --no-interaction

CMD ["php", "-S", "0.0.0.0:8083", "-t", "/app", "router.php"]

