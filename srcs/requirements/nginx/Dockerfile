FROM debian:buster

RUN apt-get update && apt-get install -y \
	nginx \
	openssl

COPY conf/nginx.conf /etc/nginx/nginx.conf
COPY conf/csr.conf /etc/nginx/csr.conf
COPY tools/create_crt /

RUN chmod u+x create_crt && ./create_crt

CMD ["nginx", "-g", "daemon off;"]