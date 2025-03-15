# 公式 PHP イメージを使用
FROM php:8.1-cli

WORKDIR /app

# 必要なパッケージをインストール
RUN apt-get update && apt-get install -y unzip

# `composer.json` を先にコピーしてキャッシュを活用
COPY composer.json ./

# `composer install` を実行
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN composer install --no-dev --prefer-dist --no-interaction

# 残りのファイルをコピー
COPY . .

# サーバーを起動
CMD php -S 0.0.0.0:8080 -t /app

