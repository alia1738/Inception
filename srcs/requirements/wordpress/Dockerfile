FROM debian:buster

COPY tools/entrypoint /
COPY tools/install_wordpress /
COPY tools/install_WP-CLI /

COPY tools/lola.php /var/www/html/
COPY conf/wp-config.php /var/www/html/

RUN apt-get update && apt-get install -y \
	curl \
    php \
	php7.3-fpm \
    php-mysqli \
	wget

RUN rm -rf /var/lib/apt/lists/*

RUN chmod u+x entrypoint install_wordpress install_WP-CLI

RUN ./install_wordpress && ./install_WP-CLI

COPY conf/www.conf /etc/php/7.3/fpm/pool.d/www.conf

COPY tools/static_website/ /game/

RUN mv game /var/www/html/

EXPOSE 9000

ENTRYPOINT [ "./entrypoint" ]
