<?php 
include "manage_webmaster/admin_includes/config.php";
include "manage_webmaster/admin_includes/common_functions.php"; 

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
	// echo "<pre>"; print_r($_POST); die;	
	$name = $_POST["name"];
	$user_id = $_POST["user_id"];
	$user_email = $_POST["user_email"];
	$user_name = $_POST["user_name"];
	$mobile = $_POST["mobile"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$email = $_POST["email"];	
	$order_total = $_POST["product_price"] * $_POST["product_quantity"];
	$order_date = date("Y-m-d h:i:s");
	$string1 = str_shuffle('abcdefghijklmnopqrstuvwxyz');
	$random1 = substr($string1,0,3);
	$string2 = str_shuffle('1234567890');
	$random2 = substr($string2,0,3);
	$contstr = "FIOTEN";
	$order_id = $contstr.$random1.$random2;

	//Sending mail
	//$dataem = $getSiteSettingsData['email'];
	$to = "haritha@lanciussolutions.com";
	//$to = "$dataem";
	$subject = "User Place Order Information";

	$message = "<html><head><title>Place Order Information</title></head>
	<body>
		<table rules='all' style='border-color: #666;' cellpadding='10'>
			<tr style='background: #eee;'><td><strong>Product Name:</strong> </td><td>" . strip_tags($_POST['product_name']) . "</td></tr>
			<tr><td><strong>Product Price:</strong> </td><td>" . strip_tags($_POST['product_price']) . "</td></tr>
			<tr><td><strong>Product Quantity:</strong> </td><td>" . strip_tags($_POST['product_quantity']) . "</td></tr>
			<tr><td><strong>Order Total:</strong> </td><td>'$order_total'</td></tr>
			<tr><td><strong>Date:</strong> </td><td>'$order_date'</td></tr>
		</table>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <info@fioten.com>' . "\r\n";
	// $headers .= 'Cc: myboss@example.com' . "\r\n";

	mail($to,$subject,$message,$headers);

	//Saving Orders
	$productsCount = count($_POST["product_id"]);
	$sql = "INSERT INTO orders (`first_name`,`user_name`,`user_email`,`user_id`, `mobile`,`email`, `address1`,`product_id`,`product_name`,`product_price`,`product_total_price`, `order_total`,`order_date`,`product_quantity`,`payment_status`,`order_status`,`order_id`) VALUES ('$name','$user_name','$user_email','$user_id','$mobile','$email','$address','" . $_POST["product_id"]. "','" . $_POST["product_name"]. "','" . $_POST["product_price"]. "','" . $_POST["product_total_price"]."','$order_total','$order_date','" . $_POST["product_quantity"]. "','1','1','$order_id')";
	$res = $conn->query($sql);

    header("Location: thankyou.php?odi=".$order_id."");

}

?>