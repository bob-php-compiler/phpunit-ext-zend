FILES = run-test.php test-files
test: $(FILES)
	bpc -v \
	    -c ../../zf1/library/Zend/zend.bpc.conf \
	    -o test \
	    -u phpunit \
	    -u phpunit-ext \
	    -u phpunit-ext-zend \
	    -u zend \
	    -d display_errors=on \
	    run-test.php \
	    --input-file test-files
clean:
	@rm -rf .bpc-build-* md5.map
	@rm -fv $(FILES) TESTCASE_LIST.php test
	@rm -rf MockClassFile
