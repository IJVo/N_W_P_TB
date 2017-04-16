<?php

require __DIR__ . '/../vendor/autoload.php';

setlocale(LC_TIME, "czech");
date_default_timezone_set('Europe/Prague');


Testbench\Bootstrap::setup(__DIR__ . '/_temp', function (Nette\Configurator $configurator) {
	$configurator->createRobotLoader()->addDirectory([
			__DIR__ . '/../app',
	])->register();

	$configurator->setDebugMode(TRUE);

	$configurator->addParameters([
			'appDir' => __DIR__ . '/../app',
			'testsDir' => __DIR__,
	]);

	$configurator->addConfig(__DIR__ . '/../app/config/config.neon');

});
