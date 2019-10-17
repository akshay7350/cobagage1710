<?php session_start();?>
<?php
//current_password
//new_password
//repeat_password
           include  'db/db.php';
           global $message;
           if (count($_POST) > 0) {
               $new_password=$_POST["new_password"];
               if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $new_password)) {
    $message= "<div class='alert alert-danger' role='alert'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</div>";
}
else{
    $result = mysqli_query($conn, "SELECT * from users WHERE email='" . $_SESSION["session"] . "'");
    $row = mysqli_fetch_array($result);
    if (md5($_POST["current_password"]) == $row["password"]) {
        mysqli_query($conn, "UPDATE users set password='" . md5($new_password) . "' WHERE email='" . $_SESSION["session"] . "'");
        $message = "<div class='alert alert-success' role='alert'>
  Password Changed successfully!
</div>";
header( "refresh:3; url=logout.php" );




    } else
        $message = " <div class='alert alert-danger' role='alert'>
  Current Password is not correct!
</div>";


}



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

	<title>Cobagage - Change Password</title>

</head>
<body>
    <div class="page sub-page">
       
       <?php include 'includes/header.php'?>
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Change Password</h1>
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
                     <div class="message" id="message"><?php if(isset($message)) { echo $message; } ?></div>
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
                                <a class="nav-link active icon" href="change_password.php">
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
                            <form class="form" name="frmChange" method="post" action="" onSubmit="return validatePassword()">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Current Password</label>
                                            <input name="current_password" type="password" class="form-control" id="current_password" placeholder="Current Password" required>
                                            <span id="current_password"></span>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label >New Password</label>
                                            <input name="new_password" type="password" maxlength="8" title="-	Length of password should be 8 characters.
-	At least one numerical value should be there in password
-	At least one special character should be there in password" id="new_password" placeholder="New Password" required>
                                            <span id="new_password"></span>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label>Repeat Password</label><span id='message2'></span>
                                            <input name="repeat_password" type="password" class="form-control" id="repeat_password" placeholder="Repeat New Password" required>
                                            <span id="repeat_password"></span>
                                        </div>
                                        <!--end form-group-->
                                        <button type="submit" name="submit" class="btn btn-primary float-right">Change Password</button>
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                            </form>
                        </div>
                        <!--end col-md-9-->
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
<script src="assets/js/change_password.js" type="text/javascript"></script>
	<script src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
	<script src="assets/js/selectize.min.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/icheck.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>
	    $('#new_password, #repeat_password').on('keyup', function () {
  if ($('#new_password').val() == $('#repeat_password').val()) {
    $('#message2').html('Matching').css('color', 'green');
  } else 
    $('#message2').html('Not Matching').css('color', 'red');
});
	</script>

</body>
</html>
