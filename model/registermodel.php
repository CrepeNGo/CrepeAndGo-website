<?php

include_once 'Db.php';

class RegisteModel extends Db{

    public function __construct(){
        parent::__construct();
    }

    public function register($mail,$username,$password){
        $sql="INSERT INTO Utilisateur(mail, mdp, pseudo) value (:mail,:mdp, :username);";
        $query = $this->connection->prepare($sql);
        $query->bindParam(":username",$username);
        $query->bindParam(":mail",$mail);
        $query->bindParam(":mdp",$password);
        $query->execute();
    }




}


?>