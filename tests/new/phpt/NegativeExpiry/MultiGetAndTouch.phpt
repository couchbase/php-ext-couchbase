--TEST--
NegativeExpiry - MultiGetAndTouch
--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("NegativeExpiry", "testMultiGetAndTouch");
--EXPECT--
PHP_COUCHBASE_OK