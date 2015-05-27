<?php
namespace App\Config;

abstract class Filter
{
	private $parms = array ();
	
	protected abstract function getPath($parms);
	
	protected function filter($parts, $myfileds)
    {
    	$parms['tablecolumns'] = $myfileds;
    	  						
		if (isset ( $parts [0], $parts [1] ) && $parts [1] != null && strtoupper ( $parts [0] ) != "POST") {
			$parms ['method'] = strtoupper ( $parts [0] );
			$parms ['id'] = $parts [1];
			$parms ['message'] = "ok";
		} else {
			if ((strtoupper ( $parts [0] ) == "DELETE" && isset ( $parts [1] ) && $parts [1] == null) || (strtoupper ( $parts [0] ) == "PUT" && isset ( $parts [1] ) && $parts [1] == null)) {
				$parms ['message'] = "you can not leave your parameter blank";
			} elseif (strtoupper ( $parts [0] ) == "GET") {
				$parms ['method'] = "GET";
				$parms ['message'] = "ok";
			} elseif (strtoupper ( $parts [0] ) == "POST" && isset ( $_REQUEST ['id'] )) {
				$parms ['method'] = "POST";
				unset ( $_REQUEST ['method'] );
				foreach ( $_REQUEST as $key => $value ) {
					if (in_array ( $key, $myfileds)) {
						$parms [$key] = $value;
					} else {
						echo "<strong>" . $key . " </strong>is not an acceptable field. Contact system administrator";
						exit ();
					}
				}
				$parms ['message'] = "ok";
			} else {
				$parms ['message'] = "not a valid endpoint";
			}
		}
		
		return $parms;
	}
}