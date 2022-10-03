<?php
namespace App\Controllers;
use App\Models\Auth;
class LoginController extends BaseController
{
    protected $auth;
    public function __construct ()
    {
        $this->auth = new Auth();
    }
    public function index ()
    {
        $this->loadView('login/index.php');
    }
    public function login()
    {
        if (isset($_POST['login'])) {
            $name = $_POST['name'];
            $password = md5($_POST['password']);
//            $users = $this->auth->getUser($name, $password);
            if ($this->auth->login($name, $password)) {
                header('Location: ../home/index.php' );
            } else {
                $_SESSION['error'] =  "Username or Password was wrong";
            }
        }
    }
}