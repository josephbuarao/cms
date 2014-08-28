<?php
$config = [
	'Datasources' => [
		'default' => [
			'className' => 'Cake\\Database\\Connection',
			'driver' => 'Cake\\Database\\Driver\\MySQL',
			'persistent' => false,
			'host' => 'localhost',
			'login' => 'root',
			'password' => '',
			'database' => 'quickappscms2_test_site',
			'prefix' => 'qa_',
			'encoding' => 'utf8',
			'log' => true,
		],
	],
	'Security' => [
		'salt' => '459dnv028fj20rmv034jv84hv929sadn306139fn)(·%o23',
	],
	'debug' => true,
];