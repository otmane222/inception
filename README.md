Setuping wordpress using 3 containers:
- nginx
- wordpress + php-fpm
- mariadb
each container built from a debian:stable image and then config the files to establish connection between these container
using docker-compose to manage these container at once
for bonus part add more services to the docker-compose:
- ftp
- adminer
- redis-cach
- cAdvisor
- static website
