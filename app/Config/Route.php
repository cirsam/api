<?php
namespace App\Config;

use App\Config as Config;
use App\Controllers\Controller as controller;

Class Route extends Config\Filter
{
	private $parms = array();
	private $uri = "";
	private $parts = "";
	private $myfileds = array("id", "color", "name");
	private $controller;
	
	function __construct($uri, Controller $controller)
	{
        $this->controller = $controller;
		
		$parts = explode("/", $uri);
		
		$parms = $this->filter($parts, $this->myfileds);
			
        if ($parms['message'] != "ok") {
            echo  $parms['message'];
        } else {
            $this->getPath($parms);
        }
	}
	
	protected function getPath($parms)
	{
		switch ($parms['method']) {
		Case "GET":
			$this->controller->getMethod($parms);			
			break;
		Case "POST":
			 $this->controller->postMethod($parms);
            break;	
		Case "PUT":
			$this->controller->putMethod($parms);
			break;
		Case "DELETE":
			$this->controller->deleteMethod($parms);
			break;
		default:
		    echo "Not a valid endpoint";
		}
	}
}