FROM php:8.2-fpm

RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip librabbitmq-dev libssh-dev  \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install sockets \
    && pecl install amqp \
    && docker-php-ext-enable apcu \
    && docker-php-ext-enable amqp \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

WORKDIR /var/www/symfony_docker

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN echo "extension=amqp.so" >> /usr/local/etc/php/conf.d/amqp.ini

RUN curl -sS https://get.symfony.com/cli/installer | bash
RUN ls -la /usr/local/bin
RUN git config --global user.email "kamgoche@yahoo.com" \ 
    && git config --global user.name "romeolandry"