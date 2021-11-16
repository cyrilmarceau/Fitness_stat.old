ssh-container:
ifeq "$(filter-out ssh-container, $(MAKECMDGOALS))" "api"
	docker exec -t $(filter-out ssh-container, $(MAKECMDGOALS)) /bin/bash
else
	docker exec -t $(filter-out ssh-container, $(MAKECMDGOALS)) /bin/sh
endif
	
build-and-up:
	docker-compose --build up -d docker-compose stop

stop:
	docker-compose stop

restart:
	docker-compose restart

seed-data:
	docker exec api sh \
    -c "cd /var/www/html/api/ && php artisan db:seed"