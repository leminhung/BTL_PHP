<?php
    require_once "../../database/config.php";
    $id = $_GET['id'];
    $sqlxoa = "DELETE FROM `products` WHERE product_id = '$id'";
    $mysqli->query($sqlxoa);
    header("location:../productList.php");