--TEST--
ServerStats - Version

--SKIPIF--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_skipif("ServerStats", "testVersion");

--FILE--
<?php
include dirname(__FILE__)."/../../cbtestframework/cbtest-phpt-loader.inc";
couchbase_phpt_runtest("ServerStats", "testVersion");
--EXPECT--
PHP_COUCHBASE_OK