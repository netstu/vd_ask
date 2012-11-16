<?php
namespace Multiple\Frontend\Models;

use Phalcon\Mvc\Model\Validator\Inclusionin;

use Phalcon\Mvc\Model\Validator;

class Ask extends \Multiple\Frontend\Models\ModelBase {
	function getSource() {
		return $this->getTblPrefix() . "ask";
	}
	
	public function initialize() {
		$this->belongsTo("catid", "Categories", "catid");
	}

}