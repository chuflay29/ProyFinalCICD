# dockerfile para crear la imagen en docker
# Usar la imagen oficial de PHP 8.0 con Apache
FROM php:8.0-apache

# Configurar el directorio de trabajo
WORKDIR /var/www/html

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip mbstring

# Habilitar mod_rewrite de Apache (necesario para Laravel)
RUN a2enmod rewrite

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copiar los archivos del proyecto al contenedor
COPY . /var/www/html

# Establecer los permisos adecuados
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Exponer el puerto 80
EXPOSE 80

# Comando por defecto al iniciar el contenedor
CMD ["apache2-foreground"]
