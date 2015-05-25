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
        $this->model->getAll();
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