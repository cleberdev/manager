<?php
/**
 * Class that verify if user has permissions the modules
 */
namespace MyClass;

use MyClass\Users;

class Userlevel {
	private $_uri = array();
  protected $response;

  public function setResponse($response) {
    $this->response = $response;
  }

  public function getResponse() {
    return $this->response;
  }
	/**
	 * Construct an colection of URL's
	 */
	public function __construct() {

      var_dump($_POST);

  	}




}
