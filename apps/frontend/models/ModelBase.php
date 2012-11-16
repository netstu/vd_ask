<?php
namespace Multiple\Frontend\Models;

class ModelBase extends \Phalcon\Mvc\Model {
	protected function getTblPrefix() {
		return "vd_";
	}
}