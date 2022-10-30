FROM php:7.3.12-apache
LABEL maintainer="Daniel Perez <danieling90@hotmail.com>"

COPY docker-src/php.ini /usr/local/etc/php/
COPY docker-src/vtiger.json /usr/src/vtiger/
COPY docker-src/vtiger-ssl.* /etc/apache2/ssl/
COPY docker-src/000-default.conf /etc/apache2/sites-available/

RUN mkdir -p /var/lib/vtiger/logs && \
    apt-get update && \
    apt-get install libzip-dev -y && \
    apt-get install --no-install-recommends -y zlib1g-dev libc-client-dev libkrb5-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev libxml2-dev cron rsyslog zip unzip socat vim nano && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ && \
    docker-php-ext-configure imap --with-kerberos --with-imap-ssl && \
    docker-php-ext-install imap exif mysqli pdo pdo_mysql zip gd xml && \
    echo "cron.* /var/log/cron.log" >> /etc/rsyslog.conf && rm -fr /etc/cron.* && mkdir /etc/cron.d && \
    curl -o composer -sL https://getcomposer.org/composer.phar && \
    php composer global require javanile/http-robot:0.0.2 javanile/mysql-import:0.0.15 javanile/vtiger-cli:0.0.4 && \
    php composer clearcache && rm composer && \    
    usermod -u 1000 www-data && groupmod -g 1000 www-data && \
    echo "ServerName localhost" >> /etc/apache2/apache2.conf && \
    a2enmod ssl && a2enmod rewrite


EXPOSE 80
