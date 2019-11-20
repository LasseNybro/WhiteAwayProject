FROM php:7.3-cli

RUN apt-get update && apt-get install -y zip unzip
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /usr/src/movierater

ADD . /usr/src/movierater
RUN composer install

CMD [ "php", "./public/index.php" ]
