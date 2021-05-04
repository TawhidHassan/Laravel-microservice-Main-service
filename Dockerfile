FROM php:7.4




RUN apt-get update && apt-get install -y --no-install-recommends \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        zlib1g-dev \
        libxml2-dev \
        libzip-dev \
        libonig-dev \
        graphviz \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd \ 
    && docker-php-ext-install mysqli \ 
    && docker-php-ext-install zip \ 
    && docker-php-ext-install sockets \ 
    && docker-php-source delete \
    && curl -s$ https://getcomposer.org/installer | php -- \
       --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql sockets


 WORKDIR /app  
 COPY . .
 RUN composer install

