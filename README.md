Setuping wordpress using 3 containers:
- nginx
- wordpress + php-fpm
- mariadb

Each container built from a debian:stable image and then config the files to establish connection between these container.
Using docker-compose to manage these container at once.
For bonus part I added more services to the docker-compose:
- ftp
- adminer
- redis-cach
- cAdvisor
- static website
