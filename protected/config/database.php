<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=db4free.net;dbname=party_db',
	'emulatePrepare' => true,
	'username' => 'marina',
	'password' => 'marina',
	'charset' => 'utf8',

);