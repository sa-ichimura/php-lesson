up:
	docker-compose up -d
php:
	docker-compose exec php sh
fmt-diff:
	docker-compose exec php ./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix -v --diff --dry-run
fmt:
	docker-compose exec php ./tools/php-cs-fixer/vendor/bin/php-cs-fixer fix -v --diff
lint:
	docker-compose exec php ./vendor/bin/phpstan analyse -c phpstan.neon