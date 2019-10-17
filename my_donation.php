<?php session_start();?>
<?php
     include 'db/db.php';
     $email=$_SESSION['session'];
     $sql = 'SELECT * FROM tbl_donation where email="'.$email.'" ';
  
   $retval = mysqli_query($conn,$sql);
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }

 





?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" >

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user.css">

	 <link rel="shortcut icon" href="assets/img/691603.png" type="image/x-icon"/>
	<title>Cobagage - My Donation</title>

</head>
<body>
    <div class="page sub-page">
        <?php include 'includes/header.php'?>
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>My Donation</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                                                 <a class="nav-link icon" href="view_profile.php">
                                    <i class="fa fa-user"></i>My Profile
                                </a>
                                
                                <a class="nav-link icon" href="my_ads.php">
                                    <i class="fa fa-heart"></i>Ads Listing
                                </a>
                                <a class="nav-link icon" href="my_order.html">
                                    <i class="fa fa-star"></i>My Orders
                                </a>
                                <a class="nav-link icon" href="change_password.php">
                                    <i class="fa fa-recycle"></i>Change Password
                                </a>
                                <a class="nav-link icon" href="sold-items.html">
                                    <i class="fa fa-check"></i>Sold Items
                                </a>
                              <a class="nav-link icon" href="my_cobagage.php">
                                    <i class="fa fa-truck"></i>My Cobagager
                                </a>
                                <a class="nav-link active icon" href="my_donation.php">
                                        <i class="fa fa-money"></i>My Donation
                                    </a>
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <!--============ Section Title===================================================================-->
                            <div class="section-title clearfix">
                                <div class="float-left float-xs-none">
                                    <label class="mr-3 align-text-bottom">Sort by: </label>
                                    <select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting" >
                                        <option value="">Default Sorting</option>
                                        <option value="1">Newest First</option>
                                        <option value="2">Oldest First</option>
                                        <option value="3">Lowest Price First</option>
                                        <option value="4">Highest Price First</option>
                                    </select>

                                </div>
                                <div class="float-right d-xs-none thumbnail-toggle">
                                    <a href="#" class="change-class" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                                        <i class="fa fa-th"></i>
                                    </a>
                                    <a href="#" class="change-class active" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </div>
                            </div>
                            <!--============ Items ==========================================================================-->
                                                       <?php  while($row = mysqli_fetch_array($retval)) {?>

                            <div class="items list compact grid-xl-3-items grid-lg-2-items grid-md-2-items">
                                <div class="item">
                                        <!--<div class="ribbon-featured">Donation</div>-->
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Donation</a>
                                                <a href="#" class="title"><?php echo $row['title'];?></a>
                                               
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#"><?php echo $row['location'];?></a>
                                        </h4>
                                        <div class="price"><?php echo $row['price'];?>$</div>
                                        <div class="admin-controls">
                                            <a href="edit_donation.php?id=<?php echo $row['id'];?>">
                                                <i class="fa fa-pencil"></i>Edit
                                            </a>
                                            <!--<a href="#" class="ad-hide">
                                                <i class="fa fa-eye-slash"></i>Hide
                                            </a>-->
                                             <a href="delete_donation.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this item?');" class="delete-class">
                                                        <i class="fa fa-trash"></i>Remove
                                                    </a>
                                        </div>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p><?php echo $row['description'];?></p>
                                        </div>
                                        <!--end description-->
                                       <!-- <a href="#" class="detail text-caps underline">Detail</a>-->
                                    </div>
                                </div>
                                <!--end item-->
                                

                            </div>
                            <!--end items-->
                            <?php } ?>
                        </div>
                        <!--end col-md-9-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

       <?php include 'includes/footer.php'?>
    </div>
    <!--end page-->

	<script src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
	<script src="assets/js/selectize.min.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/icheck.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/custom.js"></script>
	
		<script>    
        $('.delete-class').click(function(){
            var tr = $(this).closest('tr'),
                del_id = $(this).attr('id');
          
            $.ajax({
                url: 'delete_donation.php',
     type: 'POST',
     data: { id:id },
                
                cache: false,
                success:function(result){
                    tr.fadeOut(1000, function(){
                        $(this).remove();
                    });
                }
            });
        });
</script>w

</body>
</html>
