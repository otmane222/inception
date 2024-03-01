#!/bin/bash

service php8.2-fpm start

wp core download --allow-root

wp config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASSWORD --dbhost=$DB_HOST --allow-root

wp core install --url=localhost --title=oaboulgh --admin_user=otmane --admin_password=otmane --admin_email=otmane@gmail.com --allow-root

exec $@