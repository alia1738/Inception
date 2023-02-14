all: create_volumes
	docker compose --file srcs/docker-compose.yml up -d --build

create_volumes:
#	mkdir -p wp db
	mkdir -p /home/${USER}/data
	mkdir -p /home/${USER}/data/wp /home/${USER}/data/db

remove_volumes:
#	rm -rf wp db
	rm -rf /home/${USER}/data/wp /home/${USER}/data/db

clean: remove_volumes
	docker compose --file srcs/docker-compose.yml down

fclean:remove_volumes
	docker compose --file srcs/docker-compose.yml down -v

bash_nginx:
	docker exec -it srcs_nginx_1 bash

bash_wordpress:
	docker exec -it srcs_wordpress_1 bash

bash_mariadb:
	docker exec -it srcs_mariadb_1 bash

re: fclean all