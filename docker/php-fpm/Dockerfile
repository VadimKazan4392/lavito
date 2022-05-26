FROM php:7.4-fpm

# RUN apt-get update && apt-get install -y libmcrypt-dev mariadb-client
# RUN FROM php:7.4-fpm
RUN apt-get update && apt-get install -y libmcrypt-dev mariadb-client\
		libfreetype6-dev \
		libjpeg62-turbo-dev \
		libpng-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd

WORKDIR /var/www