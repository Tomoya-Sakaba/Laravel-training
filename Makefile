# Docker
init:
	docker-compose up -d --build

install:
	docker-compose exec web composer install
	docker-compose exec web php artisan key:generate
	docker-compose exec web php artisan migrate --seed
	docker-compose exec web npm install
	docker-compose exec web npm run build

up:
	docker-compose up -d

down:
	docker-compose down

build:
	docker-compose build

stop:
	docker-compose stop

ps:
	docker-compose ps

web:
	docker-compose exec web bash

restart:
	docker-compose down
	docker-compose up -d

fresh:
	docker-compose exec web php artisan migrate:fresh --seed

seed:
	docker-compose exec web php artisan db:seed

dev:
	docker-compose exec web npm install
	docker-compose exec web npm run build

clear:
	docker-compose exec web php artisan cache:clear
	docker-compose exec web php artisan config:clear
	docker-compose exec web php artisan route:clear
	docker-compose exec web php artisan view:clear