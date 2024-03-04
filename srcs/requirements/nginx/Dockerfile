FROM debian:stable

RUN apt update

RUN apt install nginx openssl vim -y

RUN service nginx start

COPY ./conf/default /etc/nginx/sites-enabled/

RUN openssl req -x509 -nodes -out /server.crt -keyout /server.key -subj "/C=MO/ST=IDF/L=MORROCO/O=42/OU=42/CN=oaboulgh.42.fr/UID=oaboulgh"

CMD ["nginx", "-g", "daemon off;"]
