FROM debian:stable

RUN apt update -y

RUN apt install wget -y

RUN wget https://github.com/google/cadvisor/releases/download/v0.39.3/cadvisor

RUN chmod +x cadvisor

ENTRYPOINT [ "./cadvisor" ]