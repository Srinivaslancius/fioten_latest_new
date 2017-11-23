<?php 
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php";
//echo "<pre>"; print_r($_REQUEST); die;
$product_price = $_POST['product_price'];
$product_id = $_POST['product_id'];
$product_quantity = $_POST['product_quantity'];
$sql = "SELECT * FROM orders WHERE product_id = '$product_id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $_POST["product_price"] * $_POST["product_quantity"];
?>