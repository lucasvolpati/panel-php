CONTAINER_HASH_API = $(shell docker ps | grep 'api' | cut -d " " -f 1)

build:
	@echo "Build containers"
	@docker-compose up -d --build

up:
	@echo "Subindo containers"
	@docker-compose up -d

down:
	@echo "Destruindo containers"
	@docker-compose down

composer-install:
	@docker exec -it $(CONTAINER_HASH_API) sh -c "composer install"

composer-update:
	@docker exec -it $(CONTAINER_HASH_API) sh -c "composer update"

package ?=
add:
	@# add - Executar composer require: Ex.: make add package=rollbar/rollbar.
	@docker exec -it $(CONTAINER_HASH_API) sh -c "composer require --optimize-autoloader --prefer-dist ${package}"

migrate:
	@echo "Executando as migrations"
	@docker exec -it $(CONTAINER_HASH_API) sh -c "php migrate.php"
