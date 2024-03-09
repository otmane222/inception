#!/bin/bash

service php8.2-fpm start

function_func () {
	wp core install --url=$DOMAIN_NAME --title=$SITE_TITLE --admin_user=$ADMIN_USER --admin_password=$ADMIN_PASS --admin_email=$EMAIL --allow-root | grep -q "already"
	return $?
}

wp core download --allow-root

wp config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASSWORD --dbhost=$DB_HOST --allow-root

while ! function_func ; do
	sleep 1;
done

wp user create $USER_NAME $USER_EMAIL --role=author --user_pass=$USER_PASS --allow-root

wp config set WP_REDIS_HOST 'redis' --type=constant --add --allow-root

wp config set WP_REDIS_PORT '6379' --type=constant --add --allow-root

wp plugin install redis-cache --activate --allow-root

# chown -R www-data:www-data /wordpress

wp --allow-root redis enable

service php8.2-fpm stop

exec $@