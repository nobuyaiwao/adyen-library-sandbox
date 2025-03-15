check:
	curl -s -o /dev/null -w "%{http_code}\n" http://localhost:8000

stop:
	docker-compose down

restart:
	docker-compose down && docker-compose up --build

rebuild:
	docker-compose up --build --force-recreate

restart-php:
	docker restart adyen-library-sandbox_php-container_1
