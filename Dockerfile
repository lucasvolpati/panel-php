FROM ubuntu:latest
LABEL authors="lucas"

WORKDIR /var/www/html

RUN apt update && \
    apt install -y  \
    nano \
    software-properties-common \
    lsb-release \
    ca-certificates \
    apache2 \
    libapache2-mod-php \
    curl unzip zip && \
    add-apt-repository -y ppa:ondrej/php && \
    apt update && \
    apt install -y  \
        php8.3  \
        php8.3-mysql  \
        php8.3-dom  \
        php8.3-xdebug  \
        php8.3-mbstring  \
        php8.3-curl  \
        php8.3-intl  \
        php8.3-gd && \
    rm -rf /var/lib/apt/lists/*

COPY ./docker/apache/000.conf /etc/apache2/sites-available/000.conf

RUN a2enmod rewrite && a2ensite 000.conf && service apache2 restart

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

RUN ["/bin/bash", "-c", "set -o pipefail && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer"]

EXPOSE 80

ENTRYPOINT ["/bin/bash", "-c", "apachectl -D FOREGROUND"]