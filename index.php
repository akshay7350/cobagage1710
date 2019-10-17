<?php session_start();?>
<?php 
// for fetching into form
include 'db/db.php';
global $id_cob;
$sql_fetch = 'SELECT * FROM tbl_cob';

$retval = mysqli_query($conn,$sql_fetch);

if(! $retval ) {
  die('Could not get data: ' . mysqli_error());
}





?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="ThemeStarz">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="shortcut icon" href="assets/img/logo/691603.png" type="image/x-icon"/>
    <title>Cobagage - Home</title>

</head>
<body>
    <div class="page home-page">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
        <!--*********************************************************************************************************-->
        <header class="hero">
            <div class="hero-wrapper">
                <?php include 'includes/nav.php'?>
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">

                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <!--============ Hero Form ==========================================================================-->
                <form class="hero-form form" method="post" action="">
                    <div class="container">
                        <!--Main Form-->
                        <div class="main-search-form">
                            <div class="form-row">
                             <div class="red mango row col-md-6 col-sm-6">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="from" class="col-form-label">from</label>
                                        <input name="from" type="text" class="form-control small" id="what" placeholder="Enter Location">
                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>

                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="input-location" class="col-form-label">To</label>
                                        <input name="to" type="text" class="form-control small" placeholder="Enter Location">
                                        <span class="input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                    <!--end form-group-->
                                </div>
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-3">
                                <div class="form-group">
                                    <label for="category" class="col-form-label">Category?</label>
                                    <select name="category" id="category" class="small" data-placeholder="Select Category">
                                        <option value="">Select Category</option>
                                        <option value="red">Cobagage</option>
                                        <option value="blue">Article</option>

                                    </select>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-3 col-sm-3">
                                <button type="submit" name="submit1" class="btn btn-primary width-100 small">Search</button>
                            </div>
                            <!--end col-md-3-->
                        </div>
                        <!--end form-row-->
                    </div>
                    <!--end main-search-form-->
                    <!--Alternative Form-->
                    <div class="blue box mango">
                        <div class="wrapper">
                            <div class="form-row">

                                <!--end col-xl-6-->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-row">
                                        <div class="col-md-3 col-sm-3">
                                            <div class="form-group">
                                                <input name="location" type="text" class="form-control small" id="location" placeholder="Location">
                                                <span class="input-group-addon small"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                            </div>

                                            <!--end form-group-->
                                        </div>
                                        <div class="col-md-3 col-sm-3">

                                            <div class="form-group">
                                                <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                                <span class="input-group-addon small">$</span>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-4-->
                                        <div class="col-md-3 col-sm-3">
                                            <div class="form-group">
                                                <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                                <span class="input-group-addon small">$</span>
                                            </div>
                                            <!--end form-group-->
                                        </div>

                                        <!--end col-md-4-->
                                                        <!-- <div class="col-md-4 col-sm-4">
                                                            <div class="form-group">
                                                                <select name="distance" id="distance" class="small" data-placeholder="Distance" >
                                                                    <option value="">Distance</option>
                                                                    <option value="1">1km</option>
                                                                    <option value="2">5km</option>
                                                                    <option value="3">10km</option>
                                                                    <option value="4">50km</option>
                                                                    <option value="5">100km</option>
                                                                </select>
                                                            </div>
                                                          
                                                        </div> -->
                                                        <!--end col-md-3-->
                                                    </div>
                                                    <!--end form-row-->
                                                </div>
                                                <!--end col-xl-6-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </div>
                                    <!--end alternative-search-form-->
                                </div>
                                <!--end container-->
                            </form>
                            <div class="background">
                                <div class="background-image original-size">
                                    <img src="assets/img/sign_back.jpg" alt="">
                                </div>
                                <!--end background-image-->
                            </div>
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
                                <!--============ Section Title===================================================================-->
                                <div class="section-title clearfix">
                                    <div class="float-xl-left float-md-left float-sm-none">
                                        <h2>Recent Listings</h2>
                                    </div>
                                    <div class="float-xl-right float-md-right float-sm-none">

                                        <select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting" >
                                            <option value="">Default Sorting</option>
                                            <option value="1">Newest First</option>
                                            <option value="2">Oldest First</option>
                                            <option value="3">Lowest Price First</option>
                                            <option value="4">Highest Price First</option>
                                        </select>
                                    </div>
                                </div>
                                <!--============ Items ==========================================================================-->
                                <div class="items masonry grid-xl-4-items grid-lg-3-items grid-md-2-items">
                         <?php // while($row = mysqli_fetch_array($retval)) {
                            include 'db/db.php';
                            
                            if (isset($_POST['submit1'])) {
                               $from=$_POST['from'];
                               $to=$_POST['to'];
                               $location=$_POST['location'];
                               $min_price=$_POST['min_price'];
                               $max_price=$_POST['max_price'];
                               if($_POST['category'] == 'red' || $from || $to ) {

                                   $sql3 = "SELECT * FROM tbl_cob join users on tbl_cob.user_id=users.id where pick_up='$from' and drop_up='$to' order by dtime desc";
                               }
                               else if($_POST['category']== 'red'){
                                  /*$sql3 = "SELECT * FROM tbl_cob join users on tbl_cob.user_id=users.id";*/
                              }
                              else if($_POST['category']=='blue' || $location || $min_price || $max_price ){
                                $sql3 = "SELECT * FROM items join users on items.user_id=users.id where items.address='$location' and (price between '$min_price' and '$max_price') order by dtime desc";

                            }


                        }
                        else
                        {
                       // $sql3 = "SELECT * FROM items order by dtime desc";
                            $sql3="SELECT * FROM items
                            LEFT JOIN tbl_cob ON items.id = tbl_cob.id
                            UNION
                            SELECT * FROM items
                            RIGHT JOIN tbl_cob ON items.id = tbl_cob.id";
                        }

                        $retval = mysqli_query($conn,$sql3);

                        if(! $retval ) {
                         die('Could not get data: ' . mysqli_error($conn));
                     }

                     while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {

                         $sql_id_cob = "SELECT id FROM tbl_cob order by  dtime desc";
                         $retval2 = mysqli_query($conn,$sql_id_cob);

                         if(! $retval2 ) {
                             die('Could not get data: ' . mysqli_error($conn));
                         }

                         if($row_cob_id = mysqli_fetch_array($retval2, MYSQLI_ASSOC)) {
                            ?>

                            <div class="item">

                                <div class="wrapper">
                                    <div class="image">
                                        <h3>
                                            <a href="#" class="tag category"><?php
                                            if($row['ad_type']==2){
                                                echo "Cobagaging";
                                            }
                                            else if($row['ad_type']==1){
                                               echo "Article";
                                           }
                                           else{
                                           // echo "Donation";
                                           }
                                           ?></a>

                                           <?php if($row['ad_type']==1){ ?>
                                            <a href="" class="title"><?php echo $row['title']." quantity ".$row['qty'];?></a>
                                        <?php } else if($row['ad_type']==2){?>
                                           <a href="" class="title"><?php echo $row['title']." <br>capacity in kg ".$row['capacity'];?></a>

                                       <?php } ?>

                                   </h3>
                                   <?php 
                                   if($row['ad_type']==2){

                                    ?>
                                    <a href="#" class="image-wrapper background-image">
                                        <img src="assets/img/coback.jpeg" alt="">
                                    </a>
                                <?php } else{?>
                                  <a href="#" class="image-wrapper background-image">
                                    <img src="assets/img/22.png" alt="">
                                </a>

                            <?php } ?>
                        </div>
                        <!--end image-->
                        <h4 class="location">
                            <a href="#">
                                <?php
                                if($row['ad_type']==2){
                                    echo " from: ".$row['pick_up']." to: ".$row['drop_up'];
                                }
                                else if($row['ad_type']==1){
                                   echo $row['address'];
                               }
                               else{
                                            //echo "$ ".$row['price'];
                               }


                               ?>

                           </a>
                       </h4>
                       <div class="price">
                        <?php
                        if($row['ad_type']==2){
                            echo "$ ".$row['charges']."per kg";
                        }
                        else if($row['ad_type']==1){
                           echo "$ ".$row['price'];
                       }
                       else{
                                            //echo "$ ".$row['price'];
                       }
                       ?>
                   </div>
                   <div class="meta">
                    <figure>
                        <i class="fa fa-calendar-o"></i><?php 
                        $timestamp = $row['dtime'];
                        $datetime = explode(" ",$timestamp);
                        $date = $datetime[0];
                        $time = $datetime[1];
                        echo $date;
                        ?>
                    </figure>
                    <figure>
                        <a href="#">
                            <i class="fa fa-user"></i><?php echo $row['fullname'];?>
                        </a>
                    </figure>
                </div>
                <!--end meta-->
                <div class="description">
                    <p><?php echo $row['description'];?></p>
                </div>
                <!--end description-->

                <?php

                if($row['ad_type']==2) { 

                    ?>

                    <a href="cobagaging_ad.php?id=<?php echo $row_cob_id['id']; ?>" class="detail text-caps underline">Detail</a>

                <?php } else if($row['ad_type']==1){?>
                   <a href="article_ad.php?id=<?php echo $row['id'];?>" class="detail text-caps underline">Detail</a>
               <?php } ?>
           </div>
       </div>
       <!--end item-->
   <?php } }?>


</div>
<!--============ End Items ======================================================================-->

<div class="center">
    <a href="#" class="btn btn-primary btn-framed btn-rounded">Load More</a>
</div>
</div>
<!--end container-->
</section>
<!--end block-->
</section>
<!--end content-->
</div>
<!--end page-->

<script src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>-->
<script src="assets/js/selectize.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/icheck.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
