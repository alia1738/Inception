FROM debian:buster

RUN apt-get update && apt-get install -y \
	mariadb-server

RUN chmod 644 /etc/mysql/my.cnf

RUN service mysql start && \
	sleep 5s && \
	mysql -e "CREATE DATABASE ${DATABASE_NAME}; \
	CREATE USER '${DATABASE_USER_NAME}'@'%' IDENTIFIED BY '${DATABASE_USER_PASS}'; \
	GRANT ALL PRIVILEGES ON '${DATABASE_NAME}'.* TO '${DATABASE_USER_NAME}'@'%';"

RUN chmod 600 /etc/mysql/my.cnf

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

EXPOSE 3306

CMD ["mysqld"]