<?php require_once '../vendor/autoload.php'; ?>
<?php
ob_start();

use App\DI\Container;

$ses = Container::getSes();
if ($ses->ses()) {
    header("Location: /ot/public/login");
}

set_time_limit(0);
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Material Design Bootstrap</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="assets//css/bootstrap.min.css">
        <!-- Material Design Bootstrap -->
        <link rel="stylesheet" href="assets//css/mdb.min.css">

        <!-- Your custom styles (optional) -->
        <style>

        </style>
    </head>

