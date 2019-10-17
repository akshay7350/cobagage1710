<?php session_start();?>
<?php
     include 'db/db.php';
      global $msg;
             $email=  $_SESSION['session'];
             $category_display = mysqli_query($conn,"SELECT * FROM category");


             if(isset($_POST['submit1']))
{    
    // $cat = $_POST['cat'];
     $title = $_POST['title'];
     $price = $_POST['price'];
     $sub_cat = $_POST['sub_cat'];
      $qty = $_POST['qty'];
     $slugs = $_POST['slugs'];
     $desc = $_POST['description'];
      $location = $_POST['location'];
      
    // $article_file = $_POST['article_file'];
    

$sql2 = "SELECT id FROM users where email='".$email."'";
$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $user_id=$row['id'];
       
 }
   /*files upload*/
   
   /*files upload*/
 
    /*foreach ($_FILES['files']['tmp_name'] as $key => $val ) {

        $fileName = $_FILES['files']['name'][$key];
        $filesize = $_FILES['files']['size'][$key];
        $filetempname = $_FILES['files']['tmp_name'][$key];

        $fileext = pathinfo($fileName, PATHINFO_EXTENSION);
        $fileext = strtolower($fileext);*/
$sql2 = "INSERT INTO tbl_donation (user_id,email,title,price,category,qty,slugs,description,location,gallery) 
            VALUES ('$user_id','$email','$title','$price','$sub_cat','$qty','$slugs','$desc','$location','$fileext')";
        // here your insert query
    

     
     if (mysqli_query($conn, $sql2)) {
        $msg =  "<div class='alert alert-success' role='alert'>
  Record Updated Successfully.....!
</div>";
header( "refresh:3; url=my_donation.php" );
     } 
     else{
      echo("Error description: " . mysqli_error($conn));

     }
      
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
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user.css">

	<title>Cobagage - Donate</title>

</head>
<body>
    <div class="page sub-page">
        <?php include 'includes/header.php'?>
        
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Donate Article Now</h1>
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
                    <?php echo $msg;?>
                    <section>
                    
                    </section>
                    <form class="form form-submit" method="post" action="">
                           <section>
                                <div>
                                        <h3>Donation</h3>
                                        
                                        <!--end category-icon-->
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title" class="col-form-label required">Title</label>
                                                        <input name="title" type="text" class="form-control" id="title" placeholder="Title" required="">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                              
                                            </div>

                                        <div class="row">
                                            
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="price" class="col-form-label required">Price</label>
                                                                <input name="price" type="text" class="form-control" value="0" id="price" required="" readonly>
                                                                <span class="input-group-addon">$</span>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>

                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <label for="article___processor" class="col-form-label">Ads Category</label>
                                                                       <select name="sub_cat" id="article___processor" data-placeholder="Select Processor">
                                                                                <option value="">Select ads category</option>
                                                                               <?php  while($row_category=mysqli_fetch_array($category_display))
                                                                                  { ?>
                                                                                <option value="<?php echo $row_category['id'];?>">
                                                                                    <?php echo $row_category['ctg_name'];?>
                                                                                </option>
                                                                                <?php } ?>
                                                                                
                                                                            </select>
                                                                    </div>
                                                                <!--end form-group-->
                                                            </div>
                                        </div>
                                        <div class="row">
                                      
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="article___quantity" class="col-form-label">Quantity</label>
                                                    <input name="qty" type="number" class="form-control" id="article___quantity">
                                                </div>
                                                <!--end form-group-->
                                            </div>

                                            <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="article___slugs" class="col-form-label">Slugs</label>
                                                        <input name="slugs" type="text" class="form-control" id="article___slugs">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->

                                        <div class="form-group">
                                            <label for="article___other_details" class="col-form-label">Description</label>
                                            <textarea name="description" id="article___other_details" class="form-control" rows="4"></textarea>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                                <label for="input-location" class="col-form-label">Location</label>
                                                <input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">
                                                <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                            <!--end form-group-->
                                            <label>Map</label>
                                            <div class="map height-400px" id="map-submit"></div>
                                            <input name="latitude" type="lat" class="form-control" id="latitude" hidden>
                                            <input name="longitude" type="lon" class="form-control" id="longitude" hidden>
                                            


                                            <section>
                            <!--<h2>Gallery</h2>
                            <div class="file-upload-previews"></div>
                            <div class="file-upload">
                                <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                                <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                            </div>-->
                            <!--Select Image Files to Upload:
    <input type="file" name="files[]" multiple >-->
                        </section> 
                                    </div>
                           </section>
    
                            <section class="clearfix">
                                <div class="form-group">
                                    <button type="submit" name="submit1" class="btn btn-primary icon float-right">Save</button>
                                </div>
                            </section>
                        </form>
                    <!--end form-submit-->
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
	<!--<script src="assets/js/jquery.validate.min.js"></script>-->
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
	<script src="assets/js/jquery-validate.bootstrap-tooltip.min.js"></script>
	<script src="assets/js/jQuery.MultiFile.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/custom.js"></script>

    <script>
        var latitude = 51.511971;
        var longitude = -0.137597;
        var markerImage = "assets/img/map-marker.png";
        var mapTheme = "light";
        var mapElement = "map-submit";
        var markerDrag = true;
        simpleMap(latitude, longitude, markerImage, mapTheme, mapElement, markerDrag);
    </script>

</body>
</html>
