# Use a imagem Alpine Linux
FROM alpine:3.16

# Atualize e instale pacotes necessários
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
    curl

# Configure o PHP-FPM
RUN echo 'listen = 9000' >> /etc/php8/php-fpm.d/www.conf && \
    echo 'clear_env = no' >> /etc/php8/php-fpm.d/www.conf

# Baixe e instale o WordPress
RUN mkdir -p /var/www/html && \
    curl -SL "https://wordpress.org/latest.tar.gz" | tar -xz -C /var/www/html --strip-components=1 && \
    chown -R nobody:nobody /var/www/html

# Copie um arquivo de configuração personalizado do WordPress, se necessário
COPY wp-config.php /var/www/html/

# Inicie o PHP-FPM
CMD ["php-fpm8", "-F"]

# Exponha a porta 9000 para o PHP-FPM
EXPOSE 9000
