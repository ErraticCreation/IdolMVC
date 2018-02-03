<?php
  //DB Params
  
  // Check for DB_HOST env variable for DB_HOST const, set to localhost by default.
  define('DB_HOST', (getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost'));
  
  // Check for DB_USER env variable for DB_USER const, set to root by default.
  define('DB_USER', (getenv('DB_USER') ? getenv('DB_USER') : 'root'));
  
  // Check for DB_PASS env variable for DB_PASS const, set to Password by default.
  define('DB_PASS', (getenv('DB_PASS') ? getenv('DB_PASS') : 'Password'));
  
  // Check for DB_NAME env variable for DB_NAME const, set to idolmvc by default.
  define('DB_NAME', (getenv('DB_NAME') ? getenv('DB_NAME') : 'idolmvc'));


  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root; read from environmental variable named "URLROOT"
  define('URLROOT', getenv('URLROOT'));
  // Site Name
  define('SITENAME', 'IdolMVC');