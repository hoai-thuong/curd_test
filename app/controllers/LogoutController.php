<?php
namespace App\Controllers;

class LogoutController extends BaseController {
    public function index(){
        session_destroy();
    }
}