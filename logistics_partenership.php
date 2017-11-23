<?php include_once "main_header_scripts.php"; ?>
<?php $getLogi = getDataFromTables('content_pages',$status=NULL,'id',6,$activeStatus=NULL,$activeTop=NULL);
      $getLogiInfo = $getLogi->fetch_assoc();?>
<?php $getPartInfo = getDataFromTables('content_pages',$status=NULL,'id',7,$activeStatus=NULL,$activeTop=NULL);
      $getPartInfoDat = $getPartInfo->fetch_assoc();?>
<!DOCTYPE html>
<!-- Meta -->
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
<title>Fioten :: Logistics and Partnerships</title>
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
        <div class="w3-bnr-inr overlay-black-middle" style="background-image:url(<?php echo $base_url . 'uploads/content_images/'.$getLogiInfo['image'] ?>);">
            <div class="container">
                <div class="w3-bnr-inr-entry">
                    <h1 class="text-white">Logistics and Partnership</h1>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Logistics and Partnerships</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="content">
            <!-- About Us -->
			<div class="section-full content-inner bg-white">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center section-head">
							<h2 class="h2"> <span class="text-primary"><?php echo $getLogiInfo['title'];?></span></h2>
							<div class="w3-separator bg-primary"></div>
							
						</div>
                        <div class="clearfix">
                            <div class="col-md-12">
                                <?php echo $getLogiInfo['description'];?>
                            </div>
                        </div>
					</div>
				</div>
            </div>
            <!-- About Us END -->
            
            <!-- What peolpe are saying -->
            <div class="section-full w3-slider-btn overlay-black-middle bg-img-fix content-inner" style="background-image:url(<?php echo $base_url . 'uploads/content_images/'.$getPartInfoDat['image'] ?>);">
                <div class="container">
                    <div class="section-head text-center text-white">
                        <h2 class="h2">Our <span class="text-primary">Partnership</span></h2>
                        <div class="w3-separator-outer ">
                            <div class="w3-separator bg-primary style-liner"></div>
                        </div>
                        
                    </div>
                    <div class="section-content">
                        <div class="row">
                            <div class="col-md-12" style="color:#ffff">
                                <?php echo $getPartInfoDat['description'];?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- What peolpe are saying END-->
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->
    <!-- Footer -->
    <footer class="site-footer">
        <?php include_once 'footer.php';?>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-arrow-up" ></button>
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
<script type="text/javascript"  src="js/custom.min.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript"  src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->
<!-- switcher fuctions -->
<script type="text/javascript"  src="js/switcher.min.js"></script>
<div id="loading-area"></div>

</body>
</html>
