<?php
  class Pages extends Controller {
    public function __construct() {
      // Load Post Model -- Example
      $this->postModel = $this->model('Post');
    }
    
    public function index() {
      $data =  ['title' => 'welcome'];
      $this->view('pages/index', $data);
    }
    
  }