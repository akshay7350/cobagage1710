<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user.css">

	<title>Cobagage My Profile</title>

</head>
<body>
    <div class="page sub-page">
        <?php
    
    include("includes/header.php");
   include("db/db.php");
  
 $country_display = mysqli_query($conn,"SELECT * FROM tbl_countries");


   global $msg;
   global $picture;
  
      
     // echo $picture;
       
      
      $sql = "SELECT * FROM users WHERE username='".$_SESSION['main_session']."' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
     
      if(isset($_POST['submit']))
{    
     $title = $_POST['title'];
     $name = $_POST['name'];
     $location = $_POST['country'];
    // $about = $_POST['about'];
      $phone = $_POST['phone'];
     $email = $_POST['email'];
      $passport = $_POST['passport'];
        $address = $_POST['address'];
     $city = $_POST['city'];
      $pincode = $_POST['pincode'];
      $type=$_POST['type'];
    // $user_image = $_POST['user_image'];

    $target = "uploads/";
$target = $target . basename( $_FILES['user_image']['name']) ;
$ok=1;


$types = array('image/jpeg', 'image/gif', 'image/png');

if (in_array($_FILES['user_image']['type'], $types)) {

} else {
$ok=0;
} 


if ($ok==0){
$msg= "Sorry your file was not uploaded. It may be the wrong filetype. We only allow JPG, GIF, and PNG filetypes.";
}



if(move_uploaded_file($_FILES['user_image']['tmp_name'], $target)){


}

    if ((!($_FILES['user_image']['name']))) /* If there Is No file Selected*/ {
        $sql2 = "UPDATE users SET gender = '$title',fullname ='$name',location ='$location',phone ='$phone',type='$type',email ='$email', passport='$passport',address='$address',city='$city' ,pincode='$pincode' WHERE username='".$_SESSION['main_session']."' ;";
    } else /* If file is  Selected*/ {
        $sql2 = "UPDATE users SET gender = '$title',fullname ='$name',location ='$location',phone ='$phone',type='$type',email ='$email',picture='$target', passport='$passport',address='$address',city='$city' ,pincode='$pincode' WHERE username='".$_SESSION['main_session']."' ;";

    }   

     
     if (mysqli_query($conn, $sql2)) {
        /*$msg =  "<div class='alert alert-success' role='alert'>
  Record Updated Successfully.....! 
</div>";*/
echo "<script>alert('Record Update Successfully...!');
window.location.href = 'view_profile.php';</script>";
     } else {
        echo("Error description: " . mysqli_error($conn));
     }
     
      
}
else{

}       
   
   
   ?>
          
         <!-- page title and end header-->
                <div class="page-title">
                    <div class="container">
                        <h1>My Profile</h1>
                    </div>
                   
                </div>
               
                <div class="background"></div>
                
            </div>
           
        </header>
        <section class="content">
            <section class="block">
                <div class="container">
                    <?php echo $msg;?>
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
                                <a class="nav-link icon" href="my_donation.php">
                                        <i class="fa fa-money"></i>My Donation
                                    </a>
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <form class="form" method="post" action="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Personal Information</h2>
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label id="sex" for="gender" class="col-form-label required">I am</label>
                                                        <select name="title" id="gender" data-placeholder="Gender">
                                                            <option value="">Select Sex</option><option id="mr" value="Mr.">Mr</option>
                                                            <option id="mrs" value="Mrs.">Mrs</option>
                                                            <option id="miss" value="Miss.">Miss</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label id="name" for="fullname" class="col-form-label required">Full Name</label>
                                                        <input name="name" id="fullname_f" type="text" class="form-control" placeholder="Your Full Name" value="<?php echo $row['fullname'];?>">
                                                        <span class="input-group-addon"><i id="fullname_c" class="fa fa-user"></i></span>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            <section>
                                            
                                                    <div class="form-group" id="type">
                                <label for="type" class="required">Account Type</label>
                                <figure>
                                    <label class="framed">
                                        <input type="radio" name="type" value="1" <?php echo ($row['type']=='0')?'checked':'' ?> required>
                                        Particular
                                    </label>
                                    <label class="framed">
                                        <input type="radio" name="type" value="2" <?php echo ($row['type']=='1')?'checked':'' ?> required>
                                        Professional
                                    </label>
                                </figure>
                            </div>
                                                    
                                                   
                                                    <div class="form-group">
                                                        <label for="phone" class="col-form-label">Contact Number</label>
                                                        <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $row['phone']?>" placeholder="Your Phone" value="">
                                                        <!-- <span class="input-group-addon">x xxx xxx xx xx</span> -->
                                                    </div><label>
                                                        <input type="checkbox" name="emp_phone" value="1"> You can hide your phone number everywhere
                                                    </label>
                                                    <div class="form-group">
                                                        <label for="email" class="col-form-label">Email</label>
                                                        <input name="email" type="email" class="form-control" id="email" value="<?php echo $row['email']?>" placeholder="Your Email" value="">
                                                       <!--  <span class="input-group-addon"><i class="fa fa-envelope"></i></span> -->
                                                    </div><label>
                                                        <input type="checkbox" name="emp_email" value="1"> You can hide your email address everywhere
                                                    </label>
                                                    <div class="form-group">
                                                        <label for="passport" class="col-form-label">Passport Id</label>
                                                        <input name="passport" type="text" class="form-control" id="passport" value="<?php echo $row['passport'];?>" placeholder="Your Passport Id" value="">
                                                        <!-- <span class="input-group-addon"><i class="fa fa-newspaper-o"></i></span> -->
                                                    </div><label>
                                                        <input type="checkbox" name="emp_phone" value="1"> You can hide your passport id everywhere
                                                    </label>
                                                </section>
                                            <section>
                                            
                                              <div class="form-group">
                                                                             <label for="country" class="col-form-label required">Country Name</label>
                                            <select name="country" type="text"  id="country" >
                                             <option value="">Select Country</option>
                                             <?php
                                   include 'db/db.php';
                                   $s="select * from tbl_countries";
                                         $q=mysqli_query($conn,$s) or die($s);
                                     while($rw=mysqli_fetch_array($q))
                                    { ?>
                                    <option value="<?php echo $rw['country_name']; ?>" <?php if($row['location'] ==$rw['country_name']) echo 'selected="selected"'; ?>><?php echo $rw['country_name']; ?></option>
                                    <?php } ?>
                                            </select>
                                                                        </div>
                                            <div class="form-group">
                                                <label for="input-location" class="col-form-label">Address</label>
                                                <input name="address" type="text" class="form-control" id="input-locations" value="<?php echo $row['address'];?>" placeholder="Enter Address" value="">
                                                <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-location" class="col-form-label">City</label>
                                                <input name="city" type="text" class="form-control" id="input-city" value="<?php echo $row['city'];?>" placeholder="Enter City" value="">
                                                <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="city"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="input-location" class="col-form-label">Pincode</label>
                                                <input name="pincode" type="number" class="form-control" id="input-city" value="<?php echo $row['pincode'];?>" placeholder="Enter Pincode" value="">
                                                <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Pincode"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                            
                                               <!--  <div class="slidecontainer">
                                                    <label for="myrange_4" class="col-form-label">Map Affinity</label>
                                                    <input type="range" min="2" max="12" value="8" name="myrange_4" class="slider" id="myRange4">
                                                    <p>Size: <span id="style4"></span></p>
                                                </div>
                                            
                                                <label>Map</label>
                                            <div class="map height-200px" id="map-pro"></div>
                                                <input name="latitude" value="" type="text" class="form-control" id="latitude" hidden>
                                                <input name="longitude" value="" type="text" class="form-control" id="longitude" hidden>
                                             -->
                                            </section>
                                            <!-- 
                                            <div class="form-group">
                                                <label for="about" class="col-form-label">Video of presentation</label>
                                               <iframe width="100%" id="about" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                                                </iframe>
                                            </div>
                                             -->
                                        </section>
        
                                      
        
                                        <section class="clearfix">
                                            <button type="submit" name="submit" class="btn btn-primary float-right">Save Changes</button>
                                        </section>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <div class="profile-image"><div id="picture_sex" class="image background-image">
                                                <img id="picture" src="<?php $picture=$row['picture'];
                                                echo $picture; ?>" alt="">
                                            </div><div class="single-file-input">
                                                <?php 
                                                $pics=$row['picture'];
                                                $myFile = pathinfo($pics); 
  
     
                                          
                                                
                                                ?>
                                                <input type="file" id="user_image" name="user_image" value="<?php $picture=$row['picture'];
                                                echo $picture;?>">
                                                <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                            </div>
                                        </div>
                                    </div>
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

</body>
</html>
