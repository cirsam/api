<?php 
require_once '../vendor/autoload.php';

use App\Config as Config;
use App\Controllers\Controller;
use App\Models\Model;

$uri = (isset($_REQUEST['method']))?$_REQUEST['method'] : "";

new Config\Route($uri,  new Controller(new Model));	


