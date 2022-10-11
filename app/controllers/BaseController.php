<?php

namespace App\Controllers;
class BaseController
{
    public function __construct ()
    {
    }

    public function loadView ($viewFile, $data = [])
    {

        if (!file_exists('./app/views/' . $viewFile)) {
            return false;
        }
        extract($data);
        header('location:' . './app/views/' . $viewFile);
//        require('./app/views/' . $viewFile);
    }
}

?>