<?php
/**
 * Class that verify if user has permissions the modules
 */

namespace MyClass;


use MyClass\EngineTemplate\ValidatePosts;

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
	public function __construct($data = []) {

    $result = ValidatePosts::valida_users($data, 'level');
    var_dump($data);
    var_dump($result);

    //die();
  }




}