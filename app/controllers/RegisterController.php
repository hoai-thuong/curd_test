<?php

namespace App\Controllers;

use App\Models\Auth;
use App\Models\Product;
use App\Models\Validate;
use App\Models\Register;

class RegisterController extends BaseController
{
    protected $validation;
    protected $auth;
    protected $register;

    public function __construct ()
    {
        $this->validation = new Validate();
        $this->auth = new Auth();
        $this->register = new Register();
    }

    public function index ()
    {
        $this->loadView('register/index.php');
    }

    public function register ()
    {
        if (isset($_POST['register'])) {
            $name = $_POST['name'];
            $password = md5($_POST['password']);
            $repassword = md5($_POST['repassword']);
            if ($this->validation->confirmPassword($password, $repassword)) {
                if ($this->auth->register($name)) {
                    $this->register->registers($name, $password);
                    header('location: ../login/index.php ');
                } else {
                    echo "the username have already exist";
                }
            } else {
                echo "Password and repassword doesn't match";
            }
        }

    }
}