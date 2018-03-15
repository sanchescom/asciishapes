<?php

require_once ("vendor/autoload.php");

class Application
{
	private $config;
	private $request;

	public function __construct()
	{
		$this->config  = \Noodlehaus\Config::load('config.php');
		$this->request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
	}


	public function run()
	{

	}
}




