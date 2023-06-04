FROM php:8.0-fpm

ENV TZ Asia/Tokyo

RUN curl -sL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get update && \
	apt-get install -y git unzip libzip-dev libicu-dev libonig-dev nodejs && \
	docker-php-ext-install intl pdo_mysql zip bcmath
		
COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

WORKDIR /app
