<?php
  // App Root
  define('APPROOT', dirname(dirname(__FILE__)));
  // URL Root; read from environmental variable named "URLROOT"
  define('URLROOT', getenv('URLROOT'));
  // Site Name
  define('SITENAME', 'IdolMVC');