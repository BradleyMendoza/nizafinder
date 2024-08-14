# Usar la imagen oficial de PHP con Apache
FROM php:7.4-apache

# Habilitar extensiones PHP necesarias para MySQL
RUN docker-php-ext-install mysqli

# Copiar archivos PHP al contenedor
COPY . /var/www/html/
