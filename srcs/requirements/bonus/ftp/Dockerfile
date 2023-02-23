FROM debian:buster

ARG FTP_NAME
ARG FTP_PASS

RUN apt-get update && apt-get install -y vsftpd

RUN useradd -r -N --shell /usr/sbin/nologin ftpsecure && \
	useradd -m -s /bin/bash ${FTP_NAME} && \
	echo "${FTP_NAME}:${FTP_PASS}" | chpasswd  && \
	usermod -g www-data ${FTP_NAME} && \
	mkdir -p /var/run/vsftpd/empty && \
	echo ${FTP_NAME} > /etc/vsftpd.userlist

COPY conf/vsftpd.conf /etc/vsftpd.conf

CMD [ "vsftpd" ]