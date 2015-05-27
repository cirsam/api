<?php
namespace App\Controllers;

use App\Models\Model as Model;
use App\Config\iMethods;

Class Controller implements iMethods
{
	private $model;
	private $parms = array();
	
	public function __construct(Model $model)
	{
        $this->model =  $model;

		if (!file_exists("../storage/data/")) {
			mkdir("../storage/data/", 0777);			
		}
	}
	
	public function getMethod($parms) 
	{
		$data = array();
		$raw = $this->getAll();
			
		if (isset($parms['id'])) {
			foreach ($raw as $key=>$subRaw) {
			    $subRawKey = array_search($parms['id'], $raw[$key]);
			    if($subRawKey == 'id'){
			    	$data[] = $subRaw;
			    }
			}
			print json_encode($data);
		} else {
			print json_encode($raw);
		}
	}
	
	private function getAll() 
	{
        return $this->model->getRaw();
	}
	
	public function postMethod($parms)
	{		
		unset($parms['method'], $parms['message']);
        $this->model->postMethod($parms);
	}
	
	public function putMethod($parms)
	{
        $this->model->putMethod($parms);
	}
	
	public function deleteMethod($parms)
	{
        $this->model->deleteMethod($parms);
	}
}