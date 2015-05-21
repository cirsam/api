 <?php 
require_once '../vendor/autoload.php';

use App\Config as Config;

if (isset($_REQUEST['method'])) {
    new Config\Route($_REQUEST['method']);	
} else {
    echo '
	DataSet = [
	{
		id:1,
		color: "red",
		value: "#f00"
	},
	{
		id:2,
		color: "green",
		value: "#0f0"
	},
	{
		id:3,
		color: "blue",
		value: "#00f"
	},
	{
		id:4,
		color: "cyan",
		value: "#0ff"
	},
	{
		id:5,
		color: "magenta",
		value: "#f0f"
	},
	{
		id:6,
		color: "yellow",
		value: "#ff0"
	},
	{
		id:7,
		color: "black",
		value: "#000"
	}
]
		<style>
		    ul li{list-style:none;margin-bottom:20px;}
		    ul li strong{color:blue;}		
		</style>
		<br />
		<br />
		<br />
	    To use this application, start by specifying an endpoint. eg
	    <ul>
			<li><strong>get/1</strong> will get data with id = 1</li>
			<li><strong>post/headers</strong> will insert data, still constructing it</li>
			<li><strong>put/1</strong> will update data with id = 1 still constructing it</li>
			<li><strong>delete/1</strong> will delete data with id = 1 still constructing it</li>
		</ul>
	';
}
