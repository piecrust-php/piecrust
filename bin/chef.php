#!/usr/bin/php
<?php

// Check the version of PHP in a separate file
// because some new syntax stuff in PHP 5.3 like
// namespaces or lambdas makes the old PHP parsers
// go into a coma.
if (!defined('PHP_VERSION_ID') or PHP_VERSION_ID < 50300)
{
    die("You need PHP 5.3+ to use PieCrust.");
}

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE & ~E_STRICT);

require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'piecrust.php';

try {
   $returnCode = piecrust_chef();
} catch ( Exception $e ) {
   echo $e->getTraceAsString();
}
exit($returnCode);

