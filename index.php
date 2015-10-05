<?php 
     define('DS', DIRECTORY_SEPATOR);
     define('ROOT', realpath(dirname(__FILE__)).DS);

     require_once "Config/Autoload.php";
     Config\Autoload::run();
?>