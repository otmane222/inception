FROM debian:stable

RUN apt update

RUN apt install php8.2-fpm php-mysql wget vim -y

COPY ./conf/www.conf /etc/php/8.2/fpm/pool.d/

COPY tools/test.sh /

RUN chmod +x test.sh

RUN mkdir adminer

WORKDIR /adminer

RUN wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php -O adminer.php



ENTRYPOINT [ "/test.sh" ]

CMD [ "php-fpm8.2" , "-F"]
