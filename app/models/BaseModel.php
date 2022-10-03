<?php
namespace App\Models;
use Config\DB;
abstract class BaseModel
{
    protected $DB;
    public function __construct ()
    {
        $this->DB = new DB();
    }
}