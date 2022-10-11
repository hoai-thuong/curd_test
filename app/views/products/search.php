<?php
require_once __DIR__ . '/../../../index.php';
$search_data = $productController->search();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    /*background-color: black;*/
    h1 {
        color: black;
    }

    .search_content {
        display: flex;
    }

    .search {
        background-color: burlywood;
        padding: 20px;
    }

    .search strong:first-child {
        font-size: 40px;
    }

    .search_content_item {
        padding: 10px;
        width: 25%;

    }

    .search_content_item img {
        max-width: 100%;
    }


</style>
<body>
<h1>Danh sách tìm kiếm </h1>
<?php //foreach ($search_data as $row) { ?>
<section class="search">
    <!--        --><?php //foreach ($search_data as $row) { ?>

    <div class="search_content">
        <?php foreach ($search_data as $row) { ?>

            <div class="search_content_item">
                <!--                <img src="../public/assets/phân%20trang/1.jpeg">-->
                <!--                --><?php //foreach ($search_data as $row) { ?>

                <img src="<?= $row['img'] ?>">
                <strong><?= $row['name'] ?></strong>
                <p>    <?= $row['price'] ?></p>

            </div>
        <?php } ?>
    </div>


</section>


</body>
</html>
