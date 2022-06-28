<!DOCTYPE html>
<html lang="en">

<?php
include './include/head.php';
?>

<body>
    <?php require_once "../database/config.php" ?>
    <?php
    include './include/header.php';
    ?>
    <div class="container-fluid">
        <div class="row">
            <?php
            include './include/nav.php';
            ?>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <form modelAttribute="category" method="post" action="./category/process_addcategory.php" class="form-horizontal">
                    <fieldset>
                        <sf:hidden path="id" />
                        <!-- Form Name -->
                        <legend>CATEGORY</legend>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="name">CATEGORY NAME</label>
                            <div style="width: 93.333333% !important" class="col-md-4">
                                <input path="name" id="name" name="category_name" placeholder="CATEGORY NAME" class="form-control input-md" type="text" />
                            </div>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $("#summernote").summernote();
                            });
                        </script>
                        <!-- Button -->
                        <br>
                        <div class="form-group">
                            <div class="col-md-4">
                                <button id="singlebutton" class="btn btn-primary" type="submit">
                                    Thêm loại sản phẩm
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </main>
        </div>
    </div>

    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="./dashboard.js"></script>
    <script src="./dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
</body>

</html>