<?php session_start();?>
<?php 
include 'db/db.php';
global $msg;
global $category_display;
$email=  $_SESSION['session'];
$date = date("Y-m-d H:i:s");
$category_display = mysqli_query($conn,"SELECT * FROM category");


if(isset($_POST['submit1']))
{    
    // $cat = $_POST['cat'];
   $title = $_POST['title'];
   $price = $_POST['price'];
   $sub_cat = $_POST['sub_cat'];
   $qty = $_POST['qty'];
   $slugs = $_POST['slugs'];
   $desc = $_POST['desc'];
   $location = $_POST['location'];

    // $article_file = $_POST['article_file'];


   $sql2 = "SELECT id FROM users where email='".$email."'";
   $result = mysqli_query($conn, $sql2);

   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $user_id=$row['id'];

}


 /*$j = 0;     
    $target_path = "uploads/";    
    $_FILES['file'] = $_FILES['files'];
    for ($i = 0; $i < count($_FILES['file']['name']); $i++) {

        $validextensions = array("jpeg", "jpg", "png");
        $ext = explode('.', basename($_FILES['file']['name'][$i]));   
        $file_extension = end($ext); 
        $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];    
        $j = $j + 1;      
        if (($_FILES["file"]["size"][$i] < 1000000)     
                && in_array($file_extension, $validextensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
 
                echo $j . ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
            } else {       
                echo $j . ').<span id="error">please try again!.</span><br/><br/>';
            }
        } else {    
           echo $j . ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
        }
    
    }*/

    /*multiple file uploads*/
 /*$img1= "uploads/".$_FILES['file']['name'][0];
 $img2= "uploads/".$_FILES['file']['name'][1]; 
 $img3= "uploads/".$_FILES['file']['name'][2]; 
 $img4= "uploads/".$_FILES['file']['name'][3]; 
 $img5= "uploads/".$_FILES['file']['name'][4];
 $img6= "uploads/".$_FILES['file']['name'][5];
 $img7= "uploads/".$_FILES['file']['name'][6]; 
 $img8= "uploads/".$_FILES['file']['name'][7]; 
 $img9= "uploads/".$_FILES['file']['name'][8]; 
 $img10= "uploads/".$_FILES['file']['name'][9];  */ 



 $sql2 = "INSERT INTO items (user_id,email,title,price,sub_cat,qty,slugs,description,address,dtime) 
 VALUES ('$user_id','$email','$title','$price','$sub_cat','$qty','$slugs','$desc','$location','$$date')";
 if (mysqli_query($conn, $sql2)) {
    $msg =  "<div class='alert alert-success' role='alert'>
    Record Updated Successfully.....!
    </div>";
    header( "refresh:3; url=my_ads.php" );
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
   <!--  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js"></script>
    
-->
<title>Cobagage Post Ad</title>

</head>
<body>
    <div class="page sub-page">
     <?php include 'includes/header.php'?>

     <!--*********************************************************************************************************-->
     <!--************ CONTENT ************************************************************************************-->
     <!--*********************************************************************************************************-->


     <!-- page title and end header-->
     <div class="page-title">
        <div class="container">
            <h1>Post Ad</h1>
        </div>

    </div>

    <div class="background"></div>

</div>

</header>

<!--page title and end header -->
<section class="content">
    <section class="block">
        <div class="container">
            <?php echo $msg; ?>

            <section>
                        <!-- <div class="alert alert-warning" role="alert">
                            <h2 class="alert-heading">You don't have an account!</h2>
                            <p>You can submit only 1 ad at a time. To submit more, you need to
                                <a href="sign-in.html" class="link"><strong>Sign In</strong></a> or
                                <a href="register.html" class="link"><strong>Register</strong></a></p>
                            </div> -->
                        </section>


                        <!--end basic information-->
                        <section>
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Post Ads</h2>
                                    <div class="form-group">
                                        <label for="submit-category" class="col-form-label">Category</label>
                                        <select class="change-tab" data-change-tab-target="category-tabs" name="cat" id="submit-category" data-placeholder="Select Category">
                                            <option value="">Select Category</option>
                                            <option value="article">Article</option>
                                            <option value="cobagage">Cobagage</option>
                                            <option value="donation">Donation</option>
                                        </select>
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-8">
                                    <h2>Ad Form</h2>
                                    <!--form 1 -->
                                    <form method="post" action="" enctype='multipart/form-data'>
                                        <div class="form-slides" id="category-tabs">
                                            <div class="form-slide default">
                                                <h3>Please Select a Category</h3>
                                            </div>
                                            <div class="form-slide" id="article">
                                                <h3>Article</h3>

                                                <!--end category-icon-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="title" class="col-form-label required">Title</label>
                                                            <input name="title" name="title" type="text" class="form-control" id="title" placeholder="Title" required="">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-8-->

                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="price" class="col-form-label required">Price</label>
                                                            <input name="price" type="text" class="form-control" id="price" required="">
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
                                                            <input name="slugs" type="number" class="form-control" id="article___slugs">
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                </div>
                                                <!--end row-->

                                                <div class="form-group">
                                                    <label for="article___other_details" class="col-form-label">Description</label>
                                                    <textarea name="desc" id="article___other_details" class="form-control" rows="4"></textarea>
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
                                                <input name="latitude" type="text" class="form-control" id="latitude" hidden>
                                                <input name="longitude" type="text" class="form-control" id="longitude" hidden>
                                                


                                                <section>
                                                    <h2>Gallery</h2>
                                                    <div class="file-upload-previews"></div>
                                                    <div class="file-upload">
                                                        <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                                                        <span><i class="fa fa-plus-circle"></i>Click or drag images here</span>
                                                    </div>
                                                </section> 
                      <!--   <div class="form-group">
    <label for="exampleInputFile">Photos</label>
   <input type="file" class="form-control-file" id="exampleInputFile" name="files[]" aria-describedby="fileHelp" accept="image/gif, image/jpeg, image/png" multiple>

    <small id="fileHelp" class="form-text text-muted">Maximum of 5 photos.</small>
</div> -->
<section class="clearfix">
    <div class="form-group">

        <button type="submit" name="submit1" id="submit1" class="btn btn-primary large icon float-right">Submit</button>

    </div>
</section>

</div>
</form>
<!--end form 1 -->
<!--end article.form-slide-->
<!-- start form 2-->
<form  method="post" action="ad_cob.php">

    <div class="form-slide" id="cobagage">
        <h3>Cobagage</h3>
        <figure class="category-icon">
            <img src="assets/icons/cobagage.png" alt="">
        </figure>
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
        <!--end row-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="pick_up_location" class="col-form-label required">Pick up location</label>
                    <input name="pick_up" type="text" class="form-control" id="pick_up_location" placeholder="Enter pick up location" required="">
                </div>
                <!--end form-group-->
            </div>
            <!--end col-md-8-->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="delivery_location" class="col-form-label required">Delivery location</label>
                    <input name="drop_up" type="text" class="form-control" id="delivery_location" placeholder="Enter pick up location" required="">
                </div>
                <!--end form-group-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="start_date" class="col-form-label required">Start Date</label>
                    <!--old input name start date=s_date and end date =end_date -->
                    <input  name="startDate" id="startDate" type="text" class="form-control"  placeholder="Enter date" required="">
                </div>
                <!--end form-group-->
            </div>
            <!--end col-md-8-->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="end_date" class="col-form-label required">End Date</label>
                    <input id="endDate" name="endDate" type="text" class="form-control" placeholder="Enter date" required="">
                </div>
                <!--end form-group-->
            </div>
        </div>

        <div class="row">


            <!--end col-md-3-->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cobagage___weight" class="col-form-label">Carriage Capacity</label>
                    <input name="capacity" type="text" class="form-control" id="cobagage___weight">
                    <span class="input-group-addon">kg</span>
                </div>
                <!--end form-group-->
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="charges" class="col-form-label">Charges per Kg</label>
                    <input name="charges" type="text" class="form-control" id="charges">
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
                    <textarea name="instruction" id="packaging_instruction" class="form-control" rows="4"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="article___other_details" class="col-form-label">Description</label>
                    <textarea name="description" id="article___other_details" class="form-control" rows="4"></textarea>
                </div>
            </div>
        </div>
        <!--end row-->
        <section class="clearfix">
            <div class="form-group">

                <button type="submit" name="submit" id="submit" class="btn btn-primary large icon float-right">Submit</button>

            </div>
        </section>
    </div>
    <!--end cobagage.form-slide-->
</form>


<form method="post" action="">
    <div class="form-slide" id="donation">
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
                    <input name="price" type="text" class="form-control" id="price" required="">
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
        <input name="latitude" type="text" class="form-control" id="latitude" hidden>
        <input name="longitude" type="text" class="form-control" id="longitude" hidden>


        <br>
        <section>
            <div class="form-group">
                <div class="profile-image">
                    <div class="image background-image rounded-0" style="background-image: url(&quot;assets/img/author-09.jpg&quot;);">
                        <img src="assets/img/author-09.jpg" alt="">
                    </div>
                    <div class="single-file-input">
                        <input type="file" id="user_image" name="user_image">
                        <div class="btn btn-framed btn-primary small">Upload Image</div>
                    </div>
                </div>
            </div>
        </section>

  <section class="clearfix">
            <div class="form-group">

                <button type="submit" name="submit_cob" id="submit_cob" class="btn btn-primary large icon float-right">Submit</button>

            </div>
        </section>
    </div>

   
</div>

<!--end form-slides-->
</form>




<!--end 2 form -->
</div>
<!--end col-md-8-->

</div>
<!--end row-->

</section>




                        <!-- <section class="clearfix">
                            <div class="form-group">
                                
                                <button type="submit" name="submit" class="btn btn-primary large icon float-right">Submit</button>
                                
                            </div>
                        </section> -->

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
           $('#submit').click(function() {
            $.ajax({
                url: 'ad_cob.php',
                type: 'POST',
                data: {
                    title:title,
                    pick_up:pick_up,
                    drop_up:drop_up,
                    s_date:s_date,
                    e_date:e_date,
                    capacity:capacity,
                    charges:charges,
                    instruction:instruction,
                    description:description
                },
                success: function(msg) {
                    alert('Ad added successfully');
                }               
            });
        });
    </script>

     <script>
           $('#submit_cob').click(function() {
            $.ajax({
                url: 'ad_art.php',
                type: 'POST',
                data: {
                    title:title,
                    price:price,
                    sub_cat:sub_cat,
                    qty:qty,
                    slugs:slugs,
                    description:description,
                    location:location,
                    
                },
                success: function(msg) {
                    alert('Ad added successfully');
                }               
            });
        });
    </script>

    <script>
        var latitude = 51.511971;
        var longitude = -0.137597;
        var markerImage = "assets/img/map-marker.png";
        var mapTheme = "light";
        var mapElement = "map-submit";
        var markerDrag = true;
        simpleMap(latitude, longitude, markerImage, mapTheme, mapElement, markerDrag);
    </script>
    <script>

    </script>

</body>
</html>
