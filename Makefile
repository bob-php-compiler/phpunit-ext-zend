libphpunit-ext-zend_u-4.4a.so: loader.php DbUnit/Mysql/Zend/TestCase.php
	bpc -l phpunit-ext-zend \
        -u phpunit          \
        -u phpunit-ext      \
        -u zend             \
        loader.php          \
        DbUnit/Mysql/Zend/TestCase.php

install: libphpunit-ext-zend_u-4.4a.so
	bpc -l phpunit-ext-zend --install

clean:
	@rm -rf .bpc-build-* md5.map
	@rm -fv libphpunit-ext-zend_u-4.4a.so libphpunit-ext-zend_u-4.4a.a phpunit-ext-zend.heap phpunit-ext-zend.sch
