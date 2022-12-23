<?php 

// config file
require_once 'config.php';

// Autoload - deprecated
// function __autoload($class_name){
  // require_once 'lib/' . $class_name . '.php';
// }

spl_autoload_register(function($class_name){
  include 'lib/' . $class_name . '.php';
});

// spl_autoload_register(function($class){
//   if(file_exists($class . '.php')){
//     require $class . '.php';
//   }
// });

/*
spl_autoload_register(function($class) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/' . $class . '.php';
});
*/

 