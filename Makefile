all: create_volumes
	docker compose --file srcs/docker-compose.yml up -d --build

create_volumes:
	mkdir -p /home/${USER}/data
	mkdir -p /home/${USER}/data/wp /home/${USER}/data/db

remove_volumes:
	sudo rm -rf /home/${USER}/data/wp /home/${USER}/data/db

clean:
	docker compose --file srcs/docker-compose.yml down

fclean:remove_volumes
	docker compose --file srcs/docker-compose.yml down -v

bash_nginx:
	docker exec -it srcs-nginx-1 bash

bash_wordpress:
	docker exec -it srcs-wordpress-1 bash

bash_mariadb:
	docker exec -it srcs-mariadb-1 bash

re: fclean all