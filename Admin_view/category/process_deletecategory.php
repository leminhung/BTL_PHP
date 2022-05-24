<?php
require_once "../../database/config.php";
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE category_id = $id";
$mang_sp = $mysqli->query($sql);
$sqlxoa = "DELETE FROM `categories` WHERE category_id = $id";
if (isset($mang_sp)) {
    echo '<script type="text/javascript">alert("Không thể xóa do đã có sản phẩm trong này");</script>';
} else {
    $mysqli->query($sqlxoa);
}
header("location:../categoryList.php");
