<!doctype html>
<html lang="en">

<?php
    include './include/head.php';
?>

<body>
    <?php require_once "../connect.php" ?>
    <!-- HEADER -->
    <?php
        include './include/header.php';
    ?>


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

                <div class="container-fluid">

                    <form class="form-inline" action="" method="get">
                        <div class="d-flex flex-row justify-content-between mt-4">
                            <div class="d-flex flex-row">
                                <input type="hidden" id="page" name="page" class="form-control">
                                <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Search"
                                    value="${searchModel.keyword }" style="margin-right: 5px;">
                                <button type="submit" id="btnSearch" name="btnSearch" value="Search"
                                    class="btn btn-primary">Seach</button>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">User name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone</th>

                                </tr>
                            </thead>
                            <tbody>
                                <c:forEach items="" var="user" varStatus="loop">
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a class="btn btn-danger" href="" role="button">Delete</a>
                                        </td>
                                    </tr>
                                </c:forEach>
                            </tbody>
                        </table>
                        <!-- Paging -->
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <div id="paging"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="./dashboard.js"></script>
    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    </script>
</body>

</html>