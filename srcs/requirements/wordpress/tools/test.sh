#!/bin/bash

function_func () {
	wp core install --url=$DOMAIN_NAME --title=$SITE_TITLE --admin_user=$ADMIN_USER --admin_password=$ADMIN_PASS --admin_email=$EMAIL --allow-root | grep -q "already"
	return $?
}

service php8.2-fpm start

wp core download --allow-root


wp config create --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASSWORD --dbhost=$DB_HOST --allow-root

while ! function_func ; do
	sleep 1;
done

wp user create $USER_NAME $USER_EMAIL --role=author --user_pass=$USER_PASS --allow-root

exec $@