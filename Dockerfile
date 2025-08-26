FROM php:8.2-apache

# PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Trỏ DocumentRoot vào /public và bật rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf /etc/apache2/apache2.conf /etc/apache2/sites-enabled/*.conf

RUN printf '<Directory ${APACHE_DOCUMENT_ROOT}>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>\n' > /etc/apache2/conf-available/public.conf \
 && a2enconf public \
 && a2enmod rewrite

# QUAN TRỌNG: copy code vào container
COPY --chown=www-data:www-data . /var/www/html/

# (Tùy chọn) Chỉ định DirectoryIndex rõ ràng
RUN printf "DirectoryIndex index.php index.html\n" > /etc/apache2/conf-available/dirindex.conf \
 && a2enconf dirindex