<?php 
  /*
  * PDO DATABASE CLASS
  * Connect to database
  * Creating Prepared statements
  * Bind values
  * return rows and results
  */
  
  class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;
    
    // Database Handler
    private $dbh;
    private $stmt;
    private $error;
    
    public function __construct() {
      $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
      $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ); 
      
      // Create PDO Instance
      try{
        $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
      } catch(PDOException $e) {
        $this->error = $e->getMessage();
        echo $this->error;
      }
    }
  }