#!/bin/sh

cd /var/www

# Exit immediately if a command exits with a non-zero status.
set -e

# Print each command being executed (useful for debugging)
set -x

if [ ! -d "vendor" ]; then
  echo "Vendor directory not found. Running composer install..."
  composer install --prefer-dist --no-scripts --optimize-autoloader --no-interaction
fi

# Install migrations
php artisan migrate

# Start PHP-FPM
exec php-fpm
