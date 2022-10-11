<?php

namespace App\Models;

use Dotenv\Dotenv;

abstract class BaseModel
{
    protected $DB;

    public function __construct ()
    {
//        $this->DB = new DB();
        $this->DB = new \DB();
    }
}