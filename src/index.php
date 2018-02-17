<?php
require (__DIR__ . '/../vendor/autoload.php');
use PHPImageWorkshop\ImageWorkshop;
 
$pinguLayer = ImageWorkshop::initFromPath(__DIR__.'/../images/test.JPG');
var_dump($pinguLayer);