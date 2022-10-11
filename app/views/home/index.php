<?php
session_start();
require_once __DIR__ . '/../../../index.php';
if (!isset($_SESSION['username'])) {
    header("location: ../login/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" ./assets//themify-icons/themify-icons.css" class="">
    <link rel="stylesheet" href="assets/css/style.css">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">-->
    <title>thegioididong</title>
</head>
<body>
<header>
    <div class="container">
        <img src="assets/img/1200-44-1200x44-9.png" alt="header">

    </div>
    <!-- logo-section -->
    <nav>
        <div class="container">
            <ul>
                <li><a><img src="assets/tgdđ.png" alt="" width="228" height="40"></a></li>

                <li id="address-form"><a href="#">Đà Nẵng
                        <i type="button" class="ti-angle-down"></i></a></li>
                <li>
                    <form id="search" action="" method="get">
                        <input type="text" name="name" placeholder="Bạn tìm gì...">
                        <input type="submit" value="Tìm kiếm">
                        <?php if (isset($_GET['name'])) {
                            $keyword = $_GET['name'];
                            echo $keyword;
                            header("Location: ../products/search.php?name=$keyword");
                        } ?>

                    </form>

                </li>
                <div class="History">
                    <li><a href="#">Lịch sử đơn hàng</a></li>
                </div>
                <li class="cart"><a href="#">
                        <i class="ti-shopping-cart"></i>
                        Giỏ hàng
                    </a>
                </li>
                <div class="congnghe">
                    <li><a href="#">24h công nghệ</a></li>
                </div>
                <div class="hoidap">
                    <li><a href="#">Hỏi Đáp</a></li>
                </div>

                <div class="game-app">
                    <li><a href="#">Game App</a></li>
                </div>
                <form class="register-login-btn" action="" method="post">
                    <button type="submit" name="logout">Logout</button>
                </form>
                <div class="register-login-btn">
                    <!--                    <button type="submit" name="logout">Logout</button>-->
                </div>
                <div class="address-form">
                    <div class="address-form-content">
                        <h2>Chọn địa chỉ nhận hàng <span id="address-close">X Đóng</span></h2>
                        <form action="">
                            <p></p>
                            <select name="" id="">
                                <option value="#">Chọn địa điểm</option>
                                <option value="#">Đà Nẵng</option>
                            </select>
                            <select name="" id="">
                                <option value="#">Chọn quận/huyện</option>
                                <option value="#">Đà Nẵng</option>
                            </select>
                            <select name="" id="">
                                <option value="#">Chọn phường/xã</option>
                                <option value="#">Đà Nẵng</option>
                            </select>
                            <input type="text" placeholder="Số nhà , tên đường">
                            <button>Xác nhận</button>


                        </form>

                    </div>
                </div>


            </ul>
        </div>
    </nav>
    <!-- menu bar section  -->
    <section class="menu-bar">
        <div class="container">
            <div class="menu-bar-content">
                <ul>
                    <li><a href="#">
                            <i class="ti-mobile"></i>
                            <span>Điện thoại</span>
                        </a></li>
                    <li><a href="#"><i class="ti-desktop"></i><span>Laptop</span></a></li>
                    <li><a href="#"><i class="ti-tablet"></i><span>Tablet</span></a></li>
                    <li><a href="#"><i class="ti-headphone"></i><span>Phụ kiện</span><i style="margin-left: 3px"
                                                                                        class="ti-angle-down"></i></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Phụ kiện di động</a></li>
                                <li><a href="#">Ốp lưng điện thoại</a></li>
                                <li><a href="#">Miếng dán màn hình</a></li>
                                <li><a href="#">Giá đỡ điện thoại</a></li>
                                <li><a href="#">Túi chống nước</a></li>
                                <li><a href="#">AirTag</a></li>
                                <li><a href="#">Phụ kiện Tablet</a></li>

                            </ul>

                        </div>
                    </li>
                    <li><a href="#"><i class="ti-alarm-clock"></i><span>Smartwatch</span></a></li>

                    <li><a href="#"><i class="ti-alarm-clock"></i><span>Đồng hồ</span></a></li>

                    <li><a href="#"><i class="ti-printer"></i><span>PC, Máy in</span><i style="margin-left: 3px"
                                                                                        class="ti-angle-down"></i></a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Phụ kiện di động</a></li>
                                <li><a href="#">Ốp lưng điện thoại</a></li>
                                <li><a href="#">Miếng dán màn hình</a></li>
                                <li><a href="#">Giá đỡ điện thoại</a></li>
                                <li><a href="#">Túi chống nước</a></li>
                                <li><a href="#">AirTag</a></li>
                                <li><a href="#">Phụ kiện Tablet</a></li>

                            </ul>

                        </div>
                    </li>

                    <li><a href="#">Máy cũ giá rẻ</a></li>

                    <li><a href="#">Sim,Thẻ cào</a></li>

                    <li><a href="#">Dịch vụ tiện ích<i style="margin-left: 3px" class="ti-angle-down"></i> </a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#">Phụ kiện di động</a></li>
                                <li><a href="#">Ốp lưng điện thoại</a></li>
                                <li><a href="#">Miếng dán màn hình</a></li>
                                <li><a href="#">Giá đỡ điện thoại</a></li>
                                <li><a href="#">Túi chống nước</a></li>
                                <li><a href="#">AirTag</a></li>
                                <li><a href="#">Phụ kiện Tablet</a></li>

                            </ul>

                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </section>
</header>
<main class="">
    <!-- banner section  -->
    <section class="banner-section">
        <img src="assets/img/Banner-Big-Hero-1920x450-5.png">
    </section>
    <!-- sl -->
    <section class="slider">
        <div class="container">
            <div class="slider-content">
                <div class="slider-content-left">
                    <div class="slider-content-left-top-container">
                        <div class="slider-content-left-top">
                            <a href="#"><img src="assets/img/slider1 /img1.png" alt=""></a>
                            <a href="#"><img src="assets/img/slider1 /img2.png" alt=""></a>
                            <a href="#"><img src="assets/img/slider1 /img3.png" alt=""></a>
                            <a href="#"><img src="assets/img/slider1 /img4.png" alt=""></a>
                            <a href="#"><img src="assets/img/slider1 /img5.png" alt=""></a>
                        </div>
                        <div class="slider-content-left-top-btn">
                            <i class="ti-angle-left"></i>
                            <i class="ti-angle-right"></i>
                        </div>
                    </div>

                    <div class="slider-content-left-bottom">
                        <li class="active">Tiêu đề 1</li>
                        <li>Tiêu đề 2</li>
                        <li>Tiêu đề 3</li>
                        <li>Tiêu đề 4</li>
                        <li>Tiêu đề 5</li>
                    </div>
                </div>
                <div class="slider-content-right">
                    <li><a href="#"><img src="assets/img/slider/img2.jpeg"></a></li>
                    <li><a href="#"><img src="assets/img/slider/img4.jpeg"></a></li>
                    <li><a href="#"><img src="assets/img/slider/img2.jpeg"></a></li>
                    <li><a href="#"><img src="assets/img/slider/img4.jpeg"></a></li>


                </div>

            </div>
        </div>

    </section>
    <!-- option-choice -->
    <section class="option-choices">
        <div class="container">
            <ul class="option-choice">
                <li><a href="#">
                        <img src="assets/part2/chỉ giảm online.png" alt="">
                        <p>Chỉ giảm online</p>
                    </a></li>
                <li><a href="#">
                        <img src="assets/part2/xả hàng giamr sốc.png" alt="">
                        <p>Xả hàng giảm sốc</p>
                    </a></li>
                <li><a href="#">
                        <img src="assets/part2/điện thoại độc quyền.png" alt="">
                        <p>Điện thoại độc quyền</p>
                    </a></li>
                <li><a href="#">
                        <img src="assets/part2/đồng giá 99k.png" alt="">
                        <p>Đồng giá 99k</p>
                    </a></li>

            </ul>
        </div>
    </section>

    <!-- slider product  -->
    <section class="slider-product-one">
        <div class="container">
            <div class="slider-product-one-content">
                <div class="slider-product-one-content-title">
                    <h2>TUẦN LỄ VÀNG SAMSUNG</h2>
                </div>
                <div class="slider-product-one-content-container">
                    <div class="slider-product-one-content-items-content">
                        <div class="slider-product-one-content-items">
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider1.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <a href="../samsunggalaxy/index.html" target="_blank">
                                        <ul>
                                            <li>
                                                <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                                <p>Ưu đãi sinh nhật </p>
                                            </li>
                                            <li>Samsung Galaxy A33 5G</li>
                                            <li>6.890.000<sup>đ</sup></li>
                                            <li>
                                                3.4
                                                <i class="ti-star"></i>
                                                (41)
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider1.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung Galaxy A53 5G</li>
                                        <li>9.790.000<sup>đ</sup></li>
                                        <li>
                                            3.3
                                            <i class="ti-star"></i>
                                            (155)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider2.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>

                                        <li>Tai nghe Bluetooth True Wireless</li>
                                        <li>1.990.000</sup>đ</sup></li>
                                        <li>
                                            4
                                            <i class="ti-star"></i>
                                            (13)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/samsung-galaxy-m53.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung Galaxy M53</li>
                                        <li>10.990.000<sup>đ</sup></li>
                                        <li>
                                            4.1
                                            <i class="ti-star"></i>
                                            (16)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider4.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung Galaxy Watch 4 LTE 40mm</li>
                                        <li>4.890.000<sup>đ</sup></li>
                                        <li>
                                            1.8
                                            <i class="ti-star"></i>
                                            (4)
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="slider-product-one-content-items">
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider5.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung Galaxy S22 Ultra 5G</li>
                                        <li>27.990.000<sup>đ</sup></li>
                                        <li>
                                            3.6
                                            <i class="ti-star"></i>
                                            (102)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider6.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung Galaxy M33 5G</li>
                                        <li>7.390.000<sup>đ</sup></li>
                                        <li>
                                            3.4
                                            <i class="ti-star"></i>
                                            (31)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider6.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>

                                        <li>Samsung Galaxy A13 4GB</li>
                                        <li>4.590.000</sup>đ</sup></li>
                                        <li>
                                            3.6
                                            <i class="ti-star"></i>
                                            (64)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider7.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Tai nghe bluetooth</li>
                                        <li>995.000<sup>đ</sup></li>
                                        <li>
                                            4.0
                                            <i class="ti-star"></i>
                                            (25)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider8.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung galaxy watch 4</li>
                                        <li>4.350.000<sup>đ</sup></li>
                                        <li>
                                            1.8
                                            <i class="ti-star"></i>
                                            (4)
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <div class="slider-product-one-content-items">
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider1.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung Galaxy A33 5G</li>
                                        <li>6.890.000<sup>đ</sup></li>
                                        <li>
                                            3.4
                                            <i class="ti-star"></i>
                                            (41)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider1.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung Galaxy A53 5G</li>
                                        <li>9.790.000<sup>đ</sup></li>
                                        <li>
                                            3.3
                                            <i class="ti-star"></i>
                                            (155)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider2.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>

                                        <li>Tai nghe Bluetooth True Wireless</li>
                                        <li>1.990.000</sup>đ</sup></li>
                                        <li>
                                            4
                                            <i class="ti-star"></i>
                                            (13)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/samsung-galaxy-m53.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung Galaxy M53</li>
                                        <li>10.990.000<sup>đ</sup></li>
                                        <li>
                                            4.1
                                            <i class="ti-star"></i>
                                            (16)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slider-product-one-content-item">
                                <img src="assets/img/slider-product/slider4.jpeg">
                                <div class="slider-product-one-content-item-text">
                                    <ul>
                                        <li>
                                            <img src="assets/img/slider-product/logo ưu đãi sinh nhật.png">
                                            <p>Ưu đãi sinh nhật </p>
                                        </li>
                                        <li>Samsung Galaxy Watch 4 LTE 40mm</li>
                                        <li>4.890.000<sup>đ</sup></li>
                                        <li>
                                            1.8
                                            <i class="ti-star"></i>
                                            (4)
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="slider-right-left-btn">
                        <i class="ti-angle-left ti-angle-left-two"></i>
                        <i class="ti-angle-right ti-angle-right-two"></i>
                    </div>


                </div>
                <div class="all-product">
                    <a href="#">
                        <p>Xem tất cả sản phẩm
                        </p>
                    </a>
                </div>

            </div>

        </div>
    </section>
    <!-- shopping-trend -->

    <section class="shopping-trend">
        <div class="container">
            <div class="shopping-trend-content">
                <strong class="shopping-trend-content-heading">Xu hướng mua sắm</strong>
                <ul>
                    <li>
                        <a href="#">
                            <img src="assets/img/xu hướng mua sắm/img1.png">
                            <span>Điện thoại</span>
                            <p>Galaxy M Series</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/xu hướng mua sắm/img2.png">
                            <span>MacBook, iMac</span>
                            <p>Mua Online có quà</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/xu hướng mua sắm/img3.png">
                            <span>Tai nghe không dây</span>
                            <p>Giảm đến 50%</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="assets/img/xu hướng mua sắm/img4.png">
                            <span>Smartwatch</span>
                            <p>Giảm đến 50%++</p>

                        </a>
                    </li>

                </ul>

            </div>
        </div>

    </section>
    <!-- danh mục nổi bật -->
    <section class="mark-features">
        <div class="mark-feature">
            <!--        <h2>Danh mục nổi bật</h2>-->
            <div class="container">
                <h2>Danh mục nổi bật</h2>
                <div class="feature-content">
                    <div class="feature-content-top">
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Dienthoai-128x129.png" alt="">
                            <p>Điện thoại</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Laptop-129x129.png" alt="">
                            <p>Laptop</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Tablet-128x129.png" alt="">
                            <p>Tablet</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Donghothongminh-128x129.png" alt="">
                            <p>Đồng hồ thông </p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Donghothoitrang-128x129 (1).png" alt="">
                            <p>Đồng hồ thời </p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Thietbimang-128x129.png" alt="">
                            <p>Thiết bị mạng</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Oplung-128x128.png" alt="">
                            <p>Ốp </p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /chuot-128x129.png" alt="">
                            <p>Chuột máy tính </p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /ban-phim-128x129.png" alt="">
                            <p>Bàn phím</p>
                        </a>

                    </div>
                    <div class="feature-content-bottom">
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Loa-128x128.png" alt="">
                            <p>Loa</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Tainghe-128x129.png" alt="">
                            <p>Tai nghe</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Sacduphong-128x129.png" alt="">
                            <p>Sạc dự phòng</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Capsac-129x129.png" alt="">
                            <p>Cáp sạc</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Maytinhbo-128x129.png" alt="">
                            <p>Máy tính bộ</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Mayin-128x129.png" alt="">
                            <p>Máy </p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Manhinhmaytinh-128x129.png" alt="">
                            <p>Màn hình máy tính</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Phukiengaming-128x129.png" alt="">
                            <p>Phụ kiện gamin</p>
                        </a>
                        <a href="#">
                            <img src="assets/danh mục nôit bật /Capsac-129x129.png" alt="">
                            <p>Cáp sạc</p>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--        phân trang-->
    <?php
    include "../products/detail_product.php";
    ?>


</main>
<!-- footer section -->
<footer class="footer-section">

    <div class="container">
        <div class="row footer-top">
            <div class="footer-top-content col c-4">
                <ul>
                    <li>
                        <a href="#">Tích điểm Quà tặng VIP</a>
                    </li>
                    <li>
                        <a href="#">Lịch sử mua hàng
                        </a>
                    </li>
                    <li>
                        <a href="#">Cộng tác bán hàng cùng TGDĐ</a>
                    </li>

                    <li>
                        <a href="#">Tìm hiểu về mua trả góp</a>
                    </li>

                    <li>
                        <a href="#">Chính sách bảo hành</a>
                    </li>
                </ul>

            </div>
            <div class="footer-top-content col c-4">
                <ul>
                    <li>
                        <a href="#">Giới thiệu công ty (MWG.vn)</a>
                    </li>
                    <li>
                        <a href="#">Tuyển dụng</a>
                    </li>
                    <li>
                        <a href="#">Gửi góp ý, khiếu nại</a>
                    </li>

                    <li>
                        <a href="#">Tìm siêu thị (3.216 shop)</a>
                    </li>

                    <li>
                        <a href="#">Xem bản mobile</a>
                    </li>
                </ul>

            </div>
            <div class="footer-top-content col c-4">
                <ul>
                    <li>
                        <a href="#">Tổng đài hỗ trợ (Miễn phí gọi)</a>
                    </li>
                    <li>

                        <p>Gọi mua:</p>
                        <a href="#"> 1800.1060 </a>
                        <p>(7:30 - 22:00)</p>

                    </li>
                    <li>
                        <p>Bảo hành:</p>
                        <a href="#"> 1800.1060 </a>
                        <p>(7:30 - 22:00)</p>
                    </li>
                    <li>
                        <p>Kỹ thuật:</p>
                        <a href="#"> 1800.1060 </a>
                        <p>(7:30 - 22:00)</p>
                    </li>
                    <li>
                        <p>Khiếu nại:</p>
                        <a href="#"> 1800.1060 </a>
                        <p>(7:30 - 22:00)</p>
                    </li>


                </ul>

            </div>

            <div class="footer-top-content col c-4">
                <p>Website cùng tập đoàn</p>
                <div class="losgo-footer ">
                    <img src="assets/img/footer/handle_cert.png" width="50px" height="30px">
                </div>
                <div class="logo-footer">
                    <img src="assets/img/footer/dienmayxanh.jpeg" width="70px" height="30px">
                </div>
                <div class="logo-footer">
                    <img src="assets/img/footer/báchhoaxanh.png" width="70px" height="30px">

                </div>
            </div>
            <div class="clear"></div>
        </div>


        <div class="footer-bottom">
            <p>© 2018. Công ty cổ phần Thế Giới Di Động. GPDKKD: 0303217354 do sở KH & ĐT TP.HCM cấp ngày 02/01/2007.
                GPMXH: 238/GP-BTTTT do Bộ Thông Tin và Truyền Thông cấp ngày 04/06/2020.
                Địa chỉ: 128 Trần Quang Khải, P. Tân Định, Q.1, TP.Hồ Chí Minh. Điện thoại: 028 38125960. Email:
                cskh@thegioididong.com. Chịu trách nhiệm nội dung: Huỳnh Văn Tốt. Xem chính sách sử dụng

            </p>
        </div>
    </div>

</footer>
</body>
<!--<script src="script.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
<script src="script.js"></script>


</html>