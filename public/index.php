<?php 
require_once '../vendor/autoload.php';

use App\Config as Config;
use App\Controllers\Controller;
use App\Models\Model;

new Config\Route($_REQUEST['method'],  new Controller(new Model));	


