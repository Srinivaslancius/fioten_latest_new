<?php include_once "main_header_scripts.php"; ?>
<?php
header( "refresh:10;url=index.php" );
 if($_SESSION['user_login_session_id'] == '') {
    header ("Location: logout.php");
}
$orderId = $_GET['odi'];
$sql ="SELECT * from `orders` WHERE order_id='$orderId'";
$res = $conn->query($sql);
$res1 = $res->fetch_array();
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<!-- Page Title Here -->
<title>Fioten</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<link  rel="stylesheet" type="text/css" href="css/templete.css">
<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-2.css">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:300,400,500,600,700|Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body id="bg">
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header-style-1 dark style-2">
        <!-- main header -->
        <?php include_once 'header.php';?>
        <!-- main header END -->
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="w3-bnr-inr overlay-black-middle" style="background-image:url(images/background/bg4.jpg);">
            <div class="container">
                <div class="w3-bnr-inr-entry">
                    <h1 class="text-white">Thank You</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Thank You</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-area bg-white">
            <!-- Services -->
            <div class="container">
                <div class="row m-b30">
                    <div class="col-md-4 col-sm-4">  </div>
                    <div class="col-md-8 col-sm-8">
                        <h2 class="text-uppercase">Order Confirmation </h2>
                        <h3 style="color:green">Your order has been received</h3></strong>
                        <hr class="message-inner-separator">
                        <p>Thank you for your purchase</p>
                        <p>Your Order#is:<strong><?php echo $orderId; ?></strong></p>
                        <?php $sql = "SELECT * FROM orders WHERE order_id = '$orderId'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                        ?>
                        <p>Billing&Shipping Information:<strong><?php echo $row['address1']; ?></strong></p>
                        <p>You will be redirected to the Home in 10 seconds.</p>
                    </div>
                </div>
            </div>
            <!-- Services END -->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
   <!-- Footer -->
    <footer class="site-footer">
        <?php include_once 'footer.php';?>
    </footer>
    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-caret-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script type="text/javascript"  src="js/jquery.min.js"></script>
<!-- jquery.min js -->
<script type="text/javascript"  src="js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script type="text/javascript"  src="js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script type="text/javascript"  src="js/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script type="text/javascript"  src="js/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script type="text/javascript"  src="js/waypoints-min.js"></script>
<!-- waypoints js -->
<script type="text/javascript"  src="js/counterup.min.js"></script>
<!-- counterup js -->
<script type="text/javascript" src="js/imagesloaded.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry.filter.js"></script>
<!-- masonry  -->
<script type="text/javascript"  src="js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YEzHx_YCQvqQSB_xuSC18BT81BlKVvI&sensor=false"></script>
<!-- google map  -->
<script type="text/javascript"  src="js/custom.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript"  src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<!-- switcher fuctions -->

<div id="loading-area"></div>

</body>
</html>
