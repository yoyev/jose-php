<?php

set_include_path(
    get_include_path() . PATH_SEPARATOR .
    dirname(__FILE__) . '/../vendor/phpseclib/phpseclib/phpseclib'
);

require_once dirname(__FILE__) . '/JOSE/TestCase.php';
