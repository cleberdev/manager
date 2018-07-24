<?php

namespace MyClass;

Class Permission
{

	protected $response;



	public function setResponse($response) {
		$this->response = $response;
	}

	public function getResponse() {
		return $this->response;
	}

	public function __construct(){
		$this->setResponse( "new class instance test of class dinamyc" );
		return $this->getResponse();
	}
}
