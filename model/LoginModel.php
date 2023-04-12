<?php

include_once "Db.php";

class LoginModel extends Db
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($username, $password)
    {
        $sql="SELECT * FROM Utilisateur WHERE pseudo = :username AND mdp = :password";
        $sth= $this -> connection->prepare($sql);
        $sth->bindParam(":username", $username);
        $sth->bindParam(":password", $password);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }




    public function getBcryptPassword($username)
    {
        $this->connect();
        $sth = $this->connection->prepare("SELECT mdp FROM Utilisateur WHERE pseudo = :username");
        $sth->bindParam(":username", $username);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}