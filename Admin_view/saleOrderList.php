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
            <?php
                include './include/nav.php';
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <div class="container-fluid">

                    <form class="form-inline" action="" method="get">
                        <div class="d-flex flex-row justify-content-between mt-4">
                            <div class="d-flex flex-row">
                                <input type="hidden" id="page" name="page" class="form-control">
                                <input type="text" id="keyword" name="keyword" class="form-control" placeholder="Search"
                                    value="" style="margin-right: 5px;">
                                <button type="submit" id="btnSearch" name="btnSearch" value="Search"
                                    class="btn btn-primary">Seach</button>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Order Code</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                <c:forEach items="" var="so" varStatus="loop">
                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a role="button" class="btn btn-primary" href="./saleOrderDetail.php">
                                                <i class="fas fa-info-circle"></i>
                                                Detail
                                            </a>
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

    <!-- <script type="text/javascript">
    $(document).ready(function() {

        $("#paging").pagination({
            currentPage: $ {
                saleOrderWithPaging.currentPage
            },
            items: $ {
                saleOrderWithPaging.totalItems
            },
            itemsOnPage: 16,
            cssStyle: 'light-theme',
            onPageClick: function(pageNumber, event) {
                $('#page').val(pageNumber);
                $('#btnSearch').trigger('click');
            },
        });
    });
    </script> -->
</body>

</html>