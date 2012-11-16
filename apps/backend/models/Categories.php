<?php
namespace Multiple\Backend\Models;

class Categories extends \Multiple\Backend\Models\ModelBase {
	function getSource() {
		return $this->getTblPrefix() ."categories";
	}
}