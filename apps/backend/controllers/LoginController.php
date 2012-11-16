<?php

namespace Multiple\Backend\Controllers;

class LoginController extends \Multiple\Backend\Controllers\BackendController
{

	protected function initialize() {
		parent::initialize();
	}
	
	public function indexAction()
	{
		$this->view->disable();
	}

}