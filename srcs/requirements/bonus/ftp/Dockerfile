FROM debian:buster

ARG FTP_NAME
ARG FTP_PASS

RUN apt-get update && apt-get install -y vsftpd

COPY conf/vsftpd.conf /etc/vsftpd.conf

RUN mkdir -p /etc/vsftpd /home/lola
RUN echo '${FTP_NAME}:${FTP_PASS}:1000:1000::/home/lola:/bin/bash' >> /etc/vsftpd/vsftpd_users.conf
RUN chown -R ftp:ftp /home/lola
RUN echo '${FTP_PASS}' | tee -a /etc/vsftpd/vsftpd.userpass
RUN chown root:root /etc/vsftpd/vsftpd.userpass && \
	chmod 600 /etc/vsftpd/vsftpd.userpass

# RUN mv /etc/vsftpd /var/run/
RUN mkdir /var/share
RUN mkdir /var/share/empty

EXPOSE 20

CMD [ "vsftpd" ]