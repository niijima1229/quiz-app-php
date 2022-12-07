destroy:
	docker-compose down --rmi all --volumes --remove-orphans
build:
	docker-compose build --no-cache --force-rm
up:
	docker-compose up -d
down:
	docker-compose down --remove-orphans
php:
	docker-compose exec php bash
ps:
	docker-compose ps
php/install:
	docker-compose exec php composer install
	docker-compose exec php npm install
php/laravel-init:
	docker-compose exec php cp .env.example .env
	docker-compose exec php php artisan storage:link
	docker-compose exec php php artisan migrate
	docker-compose exec php php artisan db:seed
init:
	@make build
	@make up
	@make php/install
	@make php/laravel-init