<?php include_once "main_header_scripts.php"; ?>
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
<link rel="stylesheet" type="text/css" href="plugins/scroll/scrollbar.css">
<link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-2.css">
<link  rel="stylesheet" type="text/css" href="css/templete.css">

<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:300,400,500,600,700|Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body id="bg">
<div class="page-wrapers">
    <header class="site-header header-style-1 dark style-2">
        <!-- Main Header -->
        <?php include_once 'header.php';

            if (isset($_POST['submit']))  {
                //If success
                $user_full_name = $_POST['user_full_name'];
                $user_email = $_POST['user_email'];
                $user_address = $_POST['user_address'];
                $user_city_id = $_POST['user_city_id'];
                $user_name = $_POST['user_name'];
                $user_password = encryptPassword($_POST['user_password']);
                $created_admin_id = $_SESSION['admin_user_id'];
                $created_at = date("Y-m-d h:i:s");
                  $sql = "INSERT INTO users (`user_full_name`, `user_email`, `user_address`, `user_city_id`, `user_name`, `user_password`, `created_admin_id`, `created_at`, `status`) VALUES ('$user_full_name', '$user_email', '$user_address', '$user_city_id', '$user_name', '$user_password', '$created_admin_id', '$created_at', 0)";
                if($conn->query($sql) === TRUE){
                   echo "<script type='text/javascript'>alert('Data Added Successfully');window.location='login.php'</script>";
                } else {
                   echo "<script type='text/javascript'>alert('Data Added failed');window.location='login.php'</script>";
                }

            } else if(isset($_POST['login']))  { 

                //Login here
                $user_name = $_POST['login_name'];
                $user_password = encryptPassword($_POST['login_password']);
                $sql = "SELECT * FROM users WHERE user_name = '$user_name' AND user_password = '$user_password' AND status= 0 ";
                $result = $conn->query($sql);
                //Set variable for session
                if($row = $result->fetch_assoc())
                {
                    $_SESSION['user_login_session_id'] =  $row['id'];
                    $_SESSION['user_login_session_name'] = $row['user_full_name'];
                    $_SESSION['user_login_session_email'] = $row['user_email'];
                    echo "<script>history.go(-2);</script>";
                } else {
                    header('Location: login.php?fmsg=fail');
                }
            } else if(isset($_POST['forgot'])){
                $forgot_email = $_POST["forgot_email"];
                /*$string1 = str_shuffle('abcdefghijklmnopqrstuvwxyz');
                $random1 = substr($string1,0,3);
                $string2 = str_shuffle('1234567890');
                $random2 = substr($string2,0,3);
                $contstr = "uSr";
                $pwd = $contstr.$random1.$random2;*/
                $sql="SELECT * FROM users where user_email = '".$_POST["forgot_email"]."' ";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                $userName = $row['user_name'];
                $pwd = decryptPassword($row['user_password']);
                if($result->num_rows>0){
                    $to = "$forgot_email";
                //$to = "$dataem";
                $subject = "User Forgot Password";

                $message = "<html><head><title>User New Password</title></head>
                <body>
                    <table rules='all' style='border-color: #666;' cellpadding='10'>
                        <tr><td><strong>User Name:  </strong>$userName</td></tr>
                        <tr><td><strong>User Password:  </strong>$pwd</td></tr>
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
                    if(mail($to,$subject,$message,$headers)) {
                      echo  "<script>alert('Password Sent To Your Email,Please Check.');window.location.href('login.php');</script>";
                    }else{
                        echo "fail";
                    }
                }  else{
                    echo "<script>alert('Your Entered Email Not Found');</script>";
                }
                /*$updatePassword = encryptPassword($pwd);
                $sql = "UPDATE users SET user_password = '$updatePassword' WHERE user_email='".$_POST["forgot_email"]."'";
                $res = $conn->query($sql);*/
            }
             else {
                //Fail
                //echo "fail";
            }

            
        ?>
        <!-- Main Header END -->
    </header>
    <!-- Content -->
    <div class="page-content w3-login p-t50">
        <div class="login-form">
            <div class="tab-content">
                <div id="login" class="tab-pane active text-center">
                    <form class="p-a30 w3-form  m-t100" method="post">
                        <h3 class="form-title m-t0">Sign In</h3>
                        <div class="w3-separator-outer m-b5">
                            <div class="w3-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address and your password. </p>
                        <div class="form-group">
                            <input name="login_name" required="" class="form-control" placeholder="User Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="login_password" required="" class="form-control " placeholder="Type Password" type="password"/>
                        </div>
                        <div class="form-group text-left">
                            <button class="site-button" name="login">login</button>
                            
                            <a data-toggle="tab" href="#forgot-password" class="m-l15"><i class="fa fa-unlock-alt"></i> Forgot Password</a> </div>
                    </form>
                    <div class="bg-primary p-a15 "> <a data-toggle="tab" href="#developement-1" class="text-white">Create an account</a> </div>
                </div>
                <div id="forgot-password" class="tab-pane fade ">
                    <form class="p-a30 w3-form m-t100 text-center" method="post">
                        <h3 class="form-title m-t0">Forget Password ?</h3>
                        <div class="w3-separator-outer m-b5">
                            <div class="w3-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your e-mail address below to reset your password. </p>
                        <div class="form-group">
                            <input type="email" id="forgot_email" name="forgot_email" required="" class="form-control" placeholder="Email Id" />
                        </div>
                        <div class="form-group text-left"> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button type="submit" name="forgot" class="site-button pull-right">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="developement-1" class="tab-pane fade">
                    <form class="p-a30 w3-form text-center text-center" method="post">
                        <h3 class="form-title m-t0">Sign Up</h3>
                        <div class="w3-separator-outer m-b5">
                            <div class="w3-separator bg-primary style-liner"></div>
                        </div>
                        <p>Enter your personal details below: </p>
                        <div class="form-group">
                            <input name="user_full_name" required="" class="form-control" placeholder="Full Name" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="user_email" required="" class="form-control" placeholder="Email Id" type="email"/>
                        </div>
                        <div class="form-group">
                            <input name="user_address" required="" class="form-control" placeholder="Address" type="text"/>
                        </div>
                        <div class="form-group">
                            <input name="user_city_id" required="" class="form-control" placeholder="City/Town" type="text"/>
                        </div>
                        <label class="text-left m-b20">Enter your account details below: </label>
                        <div class="form-group">
                            <input name="user_name" id="user_name" required="" class="form-control" placeholder="User Name" type="text" onkeyup="checkUserName()"/>
                        </div>
                        <span id="name_status" style="color:red"></span>
                        <div class="form-group">
                            <input name="user_password" id="user_password" required="" class="form-control" placeholder="Password" type="password"/>
                        </div>
                        <div class="">
                            <input name="user_password1" id="user_password1" required="" class="form-control" placeholder="Re-type Your Password" type="password"/ onChange="checkPasswordMatch();">
                        </div>
                        <div id="divCheckPasswordMatch" style="color:red"></div>
                        <label class="m-b30">
                        <input type="checkbox"/>
                        <label>I agree to the <a href="terms.php">Terms of Service </a>& <a href="privacy.php">Privacy Policy </a></label>
                        </label>
                        <div class="form-group text-left "> <a class="site-button outline gray" data-toggle="tab" href="#login">Back</a>
                            <button class="site-button pull-right" type="submit" name="submit" value="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
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
<script type="text/javascript"  src="js/jquery.countdown.js"></script>
<!-- jquery countdown -->
<script type="text/javascript" src="js/imagesloaded.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry.filter.js"></script>
<!-- masonry  -->
<script type="text/javascript"  src="js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script type="text/javascript"  src="js/custom.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript"  src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<!-- switcher fuctions -->
<!-- script for check email available -->
<script type="text/javascript">
function checkUserName() {
    var user_name = $("#user_name").val();
    if (user_name){
      $.ajax({
      type: "POST",
      url: "check_user_name_avail.php",
      data: {
        user_name:user_name,
      },
      success: function (response) {
        $( '#name_status' ).html(response);
        if (response == "User Name Already Exist"){
          $("#user_name").val("");
        }
        }
       });
    }
}
function checkPasswordMatch() {
    var password = $("#user_password").val();
    var confirmPassword = $("#user_password1").val();
    if (confirmPassword != password) {
        $("#divCheckPasswordMatch").html("Passwords do not match!");
        $("#user_password1").val("");
    } else {
        $("#divCheckPasswordMatch").html("Passwords match.");
    }
}
</script>


</body>
</html>
 <?php 
    if($_GET['fmsg']!='') {
        echo "<script>alert('The Email or Password you entered is incorrect!');</script>";
    }
    ?>