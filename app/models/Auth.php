<?php

namespace App\Models;
class Auth extends BaseModel
{
//    protected $table = 'auth';
    public function getUser ($name, $password = [])
    {
        $userSpl = "SELECT name FROM users WHERE name= :name AND password = :password";
        $dataCheck =
            ['name' => $name,
                'password' => md5($password),
            ];
        $userData = $this->DB->execute($userSpl, $dataCheck);
        return $userData;
    }

    public function login ($name, $password)
    {
        return (count($this->getUser($name, $password)) > 0 && $_SESSION['username'] = $name);

    }

    public function register ($name)  //names vaf passwords la cai nhap vao
    {
        $userspl = "SELECT name FROM users WHERE name = :name";
        $dataCreate = ['name' => $name];   //create
        $userData = $this->DB->execute($userspl, $dataCreate); //hoá ra cái biến bên này có liên quan tới biến bên khác
        return (empty($userData));
    }

}
//
//$auth = new Auth();
//var_dump($auth->register("vo1111"));