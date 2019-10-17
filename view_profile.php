<?php session_start();?>
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
	<title>Cobagage</title>

</head>
<body>
    <div class="page sub-page">
     <?php include 'includes/header.php';
           include 'db/db.php';
            $sql = "SELECT * FROM users WHERE username='".$_SESSION['main_session']."' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);?>

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <!-- page title and end header-->
                <div class="page-title">
                    <div class="container">
                        <h1>View Profile</h1>
                    </div>
                   
                </div>
               
                <div class="background"></div>
                
            </div>
        </header>
        <section class="content">
            <section class="block">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                 <a class="nav-link active icon" href="view_profile.php">
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
                                <a class="nav-link icon" href="my_donation.html">
                                        <i class="fa fa-money"></i>My Donation
                                    </a>
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <form class="form" id="profile">
                                <div class="row" id="container_2" >
                                    <div class="col-md-8" id="items_2">
                                      <div class="d-flex">
                                        <h2>Personal Information</h2>
                                        <a href="my_profile.php" class="ml-auto">
        <button type="button" class="btn btn-primary  px-5 py-1 mb-5">Edit</button>                                                    </div>

</a> 
                                        <table class="table table-borderless tab_size p-5">
           
                                            <tbody>
                                              <tr>
                                                <th width="30%">Name</th>
                                                 <th width="5%">:</th>
                                                <td><?php echo $row['gender']." ".$row['fullname']?></td>
                                               
                                              </tr>
                                              <tr>
                                                <th width="30%">Account Type</th>
                                                 <th width="5%">:</th>
                                                <td><?php if($row['type']=='0'){
                                                echo "Particular";} else{
                                                echo "Professional";}?></td>
                                               
                                              </tr>
                                              <th>Passport ID</th>
                                                                            <th width="5%">:</th>
                                                                             <td><?php echo $row['passport']?></td>
                                                                         </tr>
                                                            <tr>
                                               <th>Email ID</th>
                                               <th width="5%">:</th>
                                                <td><?php echo $row['email']?></td>
                                              </tr>
                                              <tr>
                                              <th>Contact Number</th>
                                              <th width="5%">:</th>
                                                <td><?php echo $row['phone']?></td>
                                                    </tr>
                                              <tr>
                                                            <th width="30%">Country</th>
                                                             <th width="5%">:</th>
                                                            <td><?php echo $row['location']?></td>
                                                         
                                                        </tr>
                                              <tr>
                                               <th>Address</th>
                                               <th width="5%">:</th>
                                                <td><?php echo $row['address']?></td>
                                                    </tr>
                                                    <tr>
                                                            <th>City</th>
                                                            <th width="5%">:</th>
                                                             <td><?php echo $row['city']?></td>
                                                         </tr>
                                              <tr>
                                                            <tr>
                                                                    <th>Pin Code</th>
                                                                    <th width="5%">:</th>
                                                                     <td><?php
                                                                      if($row['pincode']!=0){

                                                                      echo $row['pincode'];
                                                                    }


                                                                      ?></td>
                                                                 </tr>
                                                                 <tr>
                                                                        <th>Geo-Location</th>
                                                                        <th width="5%">:</th>
                                                                         <td><iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d121059.63021393058!2d73.81232863395904!3d18.523774953953914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d18.5393152!2d73.8295808!4m5!1s0x3bc2c1810d0860d9%3A0xd3c78616933a74eb!2scyperts%20digital%20solutions!3m2!1d18.518698699999998!2d73.9351373!5e0!3m2!1sen!2sin!4v1568284158670!5m2!1sen!2sin" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe></td>
                                                                     </tr> 
                                                                     <tr>
                                                                            
                                                    
                                                    <tr>
                                                        <th>Video of presentation</th>
                                                            <th width="5%">:</th>
                                                                <td> <iframe width="100%" id="about" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                                                </iframe></td>
                                                        </tr>
                                            </tbody>
                                          </table>
        
                                      
                                       
                                        <div id="result"></div>
                                    </div>
                                    
                                   <?php if(!empty($row['picture'])){?>
                                    <div class="col-md-4" id="logo_2">
                                        <div class="profile-image"><div id="picture_sex" class="image background-image">
                                                <img id="picture" src="<?php echo $row['picture'];?>" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <?php } else{?>
                                       <div class="col-md-4" id="logo_2">
                                        <div class="profile-image"><div id="picture_sex" class="image background-image">
                                                <img id="picture" src="assets/img/user-default.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                  <?php } ?>

                                </div>
                            </form>
                        
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

      <?include 'includes/footer.php'?>
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

</body>
</html>
