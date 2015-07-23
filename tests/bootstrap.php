<?php

/**
*
 * Copyright (c) 2015 Martin Jirásek (jertin@seznam.cz)
 *
 */
if (@!include __DIR__ . '/../vendor/autoload.php') {
	echo 'Install Nette Tester using `composer update --dev`';
	exit(1);
}

// configure environment
Tester\Environment::setup();
class_alias('Tester\Assert', 'Assert');
date_default_timezone_set('Europe/Prague');

function run(Tester\TestCase $testCase) {
	$testCase->run();
}
