#!/usr/bin/env php
<?php

chdir(dirname(__FILE__));

$returnStatus = null;

passthru('composer install', $returnStatus);
if ($returnStatus !== 0) {
    exit(1);
}

$config = $autoload ? 'phpunit.xml' : 'phpunit.no_autoload.xml';
passthru("./vendor/bin/phpunit -c $config", $returnStatus);
if ($returnStatus !== 0) {
    exit(1);
}
