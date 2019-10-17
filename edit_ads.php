<?php session_start();?>
<?php
     include 'db/db.php';
     $id=$_GET['id'];
 $email=  $_SESSION['session'];
 // for fetching into form
 $cat_query="SELECT * FROM category";
 $retval_cat = mysqli_query($conn,$cat_query);
 
 $sql_edit_ads = 'SELECT * FROM items where email="'.$email.'" and id="'.$id.'" ';
  
   $retval = mysqli_query($conn,$sql_edit_ads);
   
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error($conn));
   }
   
   //for updating details into form
   
             global $msg;
  //cobagage form coding

  if(isset($_POST['submit']))
{    
    // $cat = $_POST['cat'];
     $title = $_POST['title'];
     $price = $_POST['price'];
     $cat = $_POST['cat'];
      $qty = $_POST['qty'];
     $slugs = $_POST['slugs'];
       $location = $_POST['location'];
      $description = $_POST['description'];
    // $article_file = $_POST['article_file'];
    

    
    

     $sql2 = "UPDATE items SET title='$title',price='$price',category='$cat',qty='$qty',slugs='$slugs',address='$location', description='$description' where id='$id' and email='$email'";
     if (mysqli_query($conn, $sql2)) {
         
        $msg =  "<div class='alert alert-success' role='alert'>
  Record Updated Successfully.....!
</div>";
        
        header( "refresh:2; url=my_ads.php" ); 


     } 
     else{
      echo("Error description: " . mysqli_error($conn));

     }
      
  }

  else{
   // echo("Error description: " . mysqli_error($conn));
  }



     


?>
<doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user.css">

	<title>Cobagage - Edit Ads</title>

</head>
<body>
    <div class="page sub-page">
<?php include 'includes/header.php'?>
 <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Edit Ads</h1>
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
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    <?php echo $msg;?>
                    <section>
                    
                    </section>
                     <?php  $row = mysqli_fetch_array($retval); {?>
                    <form class="form form-submit" method="post" action="">
                           <section>
                                <div>
                                        <h3>Edit Article</h3>
                                        
                                        <!--end category-icon-->
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title" class="col-form-label required">Title</label>
                                                        <input name="title" type="text" class="form-control" value="<?php echo $row['title'];?>" id="title" placeholder="Title" required="">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                              
                                            </div>

                                        <div class="row">
                                            
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="price" class="col-form-label required">Price</label>
                                                                <input name="price" type="number" class="form-control" value="<?php echo $row['price'];?>" id="price" required="">
                                                                <span class="input-group-addon">$</span>
                                                            </div>
                                                            <!--end form-group-->
                                                        </div>

                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                                        <label for="article___processor" class="col-form-label">Ads Category</label>
                                                                        <select name="cat" id="article___processor" data-placeholder="Select Processor">
                                                                            
                                                                            <option value="">Select ads category</option>
                                                                                    
                                                                            <!--<option value=""><?php echo $row2['ctg_name']; ?></option>-->
                                   <?php
                                   include 'db/db.php';
                                   $s="select * from category";
                                         $q=mysqli_query($conn,$s) or die($s);
                                     while($rw=mysqli_fetch_array($q))
                                    { ?>
                                    <option value="<?php echo $rw['ctg_name']; ?>" <?php if($row['category']                                    ==$rw['ctg_name']) echo 'selected="selected"'; ?>><?php echo                                     $rw['ctg_name']; ?></option>
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
                                                    <input name="qty" type="number" value="<?php echo $row['qty'];?>" class="form-control" id="article___quantity">
                                                </div>
                                                <!--end form-group-->
                                            </div>

                                            <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label for="article___slugs" class="col-form-label">Slugs</label>
                                                        <input name="slugs" type="text" value="<?php echo $row['slugs'];?>" class="form-control" id="article___slugs">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                            <!--end col-md-4-->
                                        </div>
                                        <!--end row-->

                                        <div class="form-group">
                                            <label for="article___other_details" class="col-form-label">Description</label>
                                            <textarea name="description" id="article___other_details" class="form-control" rows="4"><?php echo $row['description'];?></textarea>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                                <label for="input-location" class="col-form-label">Location</label>
                                                <input name="location" type="text" class="form-control" id="input-location" value="<?php echo $row['address'];?>" placeholder="Enter Location">
                                                <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                            <!--end form-group-->
                                            <label>Map</label>
                                            <div class="map height-400px" id="map-submit"></div>
                                            <input name="latitude" type="text" class="form-control" id="latitude" hidden>
                                            <input name="longitude" type="text" class="form-control" id="longitude" hidden>
                                            


                                            <section>
                                                    <h2>Gallery</h2>
                                                    <div class="file-upload-previews"></div>
                                                    <div class="file-upload">
                                                        <div class="MultiFile-wrap" id="MultiFile1"><input type="file" name="files[]" class="file-upload-input with-preview MultiFile-applied" multiple="" title="Click to add files" maxlength="10" accept="gif|jpg|png" id="MultiFile1" value=""></div>
                                                        <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                                                    </div>
                                                </section>
                                    </div>
                           </section>
    
                            <section class="clearfix">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary icon float-right">Save</button>
                                </div>
                            </section>
                        </form>
                        <?php } ?>
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
