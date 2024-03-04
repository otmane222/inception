#!/bin/bash

adduser otmane --disabled-password
echo "$FTP_USER:$FTP_PASS" | chpasswd
chown -R "$FTP_USER:$FTP_USER" /ptr

vsftpd /etc/vsftpd.conf