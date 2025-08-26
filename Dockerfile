FROM php:8.2-apache

# Cài extension PHP
RUN docker-php-ext-install mysqli pdo_mysql

# Đặt DocumentRoot trỏ vào /var/www/html/public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e "s!/var/www/html!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/sites-available/000-default.conf \
    && sed -ri -e "s!/var/www/!${APACHE_DOCUMENT_ROOT}!g" /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
    && a2enmod rewrite \
    && sed -ri 's/AllowOverride None/AllowOverride All/i' /etc/apache2/apache2.conf

WORKDIR /var/www/html

# Copy toàn bộ source code vào container
COPY . /var/www/html
RUN chown -R www-data:www-data /var/www/html

# Render sẽ cung cấp PORT, chỉnh Apache lắng nghe port đó
CMD ["bash", "-lc", "if [ -n \"$PORT\" ]; then sed -ri \"s/^Listen 80/Listen ${PORT}/\" /etc/apache2/ports.conf; fi; exec apache2-foreground"]
