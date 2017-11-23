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
        
        <!-- inner page banner END -->
        <!-- Breadcrumb row -->
        <div class="breadcrumb-row">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#">Home</a></li>
                    <li>Products</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-area bg-gray">
            <!-- Services -->
            <div class="container">
                <?php $id = $_GET['catId']; $getProducts = getAllDataWhere('products','category_id',$id); ?>
                
                <div class="row m-b5">    
                <?php while ($getPro = $getProducts->fetch_assoc()) { ?>                
                    <div class="col-md-3 padd0">
                        <div class="bg-white cat_prdct prdct">
                            <?php $id = $_GET['catId']; $getProductsImages = getDataFromTables('product_images','0','product_id',$getPro['id'],$activeStatus=NULL,$activeTop=NULL); $getProductsImage = $getProductsImages->fetch_assoc();  ?> 
                            <div class="prdct_img">
                                <img src="<?php echo $base_url . 'uploads/product_images/'.$getProductsImage['product_image'] ?>" alt="" class="img-responsive">                              
                            </div>
                            <div class="content_data">
                                <p><?php echo $getPro['product_name'];?></p>
                                <p><span style="text-decoration: line-through;">Rs. <?php echo $getPro['product_price'];?></span> <b>Rs. <?php echo $getPro['selling_price'];?></b><span class="pull-right"><a href="product_details.php?proId=<?php echo $getPro['id']; ?>"class="site-button padd613">Details</a></span></p>
                            </div>
                        </div>
                    </div>   
                <?php } ?>                  
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
