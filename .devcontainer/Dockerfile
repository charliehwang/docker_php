# docker build -t my-php-app  -f .docker/Dockerfile . 
# docker run -it --rm --name my-running-app my-php-app
# docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache 
#
# docker-compose up -d
#  docker-compose  -f .docker/docker-compose.yml up --build
#
FROM php:7.4-apache 

RUN apt-get update && apt-get install -y curl git \
    # libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev \
		libzip-dev zip \
		&& docker-php-ext-configure zip \
    && docker-php-ext-install zip 
    # && docker-php-ext-install iconv \
    # && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    # && docker-php-ext-install gd \
    # && docker-php-ext-install mysqli \
    # && docker-php-ext-install opcache \
    # && docker-php-ext-install mbstring 

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug
		# && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
		# && echo "xdebug.remote_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini 

COPY ./apache/start-apache /usr/local/bin
COPY ./php/conf.d/xdebug.ini /usr/local/etc/php/conf.d/
COPY ./php/conf.d/variables_order.ini /usr/local/etc/php/conf.d/

WORKDIR /var/www/html

#COMPOSER 
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

#PHPUNIT
RUN composer global require phpunit/phpunit

ENV PATH /root/.composer/vendor/bin:$PATH

RUN ln -s /root/.composer/vendor/bin/phpunit /usr/bin/phpunit

# CMD [ "ls", "-la /usr/local/bin/start*" ]
CMD [ "start-apache"]
# CMD [ "php", "./index.php" ]
# CMD [ "ls", "-la" ]

