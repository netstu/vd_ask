<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'  => 'Mysql',
		'host'     => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'name'     => 'vdask',
	),
	'application' => array(
		'libraryDir'     => __DIR__ . '/../../apps/library/',
		'pluginDir'      => __DIR__ . '/../../apps/plugins/'
	),
	'volt' => array(
		'path'	         => __DIR__ . '/../../apps/compiled/',
		'extension'      => '.php',
		'separator'      => '%%',
		'stat'           => true
	),
	'frontend' => array(
		'controllersDir' => __DIR__ . '/../../apps/frontend/controllers/',
		'modelsDir'      => __DIR__ . '/../../apps/frontend/models/',
		'viewsDir'       => __DIR__ . '/../../apps/frontend/views/',
		'pluginsDir'     => __DIR__ . '/../../apps/frontend/plugins/',
		'baseUri'        => '/phalconblog/',
	),
	'backend' => array(
			'controllersDir' => __DIR__ . '/../../apps/backend/controllers/',
			'modelsDir'      => __DIR__ . '/../../apps/backend/models/',
			'viewsDir'       => __DIR__ . '/../../apps/backend/views/',
			'pluginsDir'     => __DIR__ . '/../../apps/backend/plugins/',
			'baseUri'        => '/admin/',
	),
		
	'models' => array(
		'metadata' => array(
			'adapter' => 'Memory'
		)
	)
));
