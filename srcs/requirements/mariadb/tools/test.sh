#!/bin/bash

service mariadb start

check_mariadb_status() {
    service mariadb status | grep -q "Uptime"
    return $?
}

while ! check_mariadb_status; do
    sleep 1
done

mariadb -uroot <<here_doc 
CREATE DATABASE IF NOT EXISTS wordpress;
CREATE USER 'wp_user'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON wordpress .* TO 'wp_user'@'%';
FLUSH PRIVILEGES;
here_doc

exec $@