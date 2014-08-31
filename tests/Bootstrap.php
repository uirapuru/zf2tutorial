<?php
//we create ServiceManagerGrabber class later...
use ModulesTests\ServiceManagerGrabber;
 
error_reporting(E_ALL | E_STRICT);
 
$cwd = __DIR__;
chdir(dirname(__DIR__));
 
// Assume we use composer
$loader = include  './vendor/autoload.php';

$loader->add("ModulesTests\\", $cwd);
$loader->register();
 
ServiceManagerGrabber::setServiceConfig(require_once './config/application.config.php');
ob_start();