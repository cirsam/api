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
		
	}
	
	public function getRaw()
	{
		$newData = array();
			
		try {
			    $fileName = "../storage/data/system_data.csv";
			
		        if (!file_exists($fileName)) {
			        throw new \Exception("file not found");
		        }
				
			    $dataFile = fopen($fileName, "r");
			
			    do {
				    $data[] = \fgetcsv($dataFile);
			    } while (!feof($dataFile));
			
			    fclose($dataFile);
				
			    $dataHeaders = $data[0];
			    unset($data[0]);
			    
			    foreach ($data as $subData) {
			    	$newData[] = array_combine($dataHeaders, $subData);
			    }
			    			    
			return $newData;		
		} catch (\Exception $e) {
			echo $e;
		}		
	}
	
	public function postMethod($parms)
	{
		$separator = '"';
		$row = array();		
		foreach ($parms['tablecolumns'] as $columnName){
        	$row[] = $separator.$parms[$columnName].$separator;
		}
	    $row = implode(',', $row);	
		file_put_contents ("../storage/data/system_data.csv", chr(10).$row, FILE_APPEND);	
		return "ok";
	}
	
	public function putMethod($parms)
	{
		
		try {
			$dataNew = "";
			$fileName = "../storage/data/system_data.csv";
			$fileNameTemp = "../storage/data/system_datatemp.csv";
			
			if (!file_exists($fileName)) {
				throw new \Exception("file not found");
			}
			
			$dataFileTemp = fopen($fileNameTemp, "w");
			$tableColumns = implode(",", $parms['tablecolumns']);
			file_put_contents($fileNameTemp, $tableColumns);
				
			$dataFile = fopen($fileName, "r");
			while(!feof($dataFile)) {
				$data = \fgetcsv($dataFile);
				if ($data[0] != "id"){
					if ($data[0] == $parms['id']) {
						$dataNew = implode(",", $data);
						
						file_put_contents ($fileNameTemp, chr(10).$dataNew, FILE_APPEND);
					} else {
						$dataNew = implode(",", $data);
						file_put_contents ($fileNameTemp, chr(10).$dataNew, FILE_APPEND);
					}
				}
			}
			
			fclose($dataFile);
			fclose($dataFileTemp);
			rename($fileNameTemp, $fileName);
			return "ok";	
		}catch(\Exception $e) {
			print $e;
		}
    }
	
	public function deleteMethod($parms)
	{			
		try {
			    $dataNew = "";
			    $fileName = "../storage/data/system_data.csv";
			    $fileNameTemp = "../storage/data/system_datatemp.csv";

		        if (!file_exists($fileName)) {
			        throw new \Exception("file not found");
		        }
		        
		        $dataFileTemp = fopen($fileNameTemp, "w");
		        $tableColumns = implode(",", $parms['tablecolumns']);
		        file_put_contents($fileNameTemp, $tableColumns);
		        			        
		        $dataFile = fopen($fileName, "r");
			    while(!feof($dataFile)) {
				    $data = \fgetcsv($dataFile);
				    if ($data[0] != "id"){
				    	if ($data[0] != $parms['id']){
				    		$dataNew = implode(",", $data);
				    		file_put_contents ($fileNameTemp, chr(10).$dataNew, FILE_APPEND);
				    	}
				    }
			    }

			   fclose($dataFile);
			   fclose($dataFileTemp);
			   rename($fileNameTemp, $fileName);
			return "ok";
         } catch (\Exception $e) {
			echo $e;
		}
	}	
}