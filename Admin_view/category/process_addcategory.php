<?php
    require_once "../../connect.php";
    $ten = $_POST['category_name'];
    $sqlthemdanhmuc = "INSERT INTO `categories`(category_name) VALUES ('$ten')";
    mysqli_query($connect,$sqlthemdanhmuc);
    mysqli_close($connect);
    header('location:../categoryList.php');
    mysqli_close($connect);