#!/bin/bash

service mariadb start

check_mariadb_status() {
    service mariadb status | grep -q "Uptime"
    return $?
}

while ! check_mariadb_status; do
    sleep 1
done

mariadb -u root <<EOF
	CREATE DATABASE IF NOT EXISTS \`${DB_NAME}\`;
	CREATE USER IF NOT EXISTS \`${DB_USER}\`@'%' IDENTIFIED BY '${DB_PASSWORD}';
	GRANT ALL PRIVILEGES ON \`${DB_NAME}\`.* TO \`${DB_USER}\`@'%';
	FLUSH PRIVILEGES;
	ALTER USER 'root'@'localhost' IDENTIFIED BY '${DB_ROOT_PASSWORD}';
	FLUSH PRIVILEGES;
EOF

mkdir /var/log/mysql/

service mariadb stop

# kill $(cat /var/run/mysqld/mysqld.pid)

mysqld_safe
# exec $@