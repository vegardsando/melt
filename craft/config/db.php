<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

$customDbConfig = array(

	'*' => array(
		'tablePrefix' => 'craft',
	),
	'LOCAL' => array(
		'server' 	=> 'localhost',
		'user' 		=> 'root',
		'password' 	=> 'root',
		'database' 	=> 'melt_craft'
	),
	'DEV' => array(
		'server' 	=> 'db146794.mysql.sysedata.no',
		//'port' 		=> '8889',
		//'port' => '3306',
		'user' 		=> 'db146794',
		'password' 	=> 'cbb27e7d',
		'database' 	=> 'db146794'
	),
	'STAGE' => array(
		'server' 	=> '',
		'user' 		=> '',
		'password' 	=> '',
		'database' 	=> ''
	),
	'PROD' => array(
		'server' 	=> 'db146794.mysql.sysedata.no',
		'user' 		=> 'db146794',
		'password' 	=> 'cbb27e7d',
		'database' 	=> 'db146794'
	)
);

// If a local db file exists, merge the local db settings
if (is_array($customLocalDbConfig = @include(CRAFT_CONFIG_PATH . 'local/db.php')))
{
	$customGlobalDbConfig = array_merge($customDbConfig['*'], $customLocalDbConfig);
	$customDbConfig = $customGlobalDbConfig;
}
return $customDbConfig;
