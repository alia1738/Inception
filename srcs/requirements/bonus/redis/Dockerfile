FROM debian:buster

RUN apt-get update && apt-get install -y \
	redis-server \
	php-redis

COPY conf/redis.conf /etc/redis/

EXPOSE 6379

CMD [ "redis-server", "--protected-mode", "no" ]