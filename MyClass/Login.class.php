<?php
/**
 * class Login *
 * handles the user login/logout/session
 */

namespace Myclass;

class Login
{

  protected $response;

	public function setResponse($response) {
		$this->response = $response;
	}

	public function getResponse() {
		return $this->response;
	}


    public function __construct()
    {
        $this->setResponse( 'The user is in Object Login' );
    }
}
