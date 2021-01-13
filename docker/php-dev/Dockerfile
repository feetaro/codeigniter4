FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
    vim \
    unzip \
    zip \
    git \
    libicu-dev \
    libsqlite3-dev \
    libpq-dev

#apache関連
RUN mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled
RUN /bin/sh -c a2enmod rewrite

#pdoインストール
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install intl

COPY ./docker/php-dev/php.ini /usr/local/etc/php/php.ini
COPY ./docker/php-dev/zzz-www.conf /usr/local/etc/php/zzz-www.conf
COPY ./docker/php-dev/000-default.conf /etc/apache2/sites-enabled/000-default.conf

##composerインストール
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer
ENV PATH $PATH:/composer/vendor/bin

#
WORKDIR /var/www/html/
