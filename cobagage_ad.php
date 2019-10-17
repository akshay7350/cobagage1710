
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
      <?include 'includes/header.php'?>

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
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit
                                    amet fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                    per inceptos himenaeos. Vestibulum tincidunt, sapien sagittis sollicitudin dapibus,
                                    risus mi euismod elit, in dictum justo lacus sit amet dui. Sed faucibus vitae nisl
                                    at dignissim.
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
                                                <dd>05.04.2017</dd>
                                                <dt>End Date</dt>
                                                <dd>05.04.2017</dd>
                                                <dt>Type</dt>
                                                <dd>Offer</dd>
                                                <dt>Status</dt>
                                                <dd>Complete</dd>
                                                <dt>First Owner</dt>
                                                <dd>Yes</dd>
                                                <dt>Carriage weight</dt>
                                                <dd>50 Kg</dd>
                                                <dt>Color</dt>
                                                <dd>White, Grey</dd>
                                                <dt>Height</dt>
                                                <dd>47cm</dd>
                                                <dt>Width</dt>
                                                <dd>203cm</dd>
                                                <dt>Length</dt>
                                                <dd>54cm</dd>
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
<a href="buy_now_cobagage.html" class="w-100"> <button type="submit" class="btn btn-primary mt-2 w-100"><div id=""></div>Buy Now</button>
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

        
        <?php include 'footer.php'?>
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
