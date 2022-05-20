<?php
require_once './database/config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    type="text/css" rel="stylesheet"
</head>

<body>
    <div class="container-fluid">
        <?php
            include './includes/navbar.php';
        ?>
        <!--slide-->
        <div style="margin-top: 154px;" class="row slide">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="./image/slideshow_2.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./image/slideshow_3.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./image/slideshow_4.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div style="margin: 20px auto; text-align: center; font-size:30px; font-weight:700; color: #555555;">
        SẢN PHẨM HOT
    </div>
    <!--slide product-->
    <div class="container slide-product">
        <div class="row">
            <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel" data-interval="1000">
                <div class="MultiCarousel-inner">
                    <div class="item">
                        <div style="padding: 0 0;" class="pad15 ">
                            <div style="margin-bottom: 10px !important; background-color:#333333!important;" class="card ">
                                <span class="ico-sale">-22%</span>
                                <img class="card-img-top link" src="./product img/nike ball.jpeg" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">NIKE FOOTBALL
                                        FLIGHT PREMIER LEAGUE - WHITE/HYPER CRIMSON/BLACK</a>
                                    <br>
                                    <span class="card-text old-price">4,495,000₫</span>
                                    <span class="card-text new-price"> 3,500,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div style="padding: 0 0;" class="pad15 ">
                            <div style="margin-bottom: 10px !important;background-color:#333333!important;" class="card">
                                <span class="ico-sale">-22%</span>
                                <img class="card-img-top link" src="./product img/ADIDAS X SPEEDFLOW.jpg" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">ADIDAS X
                                        SPEEDFLOW .1 TF METEORITE - RED/CORE BLACK/SOLAR RED/PRO ULTRA</a>
                                    <br>
                                    <span class="card-text old-price">3,600,000₫</span>
                                    <span class="card-text new-price"> 2,750,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div style="padding: 0 0;" class="pad15 ">
                            <div style="margin-bottom: 10px !important;background-color:#333333!important;" class="card">
                                <span class="ico-sale">-24%</span>
                                <img class="card-img-top link" src="./product img/ADIDAS COPA SENSE .3 FG .jpg" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">ADIDAS COPA SENSE
                                        .3 FG METEORITE - RED/FOOTWEAR WHITE/SOLAR RED</a>
                                    <br>
                                    <span class="card-text old-price">2,695,000₫</span>
                                    <span class="card-text new-price"> 1,800,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div style="padding: 0 0;" class="pad15 ">
                            <div style="margin-bottom: 10px !important;background-color:#333333!important;" class="card">
                                <span class="ico-sale">-1%</span>
                                <img class="card-img-top link" src="./product img/ADIDAS COPA SENSE .3 TF.jpg" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">ADIDAS COPA SENSE
                                        .3 TF METEORITE - RED/FOOTWEAR WHITE/SOLAR RED/PRO </a>
                                    <br>
                                    <span class="card-text old-price">1,900,000₫</span>
                                    <span class="card-text new-price"> 1,890,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div style="padding: 0 0;" class="pad15 ">
                            <div style="margin-bottom: 10px !important;background-color:#333333!important;" class="card">
                                <span class="ico-sale">-21%</span>
                                <img class="card-img-top link" src="./product img/nike_tiembi_shoe.jpg" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">NIKE TIEMPO REACT
                                        LEGEND 9 CLUB TF - WHITE/DARK SMOKE GREY/BLACK/YELLOW</a>
                                    <br>
                                    <span class="card-text old-price">2,895,000₫</span>
                                    <span class="card-text new-price"> 1,940,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div style="padding: 0 0;" class="pad15 ">
                            <div style="margin-bottom: 10px !important;background-color:#333333!important;" class="card">
                                <span class="ico-sale">-1%</span>
                                <img class="card-img-top link" src="./product img/ADIDAS X SPEE+DFLOW .png" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">ADIDAS X
                                        SPEEDFLOW .3 TF ESCAPELIGHT - CORE BLACK/SONIC INK/SOLAR YELLOW</a>
                                    <br>
                                    <span class="card-text old-price">1,900,000₫</span>
                                    <span class="card-text new-price"> 1,890,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div style="padding: 0 0; " class="pad15 ">
                            <div style="margin-bottom: 10px !important;height: 312px;background-color:#333333!important;" class="card">
                                <span class="ico-sale">-16%</span>
                                <img class="card-img-top link" src="./product img/boc ong dong ADIDAS X LESTO SHIN GUARDS - BLACK.jpg" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">BỌC ỐNG ĐỒNG
                                        ADIDAS X LESTO SHIN GUARDS - BLACK</a>
                                    <br>
                                    <span class="card-text old-price"></span>
                                    <span class="card-text new-price"> 320,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div style="padding: 0 0;" class="pad15 ">
                            <div style="margin-bottom: 10px !important;height: 312px;background-color:#333333!important;" class="card">
                                <span class="ico-sale">-29%</span>
                                <img class="card-img-top link" src="./product img/boc ong.jpeg" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">BỌC ỐNG ĐỒNG
                                        ADIDAS TIRO CLUB SHIN GUARDS - BLACK/WHITE</a>
                                    <br>
                                    <span class="card-text old-price">380,000₫</span>
                                    <span class="card-text new-price"> 270,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div style="padding: 0 0;" class="pad15 ">
                            <div style="margin-bottom: 10px !important;height: 312px;background-color:#333333!important;" class="card">
                                <span class="ico-sale">-0%</span>
                                <img class="card-img-top link" src="./product img/quanaokamitovang.jpg" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">BỘ QUẦN ÁO BÓNG
                                        ĐÁ KAMITO KMSH210250 TRẮNG VÀNG</a>
                                    <br>
                                    <span class="card-text old-price"></span>
                                    <span class="card-text new-price"> 199,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div style="padding: 0 0;" class="pad15 ">
                            <div style="margin-bottom: 10px !important;height: 312px;background-color:#333333!important;" class="card">
                                <span class="ico-sale">-0%</span>
                                <img class="card-img-top link" src="./product img/quanaokamitodo.jpg" alt="Card image cap">

                                <div style="padding: 0 1px !important;" class="card-body">
                                    <a style="color: orange;" class="card-title product-title" href="">BỘ QUẦN ÁO BÓNG
                                        ĐÁ KAMITO KMSH210510 ĐỎ Trắng Sọc</a>
                                    <br>
                                    <span class="card-text old-price"></span>
                                    <span class="card-text new-price"> 199,000₫</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button style="background-color: white; color: black" class="btn btn-primary leftLst"><i class="fa-solid fa-chevron-left"></i></button>
                <button style="background-color: white; color: black" class="btn btn-primary rightLst"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
        </div>
        <!--NEW PRODUCT-->
        <div style="margin: 20px auto; text-align: center; font-size:30px; font-weight:700; color: #555555;">
            SẢN PHẨM MỚI
        </div>
        <div style=" max-width: 1300px;" class="container find">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-2 col-lg-2">
                    <div style="margin-bottom: 10px !important;" class="card card-custom">
                        <span class="ico-sale">-21%</span>
                        <img class="card-img-top link" src="./product img/aodas1.webp" alt="Card image cap">
                        <!-- <hr class="gach-ngang"> -->
                        <div style="padding: 4px 1px !important;" class="card-body">
                            <a class="card-title product-title" href="./chitiet.html">ÁO TANK TOP TẬP THỂ THAO</a>
                            <div class="price">
                                <p class="card-text old-price">1,200,000₫</p>
                                <p class="card-text new-price"> 1,000,000₫</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-4 col-md-2 col-lg-2">
                    <div style="margin-bottom: 10px !important;" class="card card-custom">
                        <span class="ico-sale">-21%</span>
                        <img class="card-img-top link" src="./product img/giaydas1.webp" alt="Card image cap">
                        <!-- <hr class="gach-ngang"> -->
                        <div style="padding: 4px 1px !important;" class="card-body">
                            <a class="card-title product-title" href="./chitiet.html">GIÀY TRAINER DROPSET</a>
                            <div class="price">
                                <p class="card-text old-price">3,500,000₫</p>
                                <p class="card-text new-price"> 3,000,000₫</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-4 col-md-2 col-lg-2">
                    <div style="margin-bottom: 10px !important;" class="card card-custom">
                        <span class="ico-sale">-21%</span>
                        <img class="card-img-top link" src="./product img/aodas2.webp" alt="Card image cap">
                        <!-- <hr class="gach-ngang"> -->
                        <div style="padding: 4px 1px !important;" class="card-body">
                            <a class="card-title product-title" href="./chitiet.html">ÁO KHOÁC GIÓ ADIDAS</a>
                            <div class="price">
                                <p class="card-text old-price">1,500,000₫</p>
                                <p class="card-text new-price"> 1,200,000₫</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-4 col-md-2 col-lg-2">
                    <div style="margin-bottom: 10px !important;" class="card card-custom">
                        <img class="card-img-top link" src="./product img/quan1.webp" alt="Card image cap">
                        <!-- <hr class="gach-ngang"> -->
                        <div style="padding: 4px 1px !important;" class="card-body">
                            <a class="card-title product-title" href="./chitiet.html">QUẦN TẬP JOGA XANH RÊU</a>
                            <div class="price">
                                <p class="card-text old-price"></p>
                                <p class="card-text new-price"> 1,800,000₫</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-4 col-md-2 col-lg-2">
                    <div style="margin-bottom: 10px !important;" class="card card-custom">
                        <span class="ico-sale">-21%</span>
                        <img class="card-img-top link" src="./product img/giaydas2.webp" alt="Card image cap">
                        <!-- <hr class="gach-ngang"> -->
                        <div style="padding: 4px 1px !important;" class="card-body">
                            <a class="card-title product-title" href="./chitiet.html">GIÀY ALPHATORSION 2.0</a>
                            <div class="price">
                                <p class="card-text old-price">2,850,000₫</p>
                                <p class="card-text new-price"> 1,425,000₫</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 col-sm-4 col-md-2 col-lg-2">
                    <div style="margin-bottom: 10px !important;" class="card card-custom">
                        <span class="ico-sale">-21%</span>
                        <img class="card-img-top link" src="./product img/quan2.webp" alt="Card image cap">
                        <!-- <hr class="gach-ngang"> -->
                        <div style="padding: 4px 1px !important;" class="card-body">
                            <a class="card-title product-title" href="./chitiet.html">QUẦN SHORT 4KRFT XANH RÊU</a>
                            <div class="price">
                                <p class="card-text old-price">1,000,000₫</p>
                                <p class="card-text new-price"> 800,000₫</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--WHAT FIND?-->
        <div style="margin: 20px auto; text-align: center; font-size:30px; font-weight:700; color: #555555;">
            BẠN ĐANG TÌM?
        </div>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="border: none; background-color: #333333;">
                        <figure> <img class="card-img-top " id="zoomIn" src="./kinh of shoe/index_banner_1.jpg" alt="Card image cap"></figure>
                        <div class="card-body p-1 color-card-body">
                            <p style="font-weight: 550; color: orange;" class="card-text">THỂ THAO CHO NAM</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="border: none;background-color: #333333;">
                        <figure> <img class="card-img-top " id="zoomIn" src="./kinh of shoe/giaycotunhien.jpg" alt="Card image cap"></figure>
                        <div class="card-body p-1 color-card-body">
                            <p style="font-weight: 550; color: orange;" class="card-text">THỂ THAO CHO NỮ</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="border: none;background-color: #333333;">
                        <figure> <img class="card-img-top " id="zoomIn" src="./kinh of shoe/giayfutsal.jpg" alt="Card image cap"></figure>
                        <div class="card-body p-1 color-card-body">
                            <p style="font-weight: 550; color: orange;" class="card-text">THỂ THAO CHO TRẺ EM
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--TYPE OF PRODUCTS-->
        <div class="container type-of-product">
            <div class=" box">
                <img height="150px !important" src="./type_of_product/kid-shoes.jpg">
                <span>Giày cho trẻ em</span>
            </div>
            <div class=" box">
                <img height="150px !important" src="./type_of_product/uniform.jpg">
                <span>Quần áo thể thao</span>
            </div>
            <div class=" box">
                <img height="150px !important" src="./type_of_product/ball.jpg">
                <span>Phụ kiện thể thao</span>
            </div>

        </div>
        <!--GENERATION-->
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="gene_item">
                        <div class="gene_img">
                            <img src="./product img/gene3.png" alt="">
                        </div>
                        <div class="gene_info">
                            <h2 class="gene_title">A NEW GENERATION</h2>
                            <p class="gene_desc">Náo nhiệt và táo bạo nhưng luôn cởi mở -- đôi giày sáng tạo cho chính
                                bạn
                            </p>
                            <button class="gene_button btn btn-secondary">MUA NGAY</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="gene_item">
                        <div class="gene_img">
                            <img src="./product img/gene2.webp" alt="">
                        </div>
                        <div class="gene_info">
                            <h2 class="gene_title">WE'RE GOT YOU COVERED</h2>
                            <p class="gene_desc">Discover the adidas Face Cover with an improved confort, designed for
                                exercise</p>
                            <button class="gene_button btn btn-secondary">SHOP NOW</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--BEST OF ADIDAS-->
        <div style="margin: 20px auto; text-align: center; font-size:30px; font-weight:700; color: #555555;">
            BEST OF ADIDAS
        </div>
        <div style="margin-bottom: 2px !important;" class="container">
            <div class="row">
                <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 best">
                    <div class="best_item">
                        <img height="150px !important" src="./product img/best1.webp">
                        <a class="best_title product-title" href="./chitiet.html">Response Super 2.0 Shoes</a>
                        <p class="price_bestitem">2,300,000đ</p>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <div class="best_item">
                        <img height="150px !important" src="./product img/best2.webp">
                        <a class="best_title product-title" href="./chitiet.html">Ultraboost 22 Shoes</a>
                        <p class="price_bestitem">5,200,000đ</p>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <div class="best_item">
                        <img height="150px !important" src="./product img/best3.webp">
                        <a class="best_title product-title" href="./chitiet.html">Galaxy 5 Shoes</a>
                        <p class="price_bestitem">1,500,000đ</p>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                    <div class="best_item">
                        <img height="150px !important" src="./product img/best4.webp">
                        <a class="best_title product-title" href="./chitiet.html">Fluidflow 2.0 Shoes</a>
                        <p class="price_bestitem">2,100,000đ</p>
                    </div>
                </div>
            </div>
        </div>
        <div style=" max-width: 1300px;" class="container find">
            <!--END-Position-->
            <!-- Footer -->
            <footer style="background-color: #333333 !important ;" class=" text-center text-lg-start bg-light text-muted">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                        <span>Get connected with us on social networks:</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-instagram"></i>
                        </a>

                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">

                                    <i class="fas fa-gem me-3"></i>Phương Nam Sport
                                </h6>
                                <p>
                                    Rất hân hạnh được đem đến cho quý khách những sản phẩm tốt nhất
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Products
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Giày bóng đá</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Quần áo bóng đá</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Phụ kiện bóng đá</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Bóng đá</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Useful links
                                </h6>
                                <p>
                                    <a href="#!" class="text-reset">Pricing</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Settings</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Orders</a>
                                </p>
                                <p>
                                    <a href="#!" class="text-reset">Help</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Contact
                                </h6>
                                <p><i class="fas fa-home me-3"></i> tòa HH2B Linh Đàm,quận Hoàng Mai, Hà Nội</p>
                                <p>
                                    <i class="fas fa-envelope me-3"></i>
                                    nguyennam210601@gmail.com
                                <p><i class="fas fa-phone me-3"></i>0358307767</p>
                                </p>

                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->

                <!-- Copyright -->
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="./script.js"></script>
    <script src="./OwlCarousel2-2.3.4/src/js/owl.carousel.js"></script>
</body>

</html>