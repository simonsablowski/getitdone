<?php

$configuration = array();

$configuration['pathApplication'] = dirname(__FILE__) . '/';

$configuration['baseUrl'] = '/';

$configuration['includeDirectories'] = array(
	$configuration['pathApplication'],
	$configuration['pathApplication'] . '../cheese/',
	$configuration['pathApplication'] . '../nacho/'
);

$configuration['Database'] = array(
	'type' => 'MySql',
	'host' => '127.0.0.1',
	'name' => 'getitdone',
	'user' => 'root',
	'password' => ''
);

$configuration['Request'] = array(
	'segmentSeparator' => '/',
	'defaultQuery' => 'Task/index',
	'aliasQueries' => array(
		'(sign)-in' => 'Authentication/$1In',
		'(sign)-out' => 'Authentication/$1Out'
	)
);

$configuration['passwordSalt'] = '';