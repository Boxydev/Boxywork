cs:
	./vendor/bin/php-cs-fixer fix src/ --dry-run --diff

test:
	./vendor/bin/phpunit --coverage-text