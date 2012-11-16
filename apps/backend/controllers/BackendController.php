<?php

namespace Multiple\Backend\Controllers;

use \Phalcon\Mvc\Controller;
use \Phalcon\Tag;

class BackendController extends Controller {
	protected function initialize() {
		Tag::prependTitle('Blog Admin | ');
		
	}
	
	protected function getParm($param) {
		$params = $this->dispatcher->getParams();
		
		$flag = false;
		foreach ($params as $value) {
			if ($param == $value) {
				return current($params);
			}
		}
		return null;
	}
	
	protected function forward($uri) {
		$uriParts = explode('/', $uri);
		return $this->dispatcher->forward(
				array(
						'controller' => $uriParts[0],
						'action' => $uriParts[1]
				)
		);
	}
}

?>