<?php
namespace Multiple\Frontend\Controllers;

class TestController extends \Multiple\Frontend\Controllers\FrontendController {
	function indexAction() {
		echo 'sss';
		$this->view->cache(true);
	}
	
	function testAction() {
		;
	}
}