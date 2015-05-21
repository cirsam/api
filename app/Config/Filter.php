<?php
namespace App\Config;

abstract Class Filter
{
	private $parms=array();
	
	protected abstract function getPath($parms);
	
	protected function filter($parts)
    {
		if (isset($parts[0], $parts[1]) && $parts[1] != null) {
		    $parms['method'] = strtoupper($parts[0]);
			$parms['id']     = $parts[1];
            $parms['message'] = "ok";
		}else {
			if (
				(strtoupper($parts[0]) == "DELETE" && isset($parts[1]) && $parts[1] == null)
				|| (strtoupper($parts[0]) == "POST" && isset($parts[1]) && $parts[1] == null)
				|| (strtoupper($parts[0]) == "PUT" && isset($parts[1]) && $parts[1] == null)				
			) {
				$parms['message'] = "you can not leave your parameter blank";
			} elseif (strtoupper($parts[0]) == "GET"){
                $parms['method'] = "GET";
				$parms['message'] = "ok";								
			} else {
				$parms['message'] = "not a valid endpoint";				
			}
		}
		
		return $parms;
	}	
}


