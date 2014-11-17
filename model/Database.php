<?php
class Database{
    private $connection; //created an instance of variables 
    private $host;  //these will be called around the database as an object
    private $username;//and can store information and be called multiple times
    private $password ;
    private $database;
    
    public function __construct($host, $username, $password, $database){
        $this->host = $host;
        $this->host = $username;
        $this->host = $password;
        $this->host = $database;    
    }
    public function openConnection () {
    }
    public function closeConnection () {
        
    }
    public function query ($string) {
          
      }
    
}

