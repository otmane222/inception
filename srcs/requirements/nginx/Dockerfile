FROM debian:stable

RUN apt update

RUN apt install nginx vim -y

RUN service nginx start

COPY ./conf/default /etc/nginx/sites-enabled/

CMD ["nginx", "-g", "daemon off;"]
