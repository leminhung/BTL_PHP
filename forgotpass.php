<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="stylesheet" href="./forgotpass.css">
    <title>Forgot password</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>
<?php
    session_start();
    require_once "./database/config.php";
    require_once "./mail.php";
    $mail = new Mailer();
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        $_SESSION['email_resetpass'] = $email;
        if($email == ""){
            echo '<script type="text/javascript">alert("Không được để trống email");</script>';
        }else{
            $sql = "SELECT * FROM users
            WHERE email = '$email'";
            $user = $mysqli->query($sql);
            if(mysqli_fetch_array($user)){
                $code = substr(rand(0,99999999),0,6);
                $_SESSION['code'] = $code;
                $mail->sendMail($email,$code);
                header('location:./verifyPass.php');
            }else{
                echo '<script type="text/javascript">alert("Email không tồn tại");</script>';
            }
        }
    }
?>

<body class="text-center">
    <main class="form-forgot">
        <form method="POST" action="">
            <img class="mb-4" src="./image/Free_Sample_By_Wix__1_-removebg-preview.png" alt="" width="200" height="160">
            <h1 class="h3 mb-3 fw-normal">Lấy lại mật khẩu</h1>

            <div class="form-floating">
                <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
                <label for="floatingInput">Nhập email:</label>
            </div>
            <br>
            <button class="w-60 btn btn-primary" type="submit" name="signin">Gửi yêu cầu</button>
        </form>
        <p class="text-center" style="margin-top:8px">Bạn chưa có tài khoản ? <a href="./signup">Đăng ký</a> </p>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </main>
</body>

</html>