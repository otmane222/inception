FROM debian:stable

RUN apt update

RUN apt install vsftpd ftp vim -y

# CMD ["nginx", "-g", "daemon off;"]

COPY ./conf/vsftpd.conf /etc/vsftpd.conf

COPY tools/test.sh /

RUN chmod +x test.sh

ENTRYPOINT [ "/test.sh" ]

# CMD [ "tail", "-f", "/dev/null" ]
