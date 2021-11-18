ssh-container:
ifeq "$(filter-out ssh-container, $(MAKECMDGOALS))" "api"
	docker exec -it $(filter-out ssh-container, $(MAKECMDGOALS)) /bin/bash
else
	docker exec -it $(filter-out ssh-container, $(MAKECMDGOALS)) /bin/sh
endif
	
build-and-up:
	docker-compose --build up -d

down:
	docker-compose down

restart:
	docker-compose restart

seed-data:
	docker exec api sh \
    -c "php artisan db:seed"

restart:
	docker-compose down && docker container prune && docker network prune && docker volume prune && docker system prune

restart-linux:
	sudo docker-compose down && sudo docker container prune && sudo docker network prune && sudo docker volume prune && sudo docker system prune