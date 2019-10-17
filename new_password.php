<?php

/*include_once 'db/db.php';
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM users where email='" . $email . "'");
    $row = mysqli_fetch_assoc($result);
    $fetch_user_id=$row['email'];
	
	$password=md5($row['password']);
	
	if($email==$fetch_user_id) {
				$to = $email;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: admin@cobagage.com" . "\r\n" .
                "CC: ";
                mail($to,$subject,$txt,$headers);
                
                echo "<script>alert('Password Successfully Send To Your Mail..Please Check Your Mail....!');
                   window.location.href = 'sign-in.php';</script>";
			}
				else{
				echo "<script>alert('this email not  register!');
                   </script>";
				}
}*/
  

?>
<?php include('app_logic.php'); ?>
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

	 <link rel="shortcut icon" href="assets/img/691603.png" type="image/x-icon"/>
	<title>Cobagage</title>

</head>
<body>
    <div class="page sub-page">
        <?php include 'includes/header.php'?>
                <!-- page title and end header-->
                <div class="page-title">
                    <div class="container">
                        <h1>New Password</h1>
                    </div>
                   
                </div>
               
                <div class="background"></div>
                
            </div>
           
        </header>
        
        <!--page title and end header -->


        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">
                    
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <!--<form class="form clearfix" method="post" action="">
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                </div>
                                
                               
                                <div class="d-flex justify-content-between align-items-baseline">
                                  
                                    <button type="submit" name="submit" class="btn btn-primary ml-auto">Reset Password</button>
                                </div>
                            </form>-->
                            
                            <form class="form clearfix" method="post" action="">
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">New Password</label>
                                    <input name="new_pass" type="password" class="form-control" maxlength="8"  title="-	Length of password should be 8 characters
-	At least one numerical value should be there in password
-	At least one special character should be there in password"  class="form-control" id="password" placeholder="Your New Password" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Confirm New Password</label><span id='message'></span>
                                    <input name="new_pass_c" type="password" class="form-control" id="confirm_password" placeholder="Confirm New Password" required>
                                </div>
                              
                                <div class="d-flex justify-content-center  align-items-baseline">
                                    <button type="submit" name="new_password" class="btn btn-primary mr-2">Save Changes</button>
                                    <a href="sign-in.php" class="btn btn-secondary btn-framed ml-2 bg-light">Cancel</a>

                                </div>
                            </form>
                            <hr>
                            
                        </div>
                        <!--end col-md-6-->
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
	<script>
	    $('#password, #confirm_password').on('keyup', function () {
  if ($('#password').val() == $('#confirm_password').val()) {
    $('#message').html('Matching').css('color', 'green');
  } else 
    $('#message').html('Not Matching').css('color', 'red');
});
	</script>

</body>
</html>
