<?php

namespace Multiple\Backend\Controllers;

use Multiple\Backend\Controllers\BackendController;
use Phalcon\Tag;

class TestController extends BackendController {
	protected function initialize() {
		Tag::setTitle('test xxx');
		parent::initialize();
	}
	
	public function indexAction() {
		$this->view->setVar('subtitle', 'controller test');
		echo 'backend-test-index';
		
// 		$s = $this->getParm(null);
// 		print_r($s);
		
		$id = $this->getParm('idf');
		$name = $this->getParm('name');
		$names = $this->getParm('names');
		
// 		$par = $this->request->get("Parameter");
		
		//print_r($this->request);
		
		$controller = $this->dispatcher->getControllerName();
		echo "id:".$id.",name:".$name.",controller:".$controller.",par:".$names;
		
		
	}
	
	public function pppAction($id) {
		echo "id:".$id;
	}
}

?>