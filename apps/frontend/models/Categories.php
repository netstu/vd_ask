<?php
namespace Multiple\Frontend\Models;

class Categories extends \Multiple\Frontend\Models\ModelBase {
	function getSource() {
		return $this->getTblPrefix() . "categories";
	}
	
	public function initialize() {
		$this->hasMany("catid", "Ask", "catid");
	}
}