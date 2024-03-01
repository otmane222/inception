FROM debian:stable

RUN apt update

RUN apt install mariadb-server vim -y

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/

COPY ./tools/test.sh /

RUN chmod +x test.sh

ENTRYPOINT [ "/test.sh" ]

CMD ["tail", "-f", "/dev/null"]
