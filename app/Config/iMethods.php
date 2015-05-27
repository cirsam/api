<?php
namespace App\Config;

interface iMethods
{
	public function getMethod($id);
	public function postMethod($parms);
	public function putMethod($id);
	public function deleteMethod($id);
}