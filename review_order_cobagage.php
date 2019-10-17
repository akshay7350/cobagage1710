<?php session_start();?>
<?php
include 'db/db.php';
$id=$_GET['id'];
$sql_id_cob = "SELECT * FROM tbl_cob where id='$id'";
$retval2 = mysqli_query($conn,$sql_id_cob);

if(! $retval2 ) {
   die('Could not get data: ' . mysqli_error($conn));
}

$row_order_review = mysqli_fetch_array($retval2, MYSQLI_ASSOC);

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

	<title>Buy Now</title>

</head>
<body>
    <div class="page sub-page">
     <?php include 'includes/header.php'?>
 





 
  <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Review  Order</h1>
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
                        <div class="col-sm-7 bg-ligg">
                                <div class="row">
                          <div class="col-sm-3">
                                 <div class="pt-3">
                                  <b>Title</b> 
                                 </div>
                               </div>
             
                            <div class="col-sm-9"> 
                               <div class="pt-3">
                                 <?php echo $row_order_review['title'];?>
                               </div>
                             </div>
                             </div>
                             <div class="row">
                                <div class="col-sm-3">
                                       <div class="pt-3">
                                        <b>From</b> 
                                       </div>
                                     </div>
                   
                                  <div class="col-sm-9"> 
                                     <div class="pt-3">
                                       <?php echo $row_order_review['pick_up'];?>
                                    </div>
                                   </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                       <div class="pt-3">
                                        <b>To</b>
                                       </div>
                                     </div>
                   
                                  <div class="col-sm-9"> 
                                     <div class="pt-3">
                                        <?php echo $row_order_review['drop_up'];?>
                                    </div>
                                   </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                       <div class="pt-3">
                                        <b>Start  Date</b> 
                                       </div>
                                     </div>
                   
                                  <div class="col-sm-9"> 
                                     <div class="pt-3">
                                       <?php echo $row_order_review['s_date'];?>
                                    </div>
                                   </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                       <div class="pt-3">
                                        <b>End  Date</b> 
                                       </div>
                                     </div>
                   
                                  <div class="col-sm-9"> 
                                     <div class="pt-3">
                                    <?php echo $row_order_review['e_date'];?>
                                    </div>
                                   </div>
                            </div>

                           

                            
                        </div>
                        <div class="col-lg-5">
                            <div class="your-order">
                                <h3>Your order</h3>
                                <div class="your-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="cart-product-name">Cobagaging</th>
                                                <th class="cart-product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="cart-product-name"> <?php echo $row_order_review['title'];?><strong class="product-quantity">
                                                × 1</strong></td>
                                                <td class="cart-product-total"><span class="amount">$<?php echo $row_order_review['charges'];?></span></td>
                                            </tr>
                                            <tr class="cart_item">
                                                <td class="cart-product-name"> Site charges<strong class="product-quantity">
                                                × 1</strong></td>
                                                <td class="cart-product-total"><span class="amount">£165.00</span></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">£215.00</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">£215.00</span></strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                       
                                        <div class="order-button-payment">
<a href="success.html">
    <input class="btn btn-primary m-2 w-100  mx-auto d-block" class="" value="Place order" type="submit">
    

</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
