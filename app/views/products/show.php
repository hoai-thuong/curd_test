<?php
require_once __DIR__ . '/../../../index.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Thông tin sản phẩm</h1>
<?php if ($show_data) { ?>

    <h3>Tên sản phẩm: <?php echo $show_data['name'] ?></h3>
    <h3>Giá: <?php echo $show_data['price'] ?></h3>
<?php } else { ?>
    <h1>User not found</h1>
<?php } ?>


</body>
</html>
