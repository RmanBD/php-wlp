<?php


namespace App\classes;


class Auth
{
    protected $email, $password, $authEmail, $authPass;

    public function __construct($post)
    {
        if ($post){
            $this->email = $post['email'];
            $this->passwors = $post['password'];
        }

    }
    public function info(){
        $this->authEmail = 'ai@gmail.com';
        $this->authPass = '123123';

        if ($this->authPass==$this->password && $this->authEmail==$this->email){
            session_start();
            $_SESSION['id'] = rand(10, 1000);
            header('Location: action.php?pages=login');
        }
        else{
            return 'Chora account kor agea';
        }
    }

    public function logout(){
        header('Location: action.php?pages=login');
    }
}