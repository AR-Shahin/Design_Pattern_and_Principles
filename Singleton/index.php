<?php
require_once('Singleton.php');
require_once('DB.php');
require_once('Log.php');
$a = DB::getInstance();
$b = Log::getInstance();

var_dump($a);
var_dump($b);
$c = DB::getInstance();
var_dump($c);
