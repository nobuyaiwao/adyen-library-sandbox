FROM php:8.1-cli

WORKDIR /app

RUN apt-get update && apt-get install -y unzip

# 🔹 `composer.json` を先にコピーしてキャッシュを活用
COPY composer.json /app/
COPY composer.lock /app/

# 🔹 Composer をインストール
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm composer-setup.php

# 🔹 `composer install` を確実に実行
RUN composer install --no-dev --prefer-dist --no-interaction || exit 1

# 🔹 アプリケーションファイルをコピー
COPY server.php /app/
COPY router.php /app/

CMD ["php", "-S", "0.0.0.0:8083", "-t", "/app", "router.php"]

