<?php
namespace App\Controllers;

use App\Model;
use App\Config\iMethods;

Class Controller implements iMethods
{
	public function __construct()
	{
		//echo "this is the constructor";
	}
	
	public function getMethod($parms) 
	{
		if (isset($parms['id'])) {
			print "get data for this id = ".$parms['id'];
		} else {
			$this->getAll();
		}
	}
	
	private function getAll() 
	{
		print "get all data";		
	}
	
	static public function postMethod($parms)
	{
		print "inserting data";
	}
	
	static public function putMethod($parms)
	{
		print "updating data with id = ".$parms['id'];
	}
	
	static public function deleteMethod($parms)
	{
		print "delete data with id = ".$parms['id'];
	}
}