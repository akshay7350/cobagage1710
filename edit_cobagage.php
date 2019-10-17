<?php session_start();
include 'db/db.php';
$id=$_GET['id'];
 
 // for fetching into form
 $sql_edit_cob = 'SELECT * FROM tbl_cob where username="'.$_SESSION['main_session'].'" and id="'.$id.'" ';
  
   $retval = mysqli_query($conn,$sql_edit_cob);
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }
   
   //for updating details into form
   
             global $msg;
  //cobagage form coding

  if(isset($_POST['submit']))
{    
    // $cat = $_POST['cat'];
     $title = $_POST['title'];
     $pick_up = $_POST['pick_up'];
     $drop_up = $_POST['drop_up'];
      $s_date = $_POST['s_date'];
     $e_date = $_POST['e_date'];
     $capacity = $_POST['capacity'];
      $charges = $_POST['charges'];
       $instruction = $_POST['instruction'];
      $description = $_POST['description'];
    // $article_file = $_POST['article_file'];
    

    $email=  $_SESSION['session'];
    

     $sql2 = "UPDATE tbl_cob SET title='$title',pick_up='$pick_up',drop_up='$drop_up',s_date='$s_date',e_date='$e_date',capacity='$capacity',charges='$charges',instruction='$instruction',description='$description' where id='$id' and email='$email'";
     if (mysqli_query($conn, $sql2)) {
         
        $msg =  "<div class='alert alert-success' role='alert'>
  Record Updated Successfully.....!
</div>";
        
        header( "refresh:2; url=my_cobagage.php" ); 


     } 
     else{
      echo("Error description: " . mysqli_error($conn));

     }
      
  }

  else{
   // echo("Error description: " . mysqli_error($conn));
  }



?>

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
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user.css">

	<title>Cobagage - Edit Cobagage</title>

</head>
<body>
    <div class="page sub-page">
        <?php include 'includes/header.php'?>
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Edit Cobagage Ad</h1>
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
                    <?php  $row = mysqli_fetch_array($retval); {?>
                    <form class="form form-submit" method="post" action="">
                           <section>
                                <div>
                                        <h3>Cobagage</h3>
                                       
                                        <!--end category-icon-->
                                        <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="title" class="col-form-label required">Title</label>
                                                        <input name="title" type="text" value="<?php echo $row['title'];?>" class="form-control" id="title" placeholder="Title" required="">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                              
                                            </div>
                                        <!--end row-->
                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="pick_up" class="col-form-label required">Pick up location</label>
                                                        <input name="pick_up" type="text" class="form-control" value="<?php echo $row['pick_up'];?>" id="pick_up_location" placeholder="Enter pick up location" required="">
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                                <label for="delivery_location" class="col-form-label required">Delivery location</label>
                                                                <input name="drop_up" type="text" class="form-control" value="<?php echo $row['drop_up'];?>" id="delivery_location" placeholder="Enter pick up location" required="">
                                                            </div>
                                                        <!--end form-group-->
                                                    </div>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="s_date" class="col-form-label required">Start Date</label>
                                                            <input name="s_date" type="date" class="form-control" value="<?php echo $row['s_date'];?>" id="start_date" placeholder="Enter date" required="">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-8-->
                                                    <div class="col-md-6">
                                                            <div class="form-group">
                                                                    <label for="e_date" class="col-form-label required">End Date</label>
                                                                    <input name="e_date" type="date" class="form-control" value="<?php echo $row['e_date'];?>" id="end_date" placeholder="Enter date" required="">
                                                                </div>
                                                            <!--end form-group-->
                                                        </div>
                                                </div>
                                        
                                        <div class="row">
                                           
                                            
                                            <!--end col-md-3-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cobagage___weight" class="col-form-label">Carriage Capacity</label>
                                                    <input name="capacity" type="text" class="form-control" value="<?php echo $row['capacity'];?>" id="cobagage___weight">
                                                    <span class="input-group-addon">kg</span>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="charges" class="col-form-label">Charges per Kg</label>
                                                        <input name="charges" type="text" value="<?php echo $row['charges'];?>" class="form-control" id="charges">
                                                        <span class="input-group-addon">$</span>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                            <!--end col-md-3-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="packaging_instruction" class="col-form-label">Packaging Instruction</label>
                                                    <textarea name="instruction" id="packaging_instruction" value="" class="form-control" rows="4"><?php echo $row['instruction'];?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="article___other_details" class="col-form-label">Description</label>
                                                    <textarea name="description" id="article___other_details" value="" class="form-control" rows="4"><?php echo $row['description'];?></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                           </section>
    
                            <section class="clearfix">
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-primary icon float-right">Save</button>
                                </div>
                            </section>
                        </form>
                    <!--end form-submit-->
                    <?php } ?>
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
