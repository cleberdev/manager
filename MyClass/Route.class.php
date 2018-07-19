<?php
namespace MyClass;

class Route {
	private $_uri = array();

	/**
	 * Construct an colection of URL's
	 */
	public function add($uri) {
		$this->_uri[] = trim($uri, "/");
	}
	public function submit() {
		$uriGetParam = isset($_GET['uri'])?$_GET['uri']:'/';
		foreach ($this->_uri as $key => $value) {
			if (preg_match("#^$value$#", $uriGetParam)) {
				return $value;
			}
		}
	}
}
