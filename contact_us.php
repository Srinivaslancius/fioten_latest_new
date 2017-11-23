<?php include_once "main_header_scripts.php"; ?>
<?php
//ob_start();
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']))  {
$dataem = $getSiteSettingsData['email'];
//$to = "srinivas@lanciussolutions.com";
$to = "$dataem";
$subject = "Fioten - Contact Us ";

$message = "<html><head><title>Fioten </title></head>
<body>
<p>User Feed Back Information!</p>
<h4>Name: </h4><p>".$_POST['name']."</p>
<h4>Email: </h4><p>".$_POST['email']."</p>
<h4>Message: </h4><p>".$_POST['message']."</p>
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
    echo  "<script>alert('Message Sent To Your Email,Please Check.');window.location.href('contact_us.php');</script>";
}

}?><!DOCTYPE html>

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
<link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-2.css">
<link  rel="stylesheet" type="text/css" href="css/templete.css">
<link rel="stylesheet" type="text/css" href="css/switcher.css"/>
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:300,400,500,600,700|Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body id="bg">
<div class="page-wraper">
    <!-- header -->
    <header class="site-header header-style-1 dark style-2">
        <?php include_once 'header.php';?>
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
        <div class="w3-bnr-inr overlay-black-middle" style="background-image:url(images/contactus.jpg);">
            <div class="container">
                <div class="w3-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Contact us</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-md-4">
                        <?php $getUSAAddress = getDataFromTables('content_pages',$status=NULL,'id',11,$activeStatus=NULL,$activeTop=NULL);
                        $getUSAAddress1 = $getUSAAddress->fetch_assoc();?>
                        <?php $getEmail = getDataFromTables('content_pages',$status=NULL,'id',12,$activeStatus=NULL,$activeTop=NULL);
                        $getEmail1 = $getEmail->fetch_assoc();?>
                        <?php $getUSAPhone = getDataFromTables('content_pages',$status=NULL,'id',13,$activeStatus=NULL,$activeTop=NULL);
                        $getUSAPhone1 = $getUSAPhone->fetch_assoc();?>
                        <h4>Corporate Office</h4>
                        <div class="p-a30 bg-white m-b30">
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a  class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 w3-tilte">Corporate Office Address</h6>
                                        <?php echo $getUSAAddress1['description'];?>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="mailto:<?php echo $getEmail1['description'] ?>" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 w3-tilte">EMAIL</h6>
                                        <?php echo $getEmail1['description'];?>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="Tel:<?php echo $getUSAPhone1['description']; ?>" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 w3-tilte">PHONE</h6>
                                        <?php echo $getUSAPhone1['description'];?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php $getNigeriaAddress = getDataFromTables('content_pages',$status=NULL,'id',14,$activeStatus=NULL,$activeTop=NULL);
                        $getNigeriaAddress1 = $getNigeriaAddress->fetch_assoc();?>
                        <?php $getUSAEmil = getDataFromTables('content_pages',$status=NULL,'id',12,$activeStatus=NULL,$activeTop=NULL);
                        $getUSAEmil1 = $getUSAEmil->fetch_assoc();?>
                        <?php $getUSAPhone = getDataFromTables('content_pages',$status=NULL,'id',13,$activeStatus=NULL,$activeTop=NULL);
                        $getUSAPhone1 = $getUSAPhone->fetch_assoc();?>
                        <h4>Nigeria Office</h4>
                        <div class="p-a30 bg-white m-b30">
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a  class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 w3-tilte">ADDRESS</h6>
                                        <?php echo $getNigeriaAddress1['description'];?>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="mailto:<?php echo $getEmail1['description'] ?>" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 w3-tilte">EMAIL</h6>
                                        <?php echo $getEmail1['description'];?>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="Tel:<?php echo $getUSAPhone1['description']; ?>" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 w3-tilte">PHONE</h6>
                                        <?php echo $getUSAPhone1['description'];?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <?php $getChinaAddress = getDataFromTables('content_pages',$status=NULL,'id',15,$activeStatus=NULL,$activeTop=NULL);
                        $getChinaAddress1 = $getChinaAddress->fetch_assoc();?>
                        <?php $getUSAEmil = getDataFromTables('content_pages',$status=NULL,'id',12,$activeStatus=NULL,$activeTop=NULL);
                        $getUSAEmil1 = $getUSAEmil->fetch_assoc();?>
                        <?php $getChinaPhone = getDataFromTables('content_pages',$status=NULL,'id',16,$activeStatus=NULL,$activeTop=NULL);
                        $getChinaPhone1 = $getChinaPhone->fetch_assoc();?>
                        <h4>Australia Office</h4>
                        <div class="p-a30 bg-white m-b30">
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a class="icon-cell"><i class="fa fa-map-marker"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 w3-tilte"><?php echo $getChinaAddress1['title'];?></h6>
                                        <?php echo $getChinaAddress1['description'];?>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="mailto:<?php echo $getEmail1['description'] ?>" class="icon-cell"><i class="fa fa-envelope"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 w3-tilte"><?php echo $getEmail1['title'];?></h6>
                                        <?php echo $getEmail1['description'];?>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs bg-primary"> <a href="Tel:<?php echo $getChinaPhone1['description'] ?>" class="icon-cell"><i class="fa fa-phone"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-b0 w3-tilte"><?php echo $getChinaPhone1['title'];?></h6>
                                        <?php echo $getChinaPhone1['description'];?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- right part END -->
                </div>
                <div class="col-md-12">
                        <h4>Contact form</h4>
                        <div class="dzFormMsg"></div>
                        <div class="p-a30 bg-white clearfix m-b30">
                            <form method="post"  action="">
                                <input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <input name="name" type="text" required class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                <input name="email" type="email" class="form-control" required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group"> <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                                                <textarea name="message" rows="4" class="form-control" required ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                        <button name="Reset" type="reset" value="Reset"  class="site-button  m-l30"> <span>Reset</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Map part start -->
                        <h4>Our Location</h4>
                        <!-- <div id="gmap_canvas">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2912.977839896567!2d-87.91356848468456!3d43.1049805957248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88051eedab1d2321%3A0x22c9d93d12fb4c4b!2s4848+N+Lydell+Ave%2C+Milwaukee%2C+WI+53217%2C+USA!5e0!3m2!1sen!2sin!4v1505902149319" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2912.9795346934648!2d-87.91344268485466!3d43.10494497914389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88051eed0e11be0f%3A0x6d33635e7b7bfebc!2sParkside+At+Estabrook+Apartments!5e0!3m2!1sen!2sin!4v1508240610254" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div> -->
                        
                          <script src="https://maps.google.com/maps/api/js?key=AIzaSyA04qekzxWtnZq6KLkabMN_4abcJt9nCDk" type="text/javascript"></script>
                       
                          <div id="map" style="display:block; height: 350px;"></div>

                          <script type="text/javascript">
                            var locations = [
                              ['Fioten USA Limited', 43.104945, -87.911254],
                              ['Fioten Nigeria Limited', 6.597341, 3.354311],
                              ['Fioten Australia Limited ', -37.817274, 144.955709],
                            ];

                            var map = new google.maps.Map(document.getElementById('map'), {
                              zoom: 2,
                              center: new google.maps.LatLng(6.597341, 3.354311),
                              mapTypeId: google.maps.MapTypeId.ROADMAP
                            });

                            var infowindow = new google.maps.InfoWindow();

                            var marker, i;

                            for (i = 0; i < locations.length; i++) {  
                              marker = new google.maps.Marker({
                                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                                map: map
                              });

                              google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                return function() {
                                  infowindow.setContent(locations[i][0]);
                                  infowindow.open(map, marker);
                                }
                              })(marker, i));
                            }
                          </script>
                        </body>
                        </html>
                        <!-- Map part END -->
                    </div>
                </div>
            </div>
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
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_YEzHx_YCQvqQSB_xuSC18BT81BlKVvI&sensor=false"></script> -->
<!-- google map  -->
<script type="text/javascript"  src="js/custom.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript"  src="js/dz.ajax.js"></script>
<!-- contact-us js -->
<script type="text/javascript"  src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<!-- switcher fuctions -->

<div id="loading-area"></div>

</body>
</html>
