FROM php:7.2-fpm

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www

# Set working directory
WORKDIR var/www

# Install dependencies
Run apt-get update && apt-get install -y \
    build-essential \
    mysql-client \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm - rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add User
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www wwww

# Copy existing app directory contents
COPY . /var/www

# Copy existing app directory permissions
COPY --chown=www:www . /var/www

# Change User
USER www

# Expose PORT 9000
EXPOSE 9000
CMD ["php-fpm"]