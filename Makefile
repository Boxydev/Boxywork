cs:
	./vendor/bin/php-cs-fixer fix src/ --dry-run

test:
	./vendor/bin/phpunit --coverage-text