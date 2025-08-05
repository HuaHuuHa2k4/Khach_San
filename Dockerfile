# Dockerfile
FROM php:8.2-apache

# Copy mã PHP vào thư mục web gốc
COPY ./public /var/www/html/

# Cài tiện ích kết nối MySQL
RUN docker-php-ext-install mysqli

EXPOSE 80
