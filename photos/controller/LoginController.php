<?php

class LoginController
{
    private $loginmodel;

    public function __construct()
    {
        $this-> loginmodel= new LoginModel;
    }

    public function login(){
        
        $username = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $mdp = filter_input(INPUT_POST, 'mdp',FILTER_SANITIZE_SPECIAL_CHARS);
        $this -> loginmodel -> login($username,$mdp);
        $form= $this -> loginmodel -> login($username,$mdp);
        header('Location : /home');
        return ["pseudo" => $form["pseudo"],
                "mdp" => $form["mdp"]];
        

        

    }

    public function checkPassword()
    {
        $model = new LoginModel();
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);

        $password = $model->getBcryptPassword($this->username);
        if (password_verify($this->password, $password)) {
            return true;
        } else {
            return false;
        }
    }




}