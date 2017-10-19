FROM wichon/alpine-apache-php:latest

COPY php.ini /usr/local/etc/php/

# Install Composer
RUN php -r "copy('https://getcomposer.org/download/1.5.1/composer.phar', '/usr/local/bin/composer');" && \
    php -r "if (hash_file('SHA384', '/usr/local/bin/composer') === 'fd3800adeff12dde28e9238d2bb82ba6f887bc6d718eee3e3a5d4f70685a236b9e96afd01aeb0dbab8ae6211caeb1cbe') {echo 'Composer installed';} else {echo 'Hash invalid for downloaded composer.phar'; exit(1);}" && \
    chmod 0755 /usr/local/bin/composer && \
    /usr/local/bin/composer selfupdate --stable

# Install Git
RUN apk update && apk upgrade && \
    apk add --no-cache bash git openssh
