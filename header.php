<?php
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="w3-topbar-left">
                            <ul class="social-line text-center pull-right">
                                <li><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><i class="fa fa-phone"></i> <span><?php echo $getSiteSettingsData['mobile'] ?></span> </a>
                                </li>
                                <li><a href="mailto:<?php echo $getSiteSettingsData['email'] ?>"><i class="fa fa-clock-o"></i> <span><?php echo $getSiteSettingsData['email'] ?></span></a>
                                </li>
                                <li><a href="javascript:void(0);"><i class="fa fa-envelope-o"></i> <span><?php echo $getSiteSettingsData['open_timings'] ?></span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="w3-topbar-right">
                            <ul class="social-line text-center pull-right">
                                <li>
                                    <a href="<?php echo $getSiteSettingsData['fb_link'] ?>" target="_blank" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="<?php echo $getSiteSettingsData['twitter_link'] ?>" target="_blank" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="<?php echo $getSiteSettingsData['inst_link'] ?>"  target="_blank" class="fa fa-linkedin"></a>
                                </li>
                                <li>
                                    <a href="<?php echo $getSiteSettingsData['gplus_link'] ?>" target="_blank" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

<div class="sticky-header header-curve main-bar-wraper">
			<div class="main-bar bg-primary clearfix ">
				<div class="container clearfix">
					<!-- website logo -->
					<div class="logo-header mostion">
						<a href="index.php">
							<img src="uploads/logo/<?php echo $getSiteSettingsData['logo']; ?>" width="193" height="89" alt="">
						</a>
					</div>
					<!-- nav toggle button -->
					<button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed"> 
						<span class="sr-only">Toggle navigation</span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
						<span class="icon-bar"></span> 
					</button>
					<!-- extra nav -->
					<?php if(isset($_SESSION['user_login_session_id']) && $_SESSION['user_login_session_id']!='') { ?>
					<div class="extra-nav" style="position:relative; top:10px; font-weight:bold">
						<div class="extra-cell">
							<a href="my_dashboard.php"><?php echo $_SESSION['user_login_session_name']; ?> </a>  | <a href="logout.php"> Logout </a>
						</div>
					</div>
					<?php } else { ?>
					<div class="extra-nav">
						<div class="extra-cell">
                            <a href="login.php" class="site-button white skew-secondry hidden-xs">Login</a>
						</div>
					</div>
					<?php } ?>
					<!-- main nav -->
					<div class="header-nav navbar-collapse collapse">
						<ul class=" nav navbar-nav">
							<li class="<?php if($page_name == 'index.php') { echo "active"; } ?>"> 
                             	<a href="index.php">Home</a>								
							</li>
                            <li class="<?php if($page_name == 'about_us.php') { echo "active"; } ?>"> 
                                <a href="about_us.php">About Us</a>
							</li>                     
                                                       
							<li class="<?php if($page_name == 'brands.php') { echo "active"; } ?>"> 
								<a href="javascript:;">Products<i class="fa fa-chevron-down"></i></a>
									<ul class="sub-menu">
									<?php $getCategory = getDataFromTables('categories','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>
									<?php while($getCat = $getCategory->fetch_assoc()) {  ?>

										<li>
											<a href="brands.php?catId=<?php echo $getCat['id']; ?>"><?php echo $getCat['category_name']; ?></a>
											<?php $getSubCat = getDataFromTables('sub_categories','0','category_id',$getCat['id'],$activeStatus=NULL,$activeTop=NULL);  ?>
											<ul class="sub-menu">
												<?php while($getSubCatDet = $getSubCat->fetch_assoc()) {  ?>
												<li>
													<a href="products.php?subCatId=<?php echo $getSubCatDet['id']; ?>"><?php echo $getSubCatDet['sub_category_name']; ?></a>
													<?php $getSubSubCat = getDataFromTables('sub_sub_categories','0','sub_category_id',$getSubCatDet['id'],$activeStatus=NULL,$activeTop=NULL);  ?>
													<!-- <ul class="sub-menu">
														<?php while($getSubSubDat = $getSubSubCat->fetch_assoc()) {  ?>
															<li><a href="#"><?php echo $getSubSubDat['sub_sub_category_name']; ?></a></li>
														<?php } ?>
													</ul> -->
												</li>
												<?php } ?>												
											</ul>
										</li>

									<?php } ?>
										
									</ul>
							</li>

	                        <li class="<?php if($page_name == 'logistics_partenership.php') { echo "active"; } ?>"> 
	                           <a href="logistics_partenership.php">Logistics & Partnership</a>
							</li>
                            <li class="<?php if($page_name == 'banking.php') { echo "active"; } ?>"> 
                                <a href="banking.php">Banking Information</a>
							</li>
							<li class="<?php if($page_name == 'contact_us.php') { echo "active"; } ?>"> 
                                <a href="contact_us.php">Contact Us</a>
							</li>
                                                        
						</ul>
					</div>
				</div>
			</div>
		</div>