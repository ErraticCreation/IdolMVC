<?php
  /*
  * App Core Class
  * Creates URL & Loads Core Controller
  * URL Format - /controller/method/params
  */
  class Core {
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];
    
    public function __construct() {
      // print_r($this->getUrl());
      
      $url = $this->getUrl();
      
      // Look in contreollers for first value
      if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
        // If it exists, set it as the current controller
        $this->currentController = ucwords($url[0]);
        // Unset the 0 index
        unset($url[0]);
      }
      
      // Require the controller
      require_once '../app/controllers/'. $this->currentController . '.php';
    }
    
    public function getUrl() {
      if(isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
      }
    }
  }
  
  