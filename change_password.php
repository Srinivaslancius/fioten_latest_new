<?php error_reporting(1);
include_once "main_header_scripts.php"; ?>
<?php 

//echo "<pre>"; print_r($_REQUEST); die;
if(isset($_POST["submit"]) && $_POST["submit"]!="") {
        // echo "<pre>"; print_r($_POST); die;  
        $id = $_SESSION["user_login_session_id"];
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = $conn->query($sql);
        $getUserPwd = $result->fetch_assoc();

        if($_POST['currentPassword'] == decryptPassword($getUserPwd['user_password'])){
            
            $sql1 = "UPDATE users SET user_password = '" . encryptPassword($_POST["confirmPassword"]) . "' WHERE  id = '$id'";
            if($conn->query($sql1) === TRUE){                
                header("location: change_password.php?msg=Password Changed Successfully");
                //echo "<script>alert('Password Changed Successfully');window.location.href='my_dashboard.php';</script>";
            }               
        } else {               
            //$message = "Current Password is not correct";
            echo "<script type='text/javascript'>window.location='change_password.php?msg=Current Password is not correct'</script>";
           // echo "<script>alert('Current Password is not correct');window.location.href='my_dashboard.php';</script>";
        }
}
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
        
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>My Account Orders</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="message"><?php if(isset($_GET['msg'])) { echo $_GET['msg']; } ?></div>
        <div class="section-full content-area bg-white">
            <!-- Services -->
            <div class="container">
                <div class="row">
            <?php $id = $_SESSION["user_login_session_id"];?>
            <?php $sql = "SELECT * FROM orders where user_id = '$id' ";
                $result = $conn->query($sql);
                $getUserOrder = $result->fetch_assoc();
            ?>
            <!-- <div class="col-xs-12 bhoechie-tab-container"> -->
            <!-- <div class="message"><?php if(isset($message)) { echo $message; } ?></div> -->
            <div class="col-xs-4">
                <div class="bhoechie-tab-menu">
                    <div class="list-group">
                        <a href="my_dashboard.php" class="list-group-item ">
                            <h5><b><i class="fa fa-first-order" aria-hidden="true"></i>MY ORDERS</b><i class="fa fa-chevron-right pull-right" ></i></h5>
                        </a>
                        <a href="my_dashboard.php" class="list-group-item">
                            <h5><b><i class="fa fa-user-circle-o"></i>ACCOUNT SETTINGS</b></h5>
                        </a>
                        <a href="my_dashboard.php" class="list-group-item sub">
                            <p>Personal Information</p>
                        </a>
                        <a href="change_password.php" class="list-group-item sub active">
                            <p>Change Password</p>
                        </a>
                    </div>
                </div>
            </div>
        
                <!-- Change password section -->
                <div class="bhoechie-tab-content">

                    <div class="row">
                      
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4><b>Change Password</b></h4>
                                </div>
                                <div class="col-sm-12">
                                    <form autocomplete="off" method="POST">
                                        
                                        <div class="form-group has-float-label">
                                            <input type="password" name="currentPassword" required class="form-control" id="cur-password" placeholder="*******" autocomplete="off">
                                            <label for="cur-password">Current password</label>
                                        </div>
                                        <div class="form-group has-float-label">
                                            <input type="password" name="newPassword" required class="form-control" id="newPassword" placeholder="*********" autocomplete="off">
                                            <label for="new-password">New password</label>
                                        </div>
                                        <div class="form-group has-float-label">
                                            <input type="password" name="confirmPassword" required class="form-control" id="confirmPassword" placeholder="********" autocomplete="off"/ onBlur="checkPasswordMatch();">
                                            <label for="new-repassword">Repeat password</label>
                                        </div>
                                        <div id="divCheckPasswordMatch" style="color:red"></div>
                                        <input type="submit" value="Submit" name="submit" class="btn btn-primary" style="background-color:#56529c">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


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
<style type="text/css">
.message {
color: #FF0000;
text-align: center;
width: 100%;
}
 /*  bhoechie tab */
 
 div.bhoechie-tab-container {
     z-index: 10;
     /* background-color: #ffffff; */
     padding: 0 !important;
     border-radius: 4px;
     -moz-border-radius: 4px;
     /* border: 1px solid #ddd; */
     margin-top: 20px;
     margin-left: 50px;
     /* -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            -moz-box-shadow: 0 6px 12px rgba(0, 0, 0, .175); */
     background-clip: padding-box;
     opacity: 0.97;
     filter: alpha(opacity=97);
 }
 
 div.bhoechie-tab-menu {
     padding-right: 0;
     padding-left: 0;
     padding-bottom: 0;
     min-height: 400px;
     background-color: white;
     border-radius: 4px;
     -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);
     box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);
     -moz-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);
 }
 
 div.bhoechie-tab-menu .list-group-item.sub p {
     margin-left: 32px;
 }
 
 div.bhoechie-tab-menu .list-group-item .fa {
     margin-right: 20px;
 }
 
 div.bhoechie-tab-menu div.list-group {
     margin-bottom: 0;
 }
 
 div.bhoechie-tab-menu div.list-group>a {
     color: rgb(99, 98, 98);
 }
 
 div.bhoechie-tab-menu div.list-group>a .glyphicon,
 div.bhoechie-tab-menu div.list-group>a .fa {
     color: #5A55A3;
 }
 
 div.bhoechie-tab-menu div.list-group>a:first-child {
     border-top-right-radius: 0;
     -moz-border-top-right-radius: 0;
 }
 
 div.bhoechie-tab-menu div.list-group>a:last-child {
     border-bottom-right-radius: 0;
     -moz-border-bottom-right-radius: 0;
 }
 
 div.bhoechie-tab-menu div.list-group>a.active,
 div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
 div.bhoechie-tab-menu div.list-group>a.active .fa {
     background-color: #56529c;
     background-image: #5A55A3;
     color: #ffffff;
 }
 
 div.bhoechie-tab-content {
     background-color: #ffffff;
     padding: 25px;
 }
 
 div.bhoechie-tab-content .panel .panel-heading p {
     color: rgb(71, 71, 71);
     font-size: 11px;
     font-weight: lighter;
     margin: 0;
 }
 
 div.bhoechie-tab div.bhoechie-tab-content {
     min-height: 400px;
     border-radius: 4px;
     -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);
     box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);
     -moz-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .08);
 }
 
 div.bhoechie-tab div.bhoechie-tab-content:not(.active) {
     display: none;
 }
 
 .has-float-label .form-control:placeholder-shown:not(:focus)+* {
     font-size: 110% !important;
     top: 0.6em !important;
 }
</style>

<script type="text/javascript">
function checkPasswordMatch() {
    var password = $("#newPassword").val();
    var confirmPassword = $("#confirmPassword").val();
    if (confirmPassword != password) {
        $("#divCheckPasswordMatch").html("Passwords do not match!");
        $("#confirmPassword").val("");
    } 
}
</script>
</body>
</html>
