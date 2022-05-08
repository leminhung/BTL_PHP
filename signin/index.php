<?php
require_once "../database/config.php";
session_start();

if (isset($_SESSION['username'])) {
  header("location: /projects/FE_PHP");
  exit;
}

$username = $password = "";
$err = "";

if (isset($_POST['signin'])) {
  if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
    $err = "Please enter a username = password";
  } else {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    checkAuth($username, $password, $mysqli);
  }
}

function checkAuth($name, $pass, $mysqli)
{
  if (empty($err)) {
    $result = $mysqli->query("SELECT username, password FROM users WHERE username = '$name'") or die($mysqli->error);

    if ($result->num_rows) {
      $row = $result->fetch_array();
      $password_user = $row['password'];

      if (strcmp($pass, $password_user) == 0) {
        session_start();
        $_SESSION['username'] = $name;

        header("location: /projects/FE_PHP");
      }
    } else {
      echo '<script type="text/javascript">alert("Mat khau khong dung");</script>';
    }
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <link rel="stylesheet" href="./signin.css">
  <title>Login</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

  <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form method="POST">
      <img class="mb-4" src="../image/Free_Sample_By_Wix__1_-removebg-preview.png" alt="" width="200" height="160">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input id="account" type="text" class="form-control" id="floatingInput" placeholder="Tên tài khoản" name="username">
        <label for="floatingInput">Tên tài khoản</label>
      </div>
      <div class="form-floating">
        <input id="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit" name="signin">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </main>
</body>

</html>