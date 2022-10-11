<?php
session_start();
require_once __DIR__ . '/../../../index.php';


if (isset($_SESSION['username'])) {
    header("Location: ../home/index.php");
} else {
    $loginController->login();
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

    <title>Document</title>
</head>
<body>
<h1>EXISTING LOGIN FORM</h1>

<div class="w3layoutscontaineragileits">
    <!--    thông báo sang trang khacs dùng sesion-->
    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>
                <?php echo($_SESSION['error']);
                unset ($_SESSION['error']) ?>
            </p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <h2>Login here</h2>
    <form action="" method="post">
        <input type="text" Name="name" placeholder="USERNAME"
               value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" required="">
        <input type="password" Name="password" placeholder="PASSWORD" required="">
        <ul class="agileinfotickwthree">
            <li>
                <input type="checkbox" id="brand1" value="">
                <label for="brand1"><span></span>Remember me</label>
                <a href="#">Forgot password?</a>
            </li>
        </ul>
        <div class="aitssendbuttonw3ls">

            <input type="submit" name="login" value="LOGIN">
            <p> To register new account <span>→</span> <a class="w3_play_icon1" href="../register/index.php"> Click
                    Here</a>
            </p>
            <div class="clear"></div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>