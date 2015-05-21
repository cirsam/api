<?php
namespace App\Config;

use App\Config as Config;
use App\Controllers\Controller as controller;

Class Route extends Config\Filter
{
	private $id = "";
	private $method = "";
	private $parms = array();
	private $uri = "";
	private $parts = "";
	
	function __construct($uri)
	{		
		$parts = explode("/", $uri);
		
		    $parms = $this->filter($parts);
			
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
		    $controller = new controller();
			call_user_func_array(array($controller, 'getMethod'), array($parms));
			break;
		Case "POST":
			call_user_func_array(array('App\Controllers\Controller', 'postMethod'), array($parms));
            break;	
		Case "PUT":
			call_user_func_array(array('App\Controllers\Controller', 'putMethod'), array($parms));
			break;
		Case "DELETE":
			call_user_func_array(array('App\Controllers\Controller', 'deleteMethod'), array($parms));
			break;
		default:
		    echo "Not a valid endpoint";
		}
	}
}