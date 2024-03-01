FROM debian:stable

RUN apt update

RUN apt install php8.2-fpm php-mysql vim curl wget net-tools iputils-ping -y

COPY ./conf/www.conf /etc/php/8.2/fpm/pool.d/

COPY ./tools/test.sh /

RUN chmod +x test.sh

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin/wp

WORKDIR /wordpress

ENTRYPOINT [ "/test.sh"]

CMD ["tail", "-f", "/dev/null"]
# CMD [ "php-fpm8.2" , "-F"]
