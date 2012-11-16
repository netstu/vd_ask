<?php

namespace Multiple\Frontend\Controllers;
use Multiple\Frontend\Models\Categories;

use Phalcon\Mvc\Model\Criteria;
use Multiple\Frontend\Models\Ask;

class IndexController extends \Phalcon\Mvc\Controller
{

	public function indexAction()
	{

	}

	public function askAction() {
// 		$cats = \Multiple\Frontend\Models\Categories::find();
		
// 		print_r($cats);
		$this->view->setVar("cats", Categories::find());
		if ($this->request->isPost()) {
// 			$params = Criteria::fromInput($this->di, "Ask", $_POST);
			$ask = new Ask();
			
			$ask->catid = $this->request->get("catid", "int");
			$ask->title = $this->request->get("title");
			$ask->question = $this->request->get("question");
			$ask->uid = 0;
			$ask->username = "test";
			$ask->asktime = time();
			$ask->isshow = 1;
			$ask->best_aid = 0;
			
			if (!$ask->save()) {
				print_r($ask->getMessages());
				exit('ddd');
			}
		}
	}
}