<?php
require_once "../database/config.php";

if (isset($_POST['signin'])) {
  if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
    $err = "Please enter username or password";
  } else {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    checkAuth($username, $password, $mysqli);
  }
}

function checkAuth($username, $pass, $mysqli)
{
  if (empty($err)) {
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $mysqli->query($sql) or die($mysqli->error);

    $number_rows = mysqli_num_rows($result);
    if ($number_rows == 1) {
      $each = mysqli_fetch_array($result);

      if (password_verify($pass, $each['password'])) {
        session_start();
        $_SESSION['username'] = $each['username'];
        $_SESSION['role'] = $each['role'];
        $_SESSION['name'] = $each['name'];
        $_SESSION['phone'] = $each['phone'];
        $_SESSION['email'] = $each['email'];
        $_SESSION['user_id'] = $each['user_id'];
        header('location: /PhuongNamSport/trangchu.php');
      } else
        header('location: /PhuongNamSport/signin?err_match=Mật khẩu không chính xác!');
    } else {
      header('location: /PhuongNamSport/signin?err_match=Tài khoản hoặc mật khẩu không chính xác!');
    }
  }
}