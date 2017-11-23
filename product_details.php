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
                    <li>Product View</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb row END -->
        <!-- contact area -->
        <div class="section-full content-area bg-gray">
            <!-- Services -->
            <div class="container">
                
                <div class="row m-b5">
                    <?php $id = $_GET['proId']; $getProductsImages = getDataFromTables('product_images','0','product_id',$id,$activeStatus=NULL,$activeTop=NULL);  ?>
                    <div class="col-md-4 padd0">
                        <div class="bg-white cat_prdct prdct">
                            <?php while  ($getPro1 = $getProductsImages->fetch_assoc()) { ?>
                            <img src="<?php echo $base_url . 'uploads/product_images/'.$getPro1['product_image'] ?>" class="image_<?php echo $getPro1['id'];?>" alt="" />
                            <?php }?>
                        </div>
                    </div>
                     <?php $id = $_GET['proId']; $getProducts = getDataFromTables('products','0','id',$id,$activeStatus=NULL,$activeTop=NULL); $getPro = $getProducts->fetch_assoc();?>
                    <div class="col-md-8 padd0">
                        <div class="bg-white cat_prdct prdct prdct_desc">
                            <h3><?php echo $getPro['product_name'];?></h3>
                            <h6><span style="text-decoration: line-through; color: #f00">Rs. <?php echo $getPro['product_price'];?></span>  <b>Rs. <?php echo $getPro['selling_price'];?></b></h6>
                            <h4>Description</h4>
                           <?php echo $getPro['product_info'];?>
                            <h4>Specifications</h4>
                            <?php $id = $_GET['proId']; $getProductSpecifications = getDataFromTables('product_specifications','0','product_id',$id,$activeStatus=NULL,$activeTop=NULL);  ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="lnht30">
                                    <?php while  ($getProductSpecifications1 = $getProductSpecifications->fetch_assoc()) { ?>
                                        <div class="col-md-4">                                            
                                            <li><?php echo $getProductSpecifications1['specification_name'];?></li>
                                        </div>  
                                    <?php } ?>                                  
                                    </ul>
                                </div>
                            </div>
                                                        
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Warranty</h4>
                                    <ul class="lnht30">
                                    <div class="col-md-4">
                                        <li><?php echo $getPro['key_features'];?></li>
                                    </div>                                   
                                    </ul>
                                </div>
                            </div>
                            <div class="row mt15">
                                <div class="col-md-12">
                                    <div class="col-md-4 col-sm-4 m-b30">
                              <!-- Trigger the modal with a button -->
                              <?php if(isset($_SESSION['user_login_session_id']) && $_SESSION['user_login_session_id']!='') { ?>
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top: 50px; background-color: #56529c; border: none">Place Order</button>

                              <!-- Modal -->
                              <form method="post" action="save_orders.php">
                              <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                        
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title" style="color:black;text-align:center;">Place Order</h4>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <?php $id = $_SESSION['user_login_session_id']; $sql = "SELECT * FROM users WHERE id = '$id' AND status= 0 ";
                                            $result = $conn->query($sql);
                                            $row = $result->fetch_assoc();
                                        ?>
                                        <div class="form-group">
                                            <label for="form-control-2" class="control-label">Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['user_login_session_name'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-control-2" class="control-label">Email</label>
                                            <input type="text" class="form-control" name="email" value="<?php echo $_SESSION['user_login_session_email'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="user_id" value="<?php echo $_SESSION['user_login_session_id'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="user_email" value="<?php echo $row['user_email'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="user_name" value="<?php echo $row['user_name'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-control-2" class="control-label">Mobile</label>
                                            <input type="text" class="form-control" name="mobile" placeholder="Please Enter Mobile No" maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="address" value="<?php echo $row['user_address'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <?php $id = $_GET['proId']; $getProducts = getDataFromTables('products','0','id',$id,$activeStatus=NULL,$activeTop=NULL); $getPro = $getProducts->fetch_assoc();?>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="product_id" id="product_id" value="<?php echo $getPro['id'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="product_name" value="<?php echo $getPro['product_name'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="product_price" id="product_price" value="<?php echo $getPro['selling_price'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="product_total_price" value="<?php echo $getPro['selling_price'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-control-2" class="control-label">Product Quantity</label>
                                            <input type="number" id="product_quantity" class="form-control" name="product_quantity" min="<?php echo $getPro['minimum_order_quantity'];?>" max="<?php echo $getPro['quantity'];?>" value="<?php echo $getPro['minimum_order_quantity'];?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <?php
                                            $order_total = $getPro['selling_price']*$getPro['minimum_order_quantity'];
                                        ?>
                                        <div class="form-group">
                                            <label for="form-control-2" class="control-label">Order Total</label>
                                            <input type="text" readonly class="form-control" id="order_total" name="order_total" value="<?php echo $order_total;?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">

                                      <button type="submit" class="site-button" value="submit" name="submit">Submit</button>

                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                            <?php } else { ?>
                              <div class="extra-nav">
                                <div class="extra-cell">
                                    <a href="login.php"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background-color: #56529c; border: none">Place Order</button></a>
                                </div>
                              </div>
                            <?php } ?>
                            </div>
                        </div>
                        <div class="clearfix">
                                </div>
                            </div>
                            
                           
                        </div>
                    </div>
                    
                </div>
                <!-- <div class="row bg-white m-b30">
                    <div class="col-md-12">
                        <h4 class="text-center">Related Products</h4>
                    </div>
                    <?php for($i=0; $i<8; $i++) {?>
                   <div class="col-md-3 padd0">
                        <div class="bg-white cat_prdct prdct">
                            <div class="prdct_img">
                                <img src="images/product1.png" class="img-responsive">
                            </div>
                            <div class="content_data">
                                <p>Apple iPhone 8 Plus (64GB)</p>
                                <p><span style="text-decoration: line-through;">Rs. 84000</span> <b>Rs. 73,000</b><span class="pull-right"><a href="" class="site-button padd613">Details</a></span></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                </div> -->
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
<script>
$(document).ready(function(){
            
            $("#example").click(function(){
                $(this).hide();
            });     
        });
        </script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#product_quantity").change(function(){
            var product_price=$("#product_price").val();
            var product_id=$("#product_id").val();
            var product_quantity=$("#product_quantity").val();
            $.ajax({
                  type:"post",
                  url:"get_pricing.php",
                  data:"&product_price="+product_price+"&product_id="+product_id+"&product_quantity="+product_quantity,
                  success:function(result){
                      $('#order_total').val(result);
                  }

                });
        });
    });
</script>
<script type="text/javascript">
function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<div id="loading-area"></div>