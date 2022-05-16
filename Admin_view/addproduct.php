<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard Template · Bootstrap v5.1</title>
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dashboard.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.1/dashboard.rtl.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <link rel="stylesheet" href="./dashboard.css">

    <!--     <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 -->
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }



    .col-md-4 {

        width: 93.333333% !important;
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="./dashboard.css" rel="stylesheet">
</head>

<body>
    <?php 
        require_once "../database/config.php" ;
    ?>

    
    <!-- HEADER -->
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="${base }/logout">Sign out</a>
            </div>
        </div>
    </header>


    <div class="container-fluid">
        <div class="row">
            <!-- NAVIGATION -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item sub">
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Orders
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="./saleOrderList.php"> Danh sách đơn hàng </a>
                                </li>

                            </ul>
                        </li>

                        <li style="margin-bottom: -36px;" class="nav-item sub">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="./addproduct.php"> Thêm sản phẩm</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./productList.php"> Danh sách sản phẩm</a>
                                </li>
                            </ul>
                        </li>

                        <li style="margin-bottom: -36px;" class="nav-item sub">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Category
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="./addcategory.php"> Thêm danh mục </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./categoryList.php"> Danh sách danh mục</a>
                                </li>
                            </ul>
                        </li>
                        <li style="margin-bottom: -36px;" class="nav-item sub">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Customers
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="./contactList"> Danh sách contact </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./userList"> Danh sách khách hàng</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Integrations
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Saved reports</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Current month
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Last quarter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Social engagement
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="file-text"></span>
                                Year-end sale
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

            <?php
            if (isset($_POST['add']))
            {
                $prd_categoryID = $_POST['prd_category'];
                $prd_name = $_POST['prd_name'];
                $prd_description = $_POST['prd_description'];
                $prd_price = $_POST['prd_price'];
                $prd_quantity = $_POST['prd_quantity'];
                $prd_avatar = $_FILES['prd_avatar']['name'];
                $prd_avatar_tmp = $_FILES['prd_avatar']['tmp_name'];
                $path = './upload/';
                $prd_sizeID = $_POST['prd_size'];
                $sql_insert_product = mysqli_query($mysqli,"INSERT INTO products(category_id,product_name,product_description,product_price,product_quantity,size_id,product_image) VALUES ('$prd_categoryID','$prd_name','$prd_description','$prd_price','$prd_quantity','$prd_sizeID','$prd_avatar')");
                move_uploaded_file($prd_avatar_tmp,$path.$prd_avatar);
            }
                
            ?>
            
                <form modelAttribute="products" method="post" action="" class="form-horizontal" enctype="multipart/form-data">
                    <fieldset>
                        <hidden path="id" />
                        <!-- Form Name -->
                        <legend>PRODUCTS</legend>
                        <div style="width: 100%" class="form-group ">
                            <label class="col-md-4 control-label" for="category">CATEGORY (required)</label>
                            <?php
                                $sql_danhmuc = mysqli_query($mysqli,"SELECT * FROM `categories`");
                            ?>
                            
                            <div style="width: 93.333333% !important;" class="col-md-4">
                                <select name="prd_category" class="form-control" id="category">
                                <?php
                                    while($row_danhmuc=mysqli_fetch_array($sql_danhmuc)){
                                    ?>
                                    <option value="<?php echo $row_danhmuc['category_id'] ?>"><?php echo $row_danhmuc['category_name']?></option>
                                    <?php
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="title">PRODUCT NAME</label>
                            <div style="width: 93.333333% !important;" class="col-md-4">
                                <input  id="title" name="prd_name" placeholder="Product name"
                                    class="form-control input-md" type="text" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="detailDescription">PRODUCT DESCRIPTION</label>
                            <div style="width: 93.333333% !important;" class="col-md-4 text-des">
                                <textarea class="form-control" id="summernote"
                                    name="prd_description"></textarea>
                            </div>
                        </div>
                        <script>
                        $(document).ready(function() {
                            $('#summernote').summernote();
                        });
                        </script>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="Price">PRICE</label>
                            <div style="width: 93.333333% !important;" class="col-md-4">
                                <input  id="Price" name="prd_price" placeholder="Price"
                                    class="form-control input-md" type="text" />
                            </div>
                        </div>
                        <!-- Text input phan nay` chua bàn đến-->
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label" for="priceSale">PRICE SALE</label>
                            <div style="width: 93.333333% !important;" class="col-md-4">
                                <input path="prd_priceSale" id="priceSale" name="priceSale" placeholder="Price Sale"
                                    class="form-control input-md" type="text" />

                            </div>
                        </div> -->
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="brand">QUANTITY</label>
                            <div style="width: 93.333333% !important;" class="col-md-4">
                                <input name="prd_quantity" placeholder="Quantity"
                                    class="form-control input-md" type="number" />
                            </div>
                        </div>
                        <!-- phần thêm avatar   -->
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="avatar">Ảnh sản phẩm</label>
                            <div style="width: 93.333333% !important;" class="col-md-4">
                                <input id="avatarfile" name="prd_avatar" class="input-file" type="file" />
                            </div>
                        </div>
                        <!-- Size sản phẩm -->
                        <div style="width: 100%" class="form-group ">
                            <label class="col-md-4 control-label" for="category">Size</label>
                            <?php
                                $sql_size = mysqli_query($mysqli,"SELECT * FROM `sizes`");
                            ?>
                            
                            <div style="width: 93.333333% !important;" class="col-md-4">
                                <select name="prd_size" class="form-control" >
                                <?php
                                    while($row_size=mysqli_fetch_array($sql_size)){
                                    ?>
                                    <option value="<?php echo $row_size['size_id'] ?>"><?php echo $row_size['size_name']?></option>
                                    <?php
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <!-- Button -->
                        <br>
                        <div class="form-group">
                            <div class="col-md-4">
                                <button id="singlebutton" name="add" class="btn btn-primary">
                                    Thêm sản phẩm
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </main>
        </div>
    </div>


    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
    <script src="dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
</body>

</html>