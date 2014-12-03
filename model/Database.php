<?php

class Database {

    private $connection; //created an instance of variables 
    private $host;  //these will be called around the database as an object
    private $username; //and can store information and be called multiple times
    private $password;
    private $database;
    public $error;

    public function __construct($host, $username, $password, $database) { //created a public function which allows 
        $this->host = $host;                                               // the user to access the information 
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->connection = new mysqli($host, $username, $password);

        if ($this->connection->connect_error) {
            die("Error: " . $this->connection->connection_error);
        }
//this selects the database file

        $exists = $this->connection->select_db($database);
// checks if its able to connect to database
//if statement is checking if the database exists

        if (!$exists) {
            $query = $this->connection->query("CREATE DATABASE $database");

//^^creating a database with a query

            if ($query) {
                echo "successfully created database" . $database;
            }
        } else {
            echo "Database already exsist.";
        }
    }

    public function openConnection() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die("Error: " . $this->connection->connection_error);
        }
    }

//__construct() is the name for the constructor. 
    //The constructor becomes a object after it has been created
    //it then can be used to store code

    public function closeConnection() {
        if (isset($this->connection)) {
            $this->connection->close();
        }
    }

    public function query($string) {
        $this->openConnection();

        $query = $this->connection->query($string);

        if (!$query) {
            $this->error = $this->connection->error;
        }

        $this->closeConnection();

        return $query;
    }

}
