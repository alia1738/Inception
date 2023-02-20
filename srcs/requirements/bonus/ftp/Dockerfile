FROM debian:buster

ARG FTP_NAME
ARG FTP_PASS

RUN apt-get update && apt-get install -y vsftpd

RUN useradd -r -N --shell /usr/sbin/nologin ftpsecure
RUN useradd -m -s /bin/bash ${FTP_NAME}
RUN echo "${FTP_NAME}:${FTP_PASS}" | chpasswd 
RUN usermod -g www-data ${FTP_NAME}
RUN mkdir -p /var/run/vsftpd/empty
RUN echo ${FTP_NAME} > /etc/vsftpd.userlist

COPY conf/vsftpd.conf /etc/vsftpd.conf

CMD [ "vsftpd" ]