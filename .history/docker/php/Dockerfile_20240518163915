# どんなdockerイメージを利用して構築をするか
FROM php:8.1-apache

# Apacheのmod_rewriteを有効化
RUN a2enmod rewrite

# 設定ファイルをdockerコンテナ内のPHP、Apacheに読み込ませる
COPY php.ini /usr/local/etc/php/
COPY 000-default.conf /etc/apache2/sites-enabled/

# Composerのインストール
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ミドルウェアインストール
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    libzip-dev \
    vim \
    libpng-dev \
    libpq-dev \
    libfreetype6-dev \
    libjpeg-dev \
    libonig-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli zip \
    && docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

# Node.jsとnpmのインストール
RUN curl -sL https://deb.nodesource.com/setup_18.x | bash - && apt-get install -y nodejs && npm install -g npm@latest

WORKDIR /var/www/html/laravel