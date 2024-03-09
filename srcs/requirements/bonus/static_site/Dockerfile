FROM debian:latest

RUN	apt update

RUN	apt install nginx wget -y

COPY ./conf/default /etc/nginx/sites-enabled/

WORKDIR /site

CMD ["nginx", "-g", "daemon off;"]