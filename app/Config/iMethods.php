<?php
namespace App\Config;

interface iMethods
{
	public function getMethod($id);
	static public function postMethod($parms);
	static public function putMethod($id);
	static public function deleteMethod($id);
}