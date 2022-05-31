<?php
require_once './database/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="./image/Free_Sample_By_Wix__1_-removebg-preview.png" type="image/icon type">
    <title>Phương Nam Sport</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <?php
        session_start();
        include './includes/navbar.php';
        ?>
    </div>
    <div style=" max-width: 1350px; margin-top: 154px;" class="container">
        <div class="row col-12" style="padding-left: 0px;">
            <div class="col-3 justify-content-start" style="padding-left: 0px;">
                <div style="background-color: #333333 !important;" class="list-group list-group list-group-flush">
                    <a style="background-color: #333333 !important; color: orange !important" href="#"
                        class="list-group-item list-group-item-action list-category-item">Danh mục sản phẩm</a>
                    <?php
                    $sql = "SELECT * FROM `categories`";
                    $categories = $mysqli->query($sql);
                    ?>
                    <?php foreach ($categories as $category) { ?>
                    <a href="?categoryId=<?php echo $category['category_id'] ?>"
                        class="list-group-item list-group-item-action name-category-item"><?php echo $category['category_name'] ?></a>
                    <?php } ?>
                </div>
            </div>
            <?php
            $trang = 1;
            if (isset($_GET['trang'])) {
                $trang = $_GET['trang'];
            }
            $search = '';
            if (isset($_GET['search'])) {
                $search = strtoupper($_GET['search']);
            }
            //phan trang
            $sql_so_san_pham = "SELECT COUNT(*) FROM products
                WHERE UPPER(product_name) LIKE '%$search%'";
            if (isset($_GET['categoryId'])) {
                $category_id = $_GET['categoryId'];
                $sql_so_san_pham = "SELECT COUNT(*) FROM products
                    WHERE (category_id = $category_id)";
            }
            $mang_so_san_pham = $mysqli->query($sql_so_san_pham);
            $kq_so_san_pham = mysqli_fetch_array($mang_so_san_pham);
            $so_san_pham = $kq_so_san_pham['COUNT(*)'];
            $so_san_pham_tren_1_trang = 2;
            $so_trang = ceil($so_san_pham / $so_san_pham_tren_1_trang);
            $boqua = $so_san_pham_tren_1_trang * ($trang - 1);

            $sql = "";
            if (!empty($_GET['categoryId'])) {
                $category_id = $_GET['categoryId'];
                $sql = "SELECT * FROM products
                    WHERE
                    (category_id = $category_id)
                    LIMIT $so_san_pham_tren_1_trang offset $boqua";
            } else {
                $sql = "SELECT * FROM products
                    WHERE
                    UPPER(product_name) LIKE '%$search%'
                    LIMIT $so_san_pham_tren_1_trang offset $boqua";
            }
            $products = $mysqli->query($sql);
            //UPPER(product_name) LIKE '%$search%'
            ?>
            <div class="col-9 content">
                <div class="row">
                    <img src="../Bootstrap/product img/banner-collection.jpg" alt="">
                </div>
                <div style="color: white;" class="text-all-product">
                    TẤT CẢ SẢN PHẨM
                </div>
                <div class=" category-icon">
                    <i class="fa fa-th-large"></i>
                </div>
                <div style="right: 0; color: white;" class=" float-right justify-content-end">
                    Sắp xếp theo
                    <select style="border-radius: 3px;" name="filter" id="">
                        <option value="">Giá tăng dần</option>
                        <option value="">Giá giảm dần</option>
                        <option value="">Tên: A-Z</option>
                        <option value="">Tên: Z-A</option>
                    </select>
                </div>
                <hr>
                <!-- danh sach sp -->
                <div class="row list-product">
                    <?php
                    if (is_array($products) || is_object($products)) {
                        foreach ($products as $product) {
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6  ">
                        <div style="margin-bottom: 10px !important;" class="card card-custom">
                            <?php if ($product['product_sale'] > 0) { ?>
                            <span class="ico-sale">-<?php echo $product['product_sale'] ?>%</span>
                            <?php } else { ?>
                            <span class="ico-sale"></span>
                            <?php } ?>
                            <img class="card-img-top link"
                                src="./Admin_view/upload/<?php echo $product['product_image'] ?>" alt="Card image cap">
                            <div style="padding: 6px !important;" class="card-body">
                                <a class="card-title product-title"
                                    href="./chitiet.php?id=<?php echo $product['product_id'] ?>"><?php echo $product['product_name'] ?></a>
                                <div class="price">
                                    <?php if ($product['product_sale'] > 0) { ?>
                                    <span
                                        class="card-text old-price"><?php echo number_format($product['product_price']) ?>đ</span>
                                    <?php } else { ?>
                                    <span class="card-text old-price"></span>
                                    <?php } ?>

                                    <?php if ($product['product_sale'] > 0) { ?>
                                    <span class="card-text new-price">
                                        <?php echo number_format($product['product_price'] - $product['product_price'] * $product['product_sale'] / 100)  ?>
                                        đ</span>
                                    <?php } else { ?>
                                    <span class="card-text new-price">
                                        <?php echo number_format($product['product_price']) ?>đ</span>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                    } ?>
                </div>
                <hr>
                <nav style="margin: auto; color: orange !important;" class="col-4" aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $so_trang; $i++) { ?>
                        <li class="page-item">
                            <a style="color: orange !important;" class="page-link"
                                href="?trang=<?php echo $i ?>&categoryId=<?php if (isset($_GET['categoryId'])) echo $_GET['categoryId'] ?>&search=<?php echo $search ?>"><?php echo $i ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background-color: #333333 !important;" class="text-center text-lg-start bg-light text-muted">
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
                            <a href="#!" class="text-reset">Angular</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">React</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Vue</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="./script.js"></script>
    <script src="./OwlCarousel2-2.3.4/src/js/owl.carousel.js"></script>
</body>

</html>