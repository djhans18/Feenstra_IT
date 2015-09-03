<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => '127.0.0.1',
	'username' => 'root',
	'password' => '',
	'database' => 'fit_catalog',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci'
]);

$capsule->bootEloquent();