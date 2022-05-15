<?php
    require_once "../../connect.php";
    $id = $_GET['id'];
    $sqlxoa = "DELETE FROM `categories` WHERE category_id = '$id'";
    mysqli_query($connect,$sqlxoa);
    header("location:../categoryList.php");
?>