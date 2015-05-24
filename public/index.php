 <?php 
require_once '../vendor/autoload.php';

use App\Config as Config;
?>
<html>
    <head>
        <title>Open Source API Plug-in</title>
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <link rel="stylesheet" type="text/css" media="screen, projection" href="css/style.css" />
        <script src="js/jquery-2.1.4.min.js"></script>
  </head>
<body>
<?php
if (isset($_REQUEST['method'])) {
    new Config\Route($_REQUEST['method']);	
} else {
    echo '
        <h1>Open Source Plug-in API</h1>
		<br />
		<br />
	    To use this application, start by specifying an endpoint. For example
	    <ul>
			<li><strong>get/1</strong> will get data with id = 1</li>
			<li><strong>post/headers</strong> will insert data, still constructing it</li>
			<li><strong>put/1</strong> will update data with id = 1 still constructing it</li>
			<li><strong>delete/1</strong> will delete data with id = 1 still constructing it</li>
		</ul>
	';
}
?>
</body>
</html>