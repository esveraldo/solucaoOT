<?php

require_once '../vendor/autoload.php';

use App\DI\Container;

$urls = Container::url();
$url = isset($_GET['url']) ? $_GET['url'] : 'login';
$urls->urls($url);


 ?>