docker-up:
	docker-compose up -d

docker down:
	docker-compose down

docker build:
	docker-compose up --build -d

test:
	docker exec app_php-fpm_1 vendor/bin/phpunit --colors=always
assets-install:
	docker exec app_node_1 npm install -g n

assets-dev:
	docker exec app_node_1 npm run dev

assets-watch:
	docker exec app_node_1 npm run watch

perm:
	sudo chown ${USER}:${USER} bootstrap/cache -R
	sudo chown ${USER}:${USER} storage -R
	if [-d "node_modules" ]; then sudo chown ${USER}:${USER} node_modules -R; fi
	if [-d "public/build" ]; then sudo chown ${USER}:${USER} public/build -R; fi

del-sql:
	sudo chown -R ${USER}:${USER} storage/
	sudo rm -R storage/docker/mysql
