<?php
require_once '/Applications/XAMPP/xamppfiles/htdocs/CURD_TEST/vendor/autoload.php';
require_once '/Applications/XAMPP/xamppfiles/htdocs/CURD_TEST/config/DB.php';
use App\Controllers\LoginController;
use App\Controllers\LogoutController;
use App\Controllers\ProductController;
use App\Controllers\RegisterController;
$registerController = new RegisterController();
$logoutController = new LogoutController();
$loginController = new LoginController();
$productController = new ProductController();
$loginController->login();
$registerController->register();
$productController->getLimited();

