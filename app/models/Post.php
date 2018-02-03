<?php
  // Here as an example of how to create models in the framework.
  class Post {
    private $db;
    
    public function __construct() {
      $this->db = new Database;
    }
  }