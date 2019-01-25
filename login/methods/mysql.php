<?php

class mysql{

    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;


    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    public function getConnection(){
        return $this->connection;
    }

    public function stopMYSQL(){
        if ($this->getConnection() != null) mysqli_close($this->getConnection());
    }
}