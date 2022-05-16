<?php
require_once "../database/config.php";

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$re_password = $_POST['re_password'];

$sql = "SELECT count(*) FROM users where email='$email'";
$result = $mysqli->query($sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];

if ($number_rows == 1) {
  header("location: /BTL_PHP/signup/?err_exist=Tài khoản đã tồn tại rùi");
  exit;
}

if ($password != $re_password) {
  header("location: /BTL_PHP/signup/?err_match=Mật khẩu nhập lại không đúng");
  exit;
}

$sql = "INSERT INTO users(username, phone, email, password) values ('$username', '$phone', '$email', '$password')";
$mysqli->query($sql);

session_start();
$_SESSION['username'] = $username;
header('Location: /BTL_PHP');
