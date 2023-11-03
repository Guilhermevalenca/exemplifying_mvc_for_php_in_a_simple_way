<?php

namespace Database;

class Database
{
    protected $host = 'localhost';
    protected $port = '3306';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'mvc_exemplate';
    protected $conn;

    public function __construct()
    {

    }
    public function setConnection()
    {
        $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->database",$this->username, $this->password);
    }
    public function getHost()
    {
        return $this->host;
    }
    public function getPort()
    {
        return $this->port;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getDatabase()
    {
        return $this->database;
    }

}