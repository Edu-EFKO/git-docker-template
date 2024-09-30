include .env

install:
	@$(MAKE) -s down
	@$(MAKE) -s docker-build
	@$(MAKE) -s up
	@$(MAKE) -s composer-install
	@$(MAKE) -s yii-migrate

up:
	@docker compose -p template up -d

down:
	@docker compose -p template down --remove-orphans

ps:
	@docker compose -p template ps

restart: down up

logs:
	@docker compose -p template logs -f

docker-build: \
	docker-build-php-fpm \
	docker-build-nginx \
	docker-build-common-tools

docker-build-common-tools:
	@docker build --target=common-tools \
	-t localhost/template-common-tools:latest -f ./docker/Dockerfile .

docker-build-php-fpm:
	@docker build --target=fpm \
	--build-arg USER=1000 \
	--build-arg GROUP=1000 \
	-t localhost/template-php-fpm:latest -f ./docker/Dockerfile .

docker-build-nginx:
	@docker build --target=nginx \
	-t localhost/template-nginx:latest -f ./docker/Dockerfile .

composer-install:
	@docker compose -p template run --rm php-fpm composer install --no-cache

yii-migrate:
	@docker-compose -p template run --rm php-fpm php ./yii migrate

yii-migration-create:
	@docker-compose -p template run --rm php-fpm php ./yii migrate/create $(name)