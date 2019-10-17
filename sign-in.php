<?php session_start();?>
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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/user.css">

	<title>Cobagage - Sign In</title>

</head>
<body>
      <div class="page sub-page">
    <?php
    
    include("includes/header.php");
   include("db/db.php");
  



   global $msg;
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
     $password = mysqli_real_escape_string($conn,md5($_POST['password'])); 
      
      $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $status = $row['status'];
      $main_session=$row['username'];
     $count = mysqli_num_rows($result);
      
      
        
      if($count == 1 && $status == 1) {
      
         $_SESSION['session'] = $email;
         $_SESSION['main_session']=$main_session;
       

       //header("refresh:3; url=my_profile.php");
          $msg = "<div class='alert alert-success' role='alert'>
  Login Successfully!
</div>";
echo "<script>
alert('login successfully....!');
 window.location.assign('view_profile.php'); </script>";

      }
      else {
          

         $msg = "<div class='alert alert-danger' role='alert'>
 Your Login Email or Password is invalid! if valid please contact to admin admin@cobagage,com for reactivation your account
</div>";
      
      }
   }
   ?>
   
   <!-- page title and end header-->
                <div class="page-title">
                    <div class="container">
                        <h1>Sign In</h1>
                    </div>
                   
                </div>
               
                <div class="background"></div>
                
            </div>
           
        </header>
        
        <!--page title and end header -->

  
        
        
        <section class="content">
            <section class="block">
                <div class="container">
                    <?php echo $msg;?>
            
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form class="form clearfix" method="post" action="">
                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                                </div>
                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <label>
                                        <input type="checkbox" name="remember" value="1">
                                        Remember Me
                                    </label>
                                    <button type="submit" class="btn btn-primary">Sign In</button>
                                </div>
                            </form>
                            <hr>
                            <p>
                                Troubles with signing? <a href="forget_password.php" class="link">Click here.</a>
                            </p>
                            
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

</body>
</html>
