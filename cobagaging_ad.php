<?php session_start();?>
<?php
include 'db/db.php';
global $row_cob_add;
$id=$_GET['id'];
$sql_id_cob = "SELECT * FROM tbl_cob where id='$id'";
$retval2 = mysqli_query($conn,$sql_id_cob);

if(! $retval2 ) {
   die('Could not get data: ' . mysqli_error($conn));
}

$row_cob_add = mysqli_fetch_array($retval2, MYSQLI_ASSOC);



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

       <link rel="shortcut icon" href="assets/img/691603.png" type="image/x-icon"/>
       <title>Cobagage</title>

   </head>
   <body>
    <div class="page sub-page">
        <?php include 'includes/header.php'?>
        







        <!--============ Page Title =========================================================================-->
        <div class="page-title">
            <div class="container clearfix">
                <div class="float-left float-xs-none">
                    <h1>
                        <?php echo $row_cob_add['title'];?>
                       <!--  <span class="tag">Offer</span> -->
                    </h1>
                    <h4 class="location">
                        <a href="#">
                            <?php echo "from ".$row_cob_add['pick_up']." to ".$row_cob_add['drop_up'];?>
                        </a>
                    </h4>
                </div>
                <div class="float-right float-xs-none price">
                    <div class="number">$<?php echo $row_cob_add['charges']." / kg ";?></div>
                    <div class="id opacity-50">
                        <strong>ID: </strong><?php echo $id;?>
                    </div>
                    <div>
                        <a href="messaging.html">
                            <button type="submit"  class="btn btn-primary float-right"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp; Contact User</button>

                        </a>
                    </div>
                </div>
            </div>
            <!--end container-->
        </div>
        <!--============ End Page Title =====================================================================-->




    </header>

    <!--*********************************************************************************************************-->
    <!--************ CONTENT ************************************************************************************-->
    <!--*********************************************************************************************************-->
    <section class="content">
        <section class="block">
            <div class="container">
                <div class="row">
                    <!--============ Listing Detail =============================================================-->
                    <div class="col-md-9">

                        <!--Description-->
                        <section>
                            <h2>Description</h2>
                            <p>
                               <?php echo $row_cob_add['description']; ?>
                            </p>
                        </section>
                        <!--end Description-->
                        <!--Description-->
                        <section>
                            <h2>Instruction</h2>
                            <p>
                               <?php echo $row_cob_add['instruction']; ?>
                            </p>
                        </section>
                        <!--end Description-->
                        <!--Details & Location-->
                        <section>
                            <div class="row">
                                <div class="col-md-4">
                                    <h2>Details</h2>
                                    <dl>
                                        <dt>Start Date</dt>
                                        <dd><?php echo $row_cob_add['s_date']; ?></dd>
                                        <dt>End Date</dt>
                                        <dd><?php echo $row_cob_add['e_date']; ?></dd>
                                        <dt>Type</dt>
                                        <dd>Cobagaging</dd>
                                        
                                       
                                        <dt>Carriage weight</dt>
                                        <dd><?php echo $row_cob_add['capacity']; ?></dd>
                                        <dt>Charges per kg</dt>
                                        <dd><?php echo $row_cob_add['charges']; ?></dd>
                                       
                                    </dl>
                                </div>
                                <div class="col-md-8">
                                    <h2>Location</h2>
                                    <div class="map height-300px" id="map-small"></div>
                                </div>
                            </div>
                        </section>

                        <section>
                            <div class="col-sm-8 offset-sm-2">
                                <div class="row">
                                    <a href="buy_now_cobagage.php?id=<?php echo $id;?>" class="w-100"> <button type="submit" class="btn btn-primary mt-2 w-100"><div id=""></div>Buy Now</button>
                                    </a>
                                </div>
                            </div>
                        </section>
                        <!--end Details and Locations-->

                    </div>
                    <!--============ End Listing Detail =========================================================-->
                    <!--============ Sidebar ====================================================================-->
                    <div class="col-md-3">
                        <aside class="sidebar">

                            <section>
                                <h2>Search Ads</h2>
                                <!--============ Side Bar Search Form ===========================================-->
                                <form class="sidebar-form form">
                                    <div class="form-group">
                                        <label for="what" class="col-form-label">From</label>
                                        <input name="keyword" type="text" class="form-control" id="what" placeholder="What are you looking for?">
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group">
                                        <label for="input-location" class="col-form-label">To</label>
                                        <input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">
                                        <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                    <!--end form-group-->

                                    <button type="submit" class="btn btn-primary width-100">Search</button>

                                    
                                </form>
                                <!--============ End Side Bar Search Form =======================================-->
                            </section>
                        </aside>
                    </div>
                    <!--============ End Sidebar ================================================================-->
                </div>

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
<script src="assets/js/icheck.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/custom.js"></script>

<script>
    var latitude = 51.511971;
    var longitude = -0.137597;
    var markerImage = "assets/img/map-marker.png";
    var mapTheme = "light";
    var mapElement = "map-small";
    simpleMap(latitude, longitude, markerImage, mapTheme, mapElement);
</script>

</body>
</html>
