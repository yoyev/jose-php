mkdir -p -m 777 result
/home/gree/common/php/bin/phpunit -c phpunit.legacy.xml --log-junit result/test.xml --coverage-clover result/coverage.xml --coverage-html result/coverage