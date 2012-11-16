<?php
namespace Multiple\Frontend\Controllers;

use Multiple\Frontend\Models\Ask;

class AskController extends \Multiple\Frontend\Controllers\FrontendController {
	function indexAction() {
		;
	}
	
	function askAction($askid) {
		$askid = $this->filter->sanitize($askid, "int");
		$ask = Ask::findFirst(array("askid"=>$askid));
		
		$this->view->setVar("ask", $ask);
	}
}