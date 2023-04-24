FROM alpine:3.16

RUN apk update && \
    apk add --no-cache \
    php8 \
    php8-fpm \
    php8-mysqli \
    php8-opcache \
    php8-gd \
    php8-curl \
    php8-xml \
    php8-mbstring \
    php8-json \
    php8-iconv \
    php8-ctype \
    php8-dom \
    curl \
    bash

RUN echo 'listen = 9000' >> /etc/php8/php-fpm.d/www.conf && \
    echo 'clear_env = no' >> /etc/php8/php-fpm.d/www.conf

RUN mkdir -p /var/www/html && \
    curl -SL "https://wordpress.org/wordpress-6.2.tar.gz" | tar -xz -C /var/www/html --strip-components=1 && \
    chown -R nobody:nobody /var/www/html
    
COPY conf/wp-config.php /var/www/html/

EXPOSE 9000

CMD ["php-fpm8", "-F"]
