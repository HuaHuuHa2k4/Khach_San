# Sử dụng image PHP 8.2 có Apache
FROM php:8.2-apache

# Cài tiện ích PHP để kết nối MySQL
RUN docker-php-ext-install mysqli

# Sao chép mã nguồn vào thư mục gốc của Apache
COPY ./public/ /var/www/html/

# Cấp quyền cho Apache nếu cần
RUN chown -R www-data:www-data /var/www/html \
 && chmod -R 755 /var/www/html

# Bật mod_rewrite nếu bạn dùng .htaccess
RUN a2enmod rewrite

# Mở port 80
EXPOSE 80
