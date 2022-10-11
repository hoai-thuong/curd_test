<?php
require_once __DIR__ . '/../../../index.php';
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Đăng kí</title>
</head>
<body>
<div class="container">
    <div>
        <h1>Đăng kí</h1>
    </div>
    <form method="post" action>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="name" class="form-control" required
                   value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
            <p class="text-danger">
                <?php echo $error_userExist; ?>
            </p>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmed password</label>
            <input type="password" name="repassword" class="form-control" required>
            <p class="text-danger">
                <?php echo $error_password; ?>
            </p>
        </div>
        <button type="submit" class="btn btn-primary" name="register">Register</button>
        <br></br>
        <p>You have already an account <a href="../login/index.php" class="link-primary">Log in here</a></p>
    </form>

</div>

<script>

</script>
</body>
</html>