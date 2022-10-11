<?php
require_once __DIR__ . '/config/DB.php';

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
$product_data = $productController->getLimited();
$show_data = $productController->show();



