<?php

class Database {

    private $connection; //created an instance of variables 
    private $host;  //these will be called around the database as an object
    private $username; //and can store information and be called multiple times
    private $password;
    private $database;

    public function __construct($host, $username, $password, $database) { //created a public function which allows 
        
        $this->host = $host;                                               // the user to access the information 
        $this->host = $username;
        $this->host = $password;
        $this->host = $database;
    }

    public function openConnection() {
        $this->connection = new mysqli($this->$host, $this->username, $this->password, $this->databaase);
        
        if ($this->$connection->connect_error) {
            die("Error: " . $this->connection->connection_error);
        }
    }

//__construct() is the name for the constructor. 
    //The constructor becomes a object after it has been created
    //it then can be used to store code

    public function closeConnection() {
        if(isset ($this->connection)){
            $this->connection->close();   
         }
    }

    public function query($string) {
        $this->openConnection();
        
        $query = $this->connection->query($string);

        $this->closeConnection();
        
        return $query;
    }

}
