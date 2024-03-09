FROM debian:stable

RUN apt update

RUN apt install redis-server vim -y

COPY conf/redis.conf /etc/redis/redis.conf

RUN chown -R redis:redis /etc/redis/redis.conf

ENTRYPOINT [ "redis-server", "--protected-mode", "no" ]