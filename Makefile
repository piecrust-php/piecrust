
.PHONY: cover

PHP=php
BROWSER=firefox

cover:
	$(PHP) -d zend_extension=xdebug ./vendor/bin/phpunit --coverage-html cover --whitelist src tests/src/
	$(BROWSER) cover/index.html
