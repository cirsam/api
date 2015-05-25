<?php 
require_once '../vendor/autoload.php';

use App\Config as Config;

new Config\Route($_REQUEST['method']);	

?>
