#!/bin/sh

#cd /var/www

# Exit immediately if a command exits with a non-zero status.
set -e

# Print each command being executed (useful for debugging)
set -x

#composer install
php artisan migrate
#php artisan db:seed

# Start PHP-FPM
exec php-fpm
