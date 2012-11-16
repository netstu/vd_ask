<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

class Application extends \Phalcon\Mvc\Application
{

	/**
	 * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
	 */
	protected function _registerServices()
	{

		$config = include(__DIR__."/../apps/config/config.php");
		
		$di = new \Phalcon\DI\FactoryDefault();

		$loader = new \Phalcon\Loader();

		/**
		 * We're a registering a set of directories taken from the configuration file
		 */
		$loader->registerDirs(
			array(
				$config->application->libraryDir,
				$config->application->pluginDir
			)
		)->register();

		//Registering a router
		$di->set('router', function(){

			$router = new \Phalcon\Mvc\Router();

			$router->setDefaultModule("frontend");
		
			$router->add('/:controller/:action', array(
				'module' => 'frontend',
				'controller' => 1,
				'action' => 2,
			));
			
			$router->add("/cats/index", array(
				'module' => 'frontend',
				'controller' => 'categories',
				'action' => 'index',
			));
			
			$router->add("/cat/:params", array(
				'module' => 'frontend',
				'controller' => 'categories',
				'action' => 'cat',
				'params' => 1,
			));
			
			$router->add("/ask/:params", array(
				'module' => 'frontend',
				'controller' => 'ask',
				'action' => 'ask',
				'params' => 1,	
			));

			$router->add("/admin/:controller/:action/:params", array(
				'module' => 'backend',
				'controller' => 1,
				'action' => 2,
				'params' => 3,
			));

			return $router;

		});
		
		$di->set('db', function () use ($config) {
			$mysql = new \Phalcon\Db\Adapter\Pdo\Mysql(array(
				"host" => $config->database->host,
				"username" => $config->database->username,
				"password" => $config->database->password,
				"dbname" => $config->database->name
			));
			$mysql->query("set names 'utf8'");
			return $mysql;
		});
		
		$di->set('volt', function($view, $di) use ($config)  {
			$volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);
			$volt->setOptions(
					array(
							'compiledPath'      => $config->volt->path,
							'compiledExtension' => $config->volt->extension,
							'compiledSeparator' => $config->volt->separator,
							'stat'              => (bool) $config->volt->stat,
					)
			);
			return $volt;
		});
		
		//Set the views cache service
		$di->set('viewCache', function(){
		
			//Cache data for one day by default
			$frontCache = new Phalcon\Cache\Frontend\Output(array(
					"lifetime" => 86400
			));
		
			//Memcached connection settings
			$cache = new Phalcon\Cache\Backend\File($frontCache, array(
					"cacheDir" => "../apps/caches/"
			));
		
			return $cache;
		});
		
		/**
		 * If the configuration specify the use of metadata adapter use it or use memory otherwise
		 */
		$di->set('modelsMetadata', function() use ($config) {
			if(isset($config->models->metadata)){
				$metaDataConfig = $config->models->metadata;
				$metadataAdapter = 'Phalcon\Mvc\Model\Metadata\\'.$metaDataConfig->adapter;
				return new $metadataAdapter();
			} else {
				return new Phalcon\Mvc\Model\Metadata\Memory();
			}
		});
		
		//Start the session the first time some component request the session service
		$di->set('session', function(){
			$session = new Phalcon\Session\Adapter\Files();
			$session->start();
			return $session;
		});

		$this->setDI($di);
	}

	public function main()
	{

		$this->_registerServices();

		//Register the installed modules
		$this->registerModules(array(
			'frontend' => array(
				'className' => 'Multiple\Frontend\Module',
				'path' => '../apps/frontend/Module.php'
			),
			'backend' => array(
				'className' => 'Multiple\Backend\Module',
				'path' => '../apps/backend/Module.php'
			)
		));

		echo $this->handle()->getContent();
	}

}

$application = new Application();
$application->main();
