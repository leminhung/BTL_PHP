<?php
    require_once "../../connect.php";
    $id = $_POST['category_id'];
    $categoryname = $_POST['category_name'];
    $sql = "UPDATE categories
    SET
    category_name='$categoryname'
    WHERE
    category_id = $id ";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
    header('location:../categoryList.php');