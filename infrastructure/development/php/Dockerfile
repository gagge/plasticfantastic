FROM php:8.4-fpm
 
ENV UID=1000
ENV GID=1000

RUN addgroup --system --gid ${GID} laravel
RUN adduser --system --ingroup laravel --uid ${UID} --shell /bin/sh --disabled-password laravel

RUN sed -i "s/user = www-data/user = laravel/g" /usr/local/etc/php-fpm.d/www.conf
RUN sed -i "s/group = www-data/group = laravel/g" /usr/local/etc/php-fpm.d/www.conf

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli

