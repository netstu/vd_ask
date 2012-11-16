<?php
namespace Multiple\Frontend\Controllers;
use Multiple\Frontend\Controllers\FrontendController;

class CategoriesController extends FrontendController {
	function indexAction() {
		;
	}
	
	function catAction( $catid ) {
		 $id = $this->filter->sanitize($catid, array("int"));
		 echo("fff$id");
		 
	}
}