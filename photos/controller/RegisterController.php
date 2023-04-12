<?php


class RegisterController{


    private $registermodel;

    public function __construct(){
        $this->registermodel = new RegisteModel();
    }


    public function register(){
        $username = filter_input(INPUT_POST, 'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $mdp = filter_input(INPUT_POST, 'mdp',FILTER_SANITIZE_SPECIAL_CHARS);
        $mail = filter_input(INPUT_POST, 'mail',FILTER_SANITIZE_SPECIAL_CHARS);
        $this->registermodel->register($mail,$username,$mdp);
        header("Location: /login");
    }
}


?>