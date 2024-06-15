FROM php:8.2-fpm


ARG user
ARG uid

USER root

RUN apt update && apt install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip

RUN apt clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www
# Copy the application code into the container
COPY . /var/www

RUN chmod -R 775 /var/www
RUN chmod -R 775 /tmp/
RUN chown -R $user:$user /var/www
RUN chown -R $user:$user /tmp/

copy ./run.sh /tmp

RUN chmod -R 775 /tmp/run.sh
RUN chown -R $user:$user /tmp/run.sh
USER $user

RUN composer install --prefer-dist --no-scripts --no-dev --optimize-autoloader

ENTRYPOINT ["/tmp/run.sh"]

#RUN php artisan migrate
#RUN php artisan DB:seed
