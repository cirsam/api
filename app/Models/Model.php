<?php
namespace App\Models;

use App\Config\iMethods;

Class Model implements iMethods
{
    public function __construct ()
	{
		echo "<h4>This is where data collection happens. 
		<br />You can use Relational Database Model Object like Eloquent or your own MySQL Database. Next stage is adding data processor</h4>Result: ";
	}
	
	public function getMethod($parms) 
	{
       echo "his is model get all data with id = ".$parms['id'];
	}
	
	public function getAll() 
	{
		print "this is model get all data";		
	}
	
	public function postMethod($parms)
	{	
        echo "this is model insert data  with <br />
		id =".$parms['id']."<br />
		color =".$parms['color']."<br />
		name =".$parms['name'];
	}
	
	public function putMethod($parms)
	{
		print "this is model updating data with id = ".$parms['id'];
	}
	
	public function deleteMethod($parms)
	{
		print "this model deleting data with id = ".$parms['id'];
	}	
}