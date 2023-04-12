<?php

class Db
{
    protected $connection;

    public function __construct()
    {
        $host = "172.16.119.4";
        $user = "quentin";
        $password = "quentin";
        $database = "CrepeAndGo";
        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }



}