<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="./signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign up</title>
</head>


<?php
if (isset($_GET['err_exist'])) {
    echo '<script type="text/javascript">alert("' . $_GET['err_exist'] . '");</script>';
}

if (isset($_GET['err_match'])) {
    echo '<script type="text/javascript">alert("' . $_GET['err_match'] . '");</script>';
}
?>

<body>
    <div class="container">
        <br>
        <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Tạo tài khoản</h4>
                <p class="text-center">Get started with your free account</p>
                <form modelAttribute="userModel" action="./process_signup.php" method="post">
                    <!-- Form Name -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i style="padding: 5px 0" class="fa fa-user"></i> </span>
                        </div>
                        <input path="username" name="username" class="form-control" placeholder="Username" type="text" required />
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i style="padding: 5px 0" class="fa fa-envelope"></i> </span>
                        </div>
                        <input path="email" name="email" class="form-control" placeholder="Email address" type="email" required />
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i style="padding: 5px 0" class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;">
                            <option selected="">+84</option>
                        </select>
                        <input path="phone" name="phone" class="form-control" placeholder="Phone number" type="text" required />
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i style="padding: 5px 0" class="fa fa-lock"></i> </span>
                        </div>
                        <input path="password" name="password" class="form-control" placeholder="Create password" type="password" required />
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i style="padding: 5px 0" class="fa fa-lock"></i> </span>
                        </div>
                        <input class="form-control" name="re_password" placeholder="Repeat password" type="password" required />
                    </div>

                    <div style="margin-top: 10px;" class="form-group">
                        <button type="submit" class="btn btn-primary btn-block"> Tạo tài khoản </button>
                    </div>

                    <p class="text-center">Bạn đã có tài khoản <a href="../signin/">Đăng nhập</a> </p>
                </form>
                <p class="text-center"><a href="../index.php">Trang chủ</a> </p>
            </article>
        </div>

    </div>
    <br><br>
</body>

</html>