<?php

namespace App\Models;

class Register extends BaseModel
{
    public function registers ($name, $password)
    {
        $registerSpl = "INSERT INTO users (name, password) values (:name, :password)";
        //name va password dau tien la cot cua database, con name va password thu 2 laf cua datacreate da gan
        $dataCreate =
            ['name' => $name,
                'password' => md5($password),
            ];
        $result = $this->DB->execute($registerSpl, $dataCreate);
        return $result;
    }
}