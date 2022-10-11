<?php
require_once __DIR__ . '/../../../index.php';
?>
<section class="row pagination">
    <div class="pagination-content">
        <div>
            <strong>Sản phẩm laptop</strong>
            <!--            <img src="../home/assets/phân trang/1.jpeg">-->
        </div>
        <?php foreach ($product_data as $row) { ?>
            <!-- chay heets tat ca gia tri-->
            <div class="pagination-item col c-4">
                <div class="pagination-image">
                    <!--                        //SHOW-->
                    <a href="../products/show.php?id=<?= $row['id'] ?>" target="_blank"><img src="<?= $row['img'] ?>"
                                                                                             alt=""></a>
                </div>
                <strong><?= $row['name'] ?></strong>
                <p><?= $row['price'] ?></p>
            </div>
        <?php } ?>


    </div>
    <div class="clear"></div>
    <!--        //pagination-->
    <div class="pagination-btn">
        <ul>
            <li class="page-item">
                <a class="page-link" href="../home/index.php?startRow=0">1</a>
                <a class="page-link" href="../home/index.php?startRow=4">2</a>
                <a class="page-link" href="../home/index.php?startRow=8">3</a>
            </li>

        </ul>
    </div>
</section>

