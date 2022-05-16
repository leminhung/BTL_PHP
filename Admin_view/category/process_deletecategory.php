<?php
    require_once "../../database/config.php";
    $id = $_GET['id'];
    $sqlxoa = "DELETE FROM `categories` WHERE category_id = '$id'";
    $mysqli->query($sqlxoa);
    header("location:../categoryList.php");
