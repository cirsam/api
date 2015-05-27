<?php
namespace App\Models;

use App\Config\iMethods;

Class Model implements iMethods
{
    public function __construct ()
	{
		
		//echo "<h4>This is where data collection happens. 
		//<br />You can use Relational Database Model Object like Eloquent or your own MySQL Database. Next stage is adding data processor</h4>Result: ";
	}
	
	public function getMethod($id)
	{	
		try{

			$array = array(
			    array(
				    "id"=>"1",
				    "color"=>"fff",
				    "name"=>"white",			
				),
			    array(
				    "id"=>"2",
				    "color"=>"0000",
				    "name"=>"black",			
				),
			    array(
				    "id"=>"3",
				    "color"=>"eee",
				    "name"=>"silver",			
				),		
			);
			
			
			
			foreach($array as $array){
				print $array['color'];
			}
			
			// if($results == "") {
				// throw new \Exception("net in array");
			// }
			
			//return $results;
		}catch(\Exception $e){
			echo $e;
		}
		echo "his is model get all data with id = " . $id;
	}
	
	public function getAll() 
	{
		print "this is model get all data";		
	}
	
	public function postMethod($parms)
	{
		// if(!is_file("../storage/data/system_data.csv")) {
			// fopen ("../storage/data/system_data.csv", "w") or die("problem creating file");
		// }
		
		//$datafile = fopen("../storage/data/system_data.csv", "w") or die("problem creating file");
		
		// $data = $parms['id']. " ". $parms['color']." ". $parms['name'];
		
		// fwrite($datafile, $data);
		
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