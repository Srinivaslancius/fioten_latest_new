<?php include_once "main_header_scripts.php"; ?>
<?php 

if (!isset($_POST['submit']))  {
            echo "";
    } else  { 
    //echo "<pre>";print_r($_POST);
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $mobile = $_POST['mobile'];
    $services = $_POST['services'];
    $message = $_POST['message'];
    $created_at = date("Y-m-d h:i:s");
    $sql = "INSERT INTO customer_enqueries (`customer_name`, `customer_email`, `customer_mobile`, `customer_feedback`, `customer_service`,`created_at`) VALUES ('$customer_name', '$customer_email', '$mobile', '$message', '$services','$created_at')";
    if($conn->query($sql) === TRUE){
       echo "<script>alert('Data Updated Successfully');window.location.href='index.php';</script>";
    } else {
       echo "<script>alert('Data Updation Failed');window.location.href='index.php';</script>";
    }
}
        
?>
<?php $getAboutUsData = getDataFromTables('content_pages',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
      $getAboutUs = $getAboutUsData->fetch_assoc(); ?>
<?php $getcontentWhy = getDataFromTables('content_pages',$status=NULL,'id',2,$activeStatus=NULL,$activeTop=NULL);
      $getcontentWhyUs = $getcontentWhy->fetch_assoc();?>

<!DOCTYPE html>

<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
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
<title><?php echo $getSiteSettingsData['admin_title'] ?></title>
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
<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-2.css">
<link rel="stylesheet" type="text/css" href="css/templete.css">

<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:300,400,500,600,700|Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body id="bg">
<div class="page-wraper">
	<!-- Header -->
	<header class="site-header header-style-1 dark style-2">
		<!-- Main Header -->
		<?php include_once 'header.php';?>
		<!-- Main Header END -->
	</header>
	<!-- Header END -->
	<!-- Content -->
	<div class="page-content bg-white">
		<!-- Slider -->
		<div class="main-slider style-two default-banner">
			<div class="tp-banner-container">
				<div class="tp-banner">
					<div id="dz_rev_slider_4_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
						<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
						<div id="dz_rev_slider_4" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
							<ul>
								<!-- SLIDE  -->
								<li data-index="rs-100" 
								data-transition="parallaxvertical" 
								data-slotamount="default" 
								data-hideafterloop="0" 
								data-hideslideonmobile="off" 
								data-easein="default" 
								data-easeout="default" 
								data-masterspeed="default" 
								data-thumb="images/main-slider/slide3.jpg"
								data-rotate="0" 
								data-fstransition="fade" 
								data-fsmasterspeed="1500" 
								data-fsslotamount="7" 
								data-saveperformance="off" 
								data-title="Hardware Consulting" 
								data-param1="" 
								data-param2="" 
								data-param3="" 
								data-param4="" 
								data-param5="" 
								data-param6="" 
								data-param7="" 
								data-param8="" 
								data-param9="" 
								data-param10="">
									<!-- MAIN IMAGE -->
									<img src="images/main-slider/slide3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
									<!-- LAYERS -->
									<div class="tp-caption tp-shape tp-shapewrapper " 
										id="slide-100-layer-1" 
										data-x="['center','center','center','center']" 
										data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" 
										data-voffset="['0','0','0','0']" 
										data-width="full" 
										data-height="full" 
										data-whitespace="nowrap" 
										data-type="shape" 
										data-basealign="slide" 
										data-responsive_offset="off" 
										data-responsive="off" 
										data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' 
										data-textAlign="['left','left','left','left']" 
										data-paddingtop="[0,0,0,0]" 
										data-paddingright="[0,0,0,0]" 
										data-paddingbottom="[0,0,0,0]" 
										data-paddingleft="[0,0,0,0]" 
										style="z-index: 2;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
									</div>
									<!-- LAYER NR. 1 -->
									
									<!-- LAYER NR. 2 -->
									<div class="tp-caption Newspaper-Title tp-resizeme" id="slide-100-layer-3" 
										data-x="['left','left','left','left']" 
										data-hoffset="['50','50','50','30']" 
										data-y="['top','top','top','top']" 
										data-voffset="['260','260','300','210']" 
										data-fontsize="['80','80','50','30']" 
										data-lineheight="['85','85','55','35']" 
										data-width="['1000','1000','1000','420']" 
										data-height="none" 
										data-whitespace="normal" 
										data-type="text" 
										data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' 
										data-textAlign="['left','left','left','left']" 
										data-paddingtop="[0,0,0,0]" 
										data-paddingright="[0,0,0,0]" 
										data-paddingbottom="[10,10,10,10]" 
										data-paddingleft="[0,0,0,0]" 
										style="z-index: 6; white-space: normal;text-transform:left; font-weight:600; line-height:80px; font-family:'roboto',sans-serif; color:#fff;">
											<span class="text-primary">Mobility Solutions</span>
									</div>
									<!-- LAYER NR. 3 -->
									
									<!-- LAYER NR. 4 -->
									
									<!-- LAYER NR. 5 -->
									
								</li>
								<!-- SLIDE  -->
								<li data-index="rs-200" 
								data-transition="parallaxvertical" 
								data-slotamount="default" 
								data-hideafterloop="0" 
								data-hideslideonmobile="off" 
								data-easein="default" 
								data-easeout="default" 
								data-masterspeed="default" 
								data-thumb="images/main-slider/slide4.jpg" 
								data-rotate="0"
								data-fstransition="fade"
								data-fsmasterspeed="1500" 
								data-fsslotamount="7"
								data-saveperformance="off" 
								data-title="A STUDY ON HAPPINESS" 
								data-param1="" 
								data-param2="" 
								data-param3="" 
								data-param4="" 
								data-param5="" 
								data-param6="" 
								data-param7="" 
								data-param8="" 
								data-param9="" 
								data-param10="">
									<!-- MAIN IMAGE -->
									<img src="images/main-slider/slide1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
									<!-- LAYERS -->
									<div class="tp-caption tp-shape tp-shapewrapper " id="slide-200-layer-1" 
										data-x="['center','center','center','center']" 
										data-hoffset="['0','0','0','0']" 
										data-y="['middle','middle','middle','middle']" 
										data-voffset="['0','0','0','0']" 
										data-width="full" 
										data-height="full" 
										data-whitespace="nowrap" 
										data-type="shape" 
										data-basealign="slide" 
										data-responsive_offset="off" 
										data-responsive="off" 
										data-frames='[{"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}]' 
										data-textAlign="['left','left','left','left']" 
										data-paddingtop="[0,0,0,0]" 
										data-paddingright="[0,0,0,0]" 
										data-paddingbottom="[0,0,0,0]" 
										data-paddingleft="[0,0,0,0]" 
										style="z-index: 2;background-color:rgba(0, 0, 0, 0.0);border-color:rgba(0, 0, 0, 0);border-width:0px;"> 
									</div>
									<!-- LAYER NR. 1 -->
									
									<!-- LAYER NR. 2 -->
									<div class="tp-caption Newspaper-Title tp-resizeme" 
										id="slide-200-layer-3" 
										data-x="['left','left','left','left']" 
										data-hoffset="['50','50','50','30']" 
										data-y="['top','top','top','top']" 
										data-voffset="['260','260','300','210']" 
										data-fontsize="['80','80','50','30']" 
										data-lineheight="['85','85','55','35']" 
										data-width="['1000','1000','1000','420']" 
										data-height="none" 
										data-whitespace="normal" 
										data-type="text" 
										data-responsive_offset="on" data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' 
										data-textAlign="['left','left','left','left']" 
										data-paddingtop="[0,0,0,0]" 
										data-paddingright="[0,0,0,0]" 
										data-paddingbottom="[10,10,10,10]" 
										data-paddingleft="[0,0,0,0]" 
										style="z-index: 6; white-space: normal;text-transform:left; font-weight:600; line-height:80px; font-family:'roboto',sans-serif; color:#fff;">
											<span class="text-primary">Business Consulting</span>
									</div>
									<!-- LAYER NR. 3 -->
									
									<!-- LAYER NR. 4 -->
									
								</li>
								<!-- SLIDE  -->
							</ul>
						</div>
					</div>
					<!-- END REVOLUTION SLIDER -->
				</div>
			</div>
		</div>
		<!-- Slider END -->
		<!-- About Fitness -->
		<div class="section-full bg-white">
                    <div class="container">
                        <div class="section-content">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <img src="images/about.png" alt=""/>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="about-us m-t50 m-b20">
	                                    <h5 class="h5 m-t0 m-b5"><?php echo $getAboutUs['title'] ?></h5>
	                                    <div class="w3-separator bg-gray-dark"></div>                                            
	                                     <?php echo substr($getAboutUs['description'],0,1000); ?>
	                                    <a href="about_us.php" class="site-button">Read More</a>                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

		<!-- About Fitness END -->
		<!-- Choose Us -->
		<div class="section-full text-white bg-img-fix content-inner overlay-gray-dark choose-us" style="background-image:url(images/background/bg1.jpg);">
            <div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
                        <div class="m-b30" style="margin-top: 15px;">							
							<div class="our-classes-block">
                                <h3 class="h3 m-t0"><?php echo $getcontentWhyUs['title']; ?></h3>
                                <img src="<?php echo $base_url . 'uploads/content_images/'.$getcontentWhyUs['image'] ?>" alt="" class="img-responsive"/>
							</div>	
						</div>
					</div>
                    <div class="col-md-1 col-sm-6"></div>
					<div class="col-md-5 col-sm-6">
						<div class="row">
                            <?php echo $getcontentWhyUs['description']; ?>
                        </div>
					</div>
				</div>
            </div>
        </div>

		<!-- Choose Us END -->
		<!-- Team member -->
		<?php $getOurSer = getDataFromTables('content_pages',$status=NULL,'id',4,$activeStatus=NULL,$activeTop=NULL);
      $getServiceData = $getOurSer->fetch_assoc();?>
		<div class="section-full bg-white content-inner">
			<div class="container">
				<div class="section-head text-center">
					<h2 class="h2"><span class="text-primary"><?php echo $getServiceData['title'];?></span></h2>
					<div class="w3-separator-outer ">
						<div class="w3-separator bg-primary style-liner"></div>
					</div>
					<?php echo $getServiceData['description'];?>
				</div>
				<?php $getOurSer1 = getDataFromTables('content_pages',$status=NULL,'id',8,$activeStatus=NULL,$activeTop=NULL);
      			$getServiceData1 = $getOurSer1->fetch_assoc();?>
				<div class="section-content text-center ">
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="w3-box m-b30 border-1 hover w3-img-effect off-color">
								<div class="w3-media">
									<a href="javascript:;">
										<img width="358" height="460" alt="" src="images/our-team/pic1.jpg">
									</a>
								</div>
								<div class="p-a10">
									<h4 class="w3-title m-b10 font-weight-600"><a href="javascript:;"><?php echo $getServiceData1['title'];?></a></h4>
                                    <?php echo substr($getServiceData1['description'], 0,150);?>
								</div>
							</div>
						</div>

						<?php $getOurSer2 = getDataFromTables('content_pages',$status=NULL,'id',8,$activeStatus=NULL,$activeTop=NULL);
      					$getServiceData2 = $getOurSer2->fetch_assoc();?>
                        <div class="col-md-4 col-sm-6">
							<div class="w3-box m-b30 border-1 hover w3-img-effect off-color">
								<div class="w3-media">
									<a href="javascript:;">
										<img width="358" height="460" alt="" src="images/our-team/pic2.jpg">
									</a>
								</div>
								<div class="p-a10">
									<h4 class="w3-title m-b10 font-weight-600"><a href="javascript:;"><?php echo $getServiceData2['title'];?></a></h4>
                                    <?php echo substr($getServiceData2['description'], 0,150);?>
								</div>
							</div>
						</div>
						<?php $getOurSer3 = getDataFromTables('content_pages',$status=NULL,'id',8,$activeStatus=NULL,$activeTop=NULL);
      					$getServiceData3 = $getOurSer3->fetch_assoc();?>
                        <div class="col-md-4 col-sm-6">
							<div class="w3-box m-b30 border-1 hover w3-img-effect off-color">
								<div class="w3-media">
									<a href="javascript:;">
										<img width="358" height="460" alt="" src="images/our-team/pic3.jpg">
									</a>
								</div>
								<div class="p-a10">
									<h4 class="w3-title m-b10 font-weight-600"><a href="javascript:;"><?php echo $getServiceData3['title'];?></a></h4>
                                    <?php echo substr($getServiceData3['description'], 0,150);?>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- Team Member END  -->
		
		<!-- Appointment -->
		<div class="section-full content-inner appointment" style="background-image:url(images/background/apointment.jpg);">
			<div class="container">
				<div class="section-content row">
					<div class="col-md-7">
						<div class="p-lr60 p-t50 p-b40 bg-white clearfix mack-an-appointment-2">
							<!-- <div class="dzFormMsg "></div> -->
							<?php $getServices = getDataFromTables('lkp_services','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>

							<form method="post" id="appointment_form">

								<div class="row">
									<?php $getAnyque = getDataFromTables('content_pages',$status=NULL,'id',5,$activeStatus=NULL,$activeTop=NULL);
      									$getAnyQueries = $getAnyque->fetch_assoc();?>
									<div class="section-head text-center">
										<h2 class="h2">Any<span class="text-primary"> Queries</span></h2>
										<div class="w3-separator-outer "><div class="w3-separator bg-primary style-liner"></div></div>
										<?php echo $getAnyQueries['description']; ?>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" id="name" name="customer_name" class="form-control" placeholder="Name" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="email" name="customer_email" id="customer_email" class="form-control" placeholder="Email" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number" maxlength="10" pattern="[0-9]{10}" required onkeypress="return isNumberKey(event)">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<select class="bs-select-hidden" id="services" name="services" required>
												<option value="">Select Service</option>
												<?php while($row = $getServices->fetch_assoc()) {  ?>
                        						<option value="<?php echo $row['id']; ?>"><?php echo $row['service_name']; ?></option>
                      							<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<div class="input-group">
												<textarea id="message" name="message" required rows="4" class="form-control"></textarea>
											</div>
										</div>
									</div>
									<div class="col-md-12 text-center">
										<!-- <div class="dzFormMsg ">
											<div class="gen alert alert-success" style="display: none;">Submiting..</div>
										</div> -->
										<button name="submit" type="submit" value="Submit" class="site-button skew-secondry">
                                            <span>Submit</span>
                                        </button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Appointment END-->
		<?php $getChooseUs = getDataFromTables('content_pages',$status=NULL,'id',3,$activeStatus=NULL,$activeTop=NULL);
      $getChooseUsData = $getChooseUs->fetch_assoc();?>
                <div class="section-full bg-img-fix content-inner overlay-primary-dark over-50" style="background-image:url(<?php echo $base_url . 'uploads/content_images/'.$getChooseUsData['image'] ?>);">
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-left text-white">
						<h2 class="h2"><?php echo $getChooseUsData['title'] ?></h2>
						<div class="w3-separator bg-white"></div>
						<?php echo $getChooseUsData['description'] ?>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-6 company-status text-white">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="text-left m-b30">
									<span class="counter"><?php echo $getSiteSettingsData['active_experts']; ?></span>
									<h4 class="m-a0">Active Experts</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="text-left m-b30">
									<span class="counter"><?php echo $getSiteSettingsData['happy_clients']; ?></span>
									<h4 class="m-a0">Happy Client</h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="text-left m-b30">
									<span class="counter"><?php echo $getSiteSettingsData['developer_hand']; ?></span>
									<h4 class="m-a0">Developer Hand</h4>
								</div>
							</div>					
							<div class="col-md-6 col-sm-6">
								<div class="text-left m-b10">
									<span class="counter"><?php echo $getSiteSettingsData['completed_project']; ?></span>
									<h4 class="m-a0">Completed Project</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Company Staus END -->

		<!-- Testimonials -->
		 <div class="section-full w3-we-find bg-img-fix p-t50 p-b50 ">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel mfp-gallery gallery owl-btn-center-lr">
                    	<?php $getPartnerLogos = getDataFromTables('partner_logos','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL); ?>
                    	<?php while ($getPartnerLogosData = $getPartnerLogos->fetch_assoc()) { ?>
                    		<div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="#"><img src="<?php echo $base_url . 'uploads/partner_logos/'.$getPartnerLogosData['partner_logo'] ?>" alt=""></a></div>
                            </div>
                        </div>
                    	<?php } ?>
                    </div>
                </div>
            </div>
        </div>


		<!-- Testimonials End -->
	</div>
	<!-- Content END-->
	<!-- Footer -->
	<footer class="site-footer">
		<!-- Company Stats -->
		<?php include_once 'footer.php';?>
	</footer>
	<!-- Footer END-->
	<!-- scroll top button -->
</div>
<button class="scroltop fa fa-caret-up"></button>
<!-- JavaScript  files ========================================= -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- jquery.min js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<!-- Form js -->
<script type="text/javascript" src="js/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script type="text/javascript" src="js/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script type="text/javascript" src="js/waypoints-min.js"></script>
<!-- waypoints js -->
<script type="text/javascript" src="js/counterup.min.js"></script>
<!-- counterup js -->
<script type="text/javascript" src="js/imagesloaded.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/masonry.filter.js"></script>
<!-- masonry  -->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script type="text/javascript" src="js/custom.js"></script>
<!-- custom fuctions  -->
<script type="text/javascript" src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->

<!-- switcher fuctions  -->
<script type="text/javascript" src="js/dz.ajax.js"></script>
<!-- contact-us js -->
<!-- revolution JS FILES -->
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="js/rev.slider.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		'use strict';
		dz_rev_slider_4();
	}); /*ready*/
	function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    	return true;
  	}
</script>
</body>
</html>
