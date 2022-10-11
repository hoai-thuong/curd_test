<?php

namespace App\Models;

class Validate
{
    public function confirmPassword ($password, $repassword)
    {
        return ($password == $repassword);
    }
}