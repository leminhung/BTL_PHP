<?php
require_once "../database/config.php";

$username = "";
$name = "";
$email = "";
$phone = "";
$password = "";
$re_password = "";
$avatar = "";
$avatar_tmp = "";
$path = '../Admin_view/upload/user/';


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $avatar = $_FILES['user_avatar']['name'];
    $avatar_tmp = $_FILES['user_avatar']['tmp_name'];
    $path = '../Admin_view/upload/user/';

    $sql = "SELECT count(*) FROM users where email='$email'";
    $result = $mysqli->query($sql);
    $number_rows = mysqli_fetch_array($result)['count(*)'];

    if ($number_rows == 1) {
        header("location: /PhuongNamSport/signup/?err_exist=Tài khoản đã tồn tại rùi");
        exit;
    }

    if ($password != $re_password) {
        header("location: /PhuongNamSport/signup/?err_match=Mật khẩu nhập lại không đúng");
        exit;
    }

    $hash_pass = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users(username, phone, email, password, name, avatar) values ('$username', '$phone', '$email', '$hash_pass', '$name', '$avatar')";
    $mysqli->query($sql);
    move_uploaded_file($avatar_tmp, $path . $avatar);


    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $name;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['avatar'] = $avatar;

    header('Location: /PhuongNamSport/signin');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="./signup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Sign up</title>
  <style>
  .input-file {
    margin-left: -14px;
    font-size: 14px;
  }
  </style>
</head>

<body>
  <?php
    if (isset($_GET['err_exist'])) {
        echo '<script type="text/javascript">alert("' . $_GET['err_exist'] . '");</script>';
    }

    if (isset($_GET['err_match'])) {
        echo '<script type="text/javascript">alert("' . $_GET['err_match'] . '");</script>';
    }
    ?>
  <div class="container">
    <br>
    <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Tạo tài khoản</h4>
        <p class="text-center">Get started with your free account</p>
        <form modelAttribute="userModel" action="" method="post" enctype="multipart/form-data">
          <!-- Form Name -->
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i style="padding: 5px 0" class="fa fa-user"></i> </span>
            </div>
            <input path="username" name="username" class="form-control" placeholder="Username" type="text" required />
          </div>
          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i style="padding: 5px 0" class="fa fa-user"></i> </span>
            </div>
            <input path="name" name="name" class="form-control" placeholder="Your name" type="text" required />
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
            <input path="password" name="password" class="form-control" placeholder="Create password" type="password"
              required />
          </div>

          <div class="form-group input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"> <i style="padding: 5px 0" class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" name="re_password" placeholder="Repeat password" type="password" required />
          </div>

          <!-- phần thêm avatar   -->
          <div class="form-group">
            <div style="width: 93.333333% !important;" class="col-md-4">
              <input id="avatarfile" name="user_avatar" class="input-file" type="file" />
            </div>
          </div>

          <div style="margin-top: 10px;" class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block"> Tạo tài khoản </button>
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