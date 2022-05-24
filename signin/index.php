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

<?php
if (isset($_GET['err_match'])) {
  echo '<script type="text/javascript">alert("' . $_GET['err_match'] . '");</script>';
}

session_start();
if (isset($_SESSION['username'])) {
  header('location: /BTL_PHP/trangchu.php');
}
?>

<body class="text-center">
  <main class="form-signin">
    <form method="POST" action="./process_signin.php">
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
    </form>
    <p class="text-center" style="margin-top:8px">Bạn chưa có tài khoản ? <a href="../signup">Đăng ký</a> </p>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </main>
</body>

</html>