<?php 

require __DIR__.'/reqInterface.php';
require __DIR__.'/http/request.php';
require __DIR__. '/api/request.php';
// use http\Request;
$request = new http\Request();
$request->handle();
echo PHP_EOL;

// use api\Request;
$request = new api\Request();
$request->handle();

?>