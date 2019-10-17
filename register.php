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

	<title>Cobagage - User Registration</title>

</head>
<body>
    <div class="page sub-page">
       
          <?php include 'includes/header.php';
                include 'db/db.php';

          $country_display = mysqli_query($conn,"SELECT * FROM tbl_countries");

          global $msg;
global $pwd;
global $password_err;
if(isset($_POST['submit'])  ){

$email=$_POST['email']; 
$username=$_POST['username'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$password=$_POST['password'];
$repeat_password=$_POST['repeat_password'];
//$user_image=md5($_POST['user_image']);




if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8}$/', $password)) {
//if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z0-9!@#$%]){8}$/', $password)) {
    $msg= "<div class='alert alert-danger' role='alert'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</div>";
}

else if (!preg_match('/^[a-zA-Z]*$/', $username))
{
    //if (!preg_match("/^[a-zA-Z ]*$/",$name)) {

    $msg= "<div class='alert alert-danger' role='alert'>usename not contain spaces and numbers and special characters</div>";
}







/*$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) <= 8) {
    $msg= "<div class='alert alert-danger' role='alert'>Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</div>";
   
}*/else{
   

$password=md5($_POST['password']);
$repeat_password=md5($_POST['repeat_password']);


 
$email = filter_var($email, FILTER_SANITIZE_EMAIL); 
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' ");
$result2 = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' ");
$data1 = mysqli_num_rows($result2);
$data = mysqli_num_rows($result);
if($password == $repeat_password){
        
if(($data1)==0){
if(($data)==0){
$query = mysqli_query($conn,"insert into users(email,username,phone,location,password) values ('$email', '$username', '$phone','$country','$password')"); // Insert query
if($query){
/*$msg =  "<div class='alert alert-success' role='alert'>
  You have Successfully Registered.....!
</div>";*/


/*echo "<script>alert('Registration Successfully...');
window.location.href = 'welcome.php';
</script>";*/

$_SESSION['session'] = $email;
$actual_link = "http://gator4224.temp.domains/~cobagage/users/activate.php?email=".$email;
			$toEmail = $email;
			$subject = "User Registration Activation Email";
			$content = "Click this link to activate your account. <a href='" . $actual_link . "'>" . $actual_link . "</a>";
			$mailHeaders = "From: Admin\r\n";
			if(mail($toEmail, $subject, $content, $mailHeaders)) {
				$message = "You have registered and the activation mail is sent to your email. Click the activation link to activate you account.";	
				
				echo "<script>alert('Registration Successfully...');
window.location.href = 'welcome.php';
</script>";
				
				
			}
			else{
			    
			}





}else
{
$msg= "<div class='alert alert-danger' role='alert'>
  Error....!!
</div>";

}

} 
else {
     $msg = "<div class='alert alert-danger' role='alert'>
  This email is already registered, Please try another email...
</div>";    
    }
}
else {
     $msg = "<div class='alert alert-danger' role='alert'>
  This Username is already taken, Please try another username...
</div>";    
    }
}
else { $msg = "<div class='alert alert-danger' role='alert'>
  passwords does not match. please try again...
</div>";
}

}


} 


}


          ?>
        <!--*********************************************************************************************************-->        <!--************ CONTENT ************************************************************************************-->
       
         <!-- page title and end header-->
                <div class="page-title">
                    <div class="container">
                        <h1>Register</h1>
                    </div>
                   
                </div>
               
                <div class="background"></div>
                
            </div>
           
        </header>
        
        <!--page title and end header -->
        
         <div class="page sub-page">
        <section class="content">
            <section class="block">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-5 col-md-6 col-sm-8">
                            <?php echo $msg;?>
                            <form class="form clearfix" method="post" action="">
                                    <div class="form-group">
                                            <label for="email" class="col-form-label required">Email</label>
                                            <input name="email" type="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" class="form-control" id="email" placeholder="Your Email" required>
                                        </div>
                                        <!--end form-group-->
                                <div class="form-group">
                                    <label for="username" class="col-form-label required">User Name</label>
                                    <input name="username" title="username should be alphabetic" type="text" value="<?php echo isset($_POST["username"]) ? $_POST["username"] : ''; ?>" class="form-control" id="name" maxlength="30" placeholder="User Name" required>
                                </div>
                                <!--end form-group-->
                               
                                <div class="form-group">
                                        <label for="phone" class="col-form-label zipcode-number required">Contact Number</label>
                                        <input name="phone" pattern="\d*" type="number" value="<?php echo isset($_POST["phone"]) ? $_POST["phone"] : ''; ?>" class="form-control" id="phone"  placeholder="Contact Number" required>
                                    </div>
                                    <!--end form-group-->
                                   
                                        
                                        <!--form group -->
                                        <div class="form-group">
                                                                            <label for="country" class="col-form-label required">Country Name</label>
                                                                            <select name="country" id="country" required>
                                        
                                         <option value="">Select country</option>                                     <?php 
                                                while($row_country=mysqli_fetch_array($country_display))
                                                { ?>
                                              <option value="<?php echo $row_country['country_name'];?>"><?php echo $row_country['country_name'];?></option>
                                          <?php } ?>
                            
                                                                                
                                                                            </select>
                                                                        </div>
                                        <!--form group -->
                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    <input name="password" type="password"  maxlength="8"  title="Password length should be 8 characters contaning at least one number, one letter and one special character"  class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" id="password"   placeholder="Password" required>
                                    
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="repeat_password" class="col-form-label required">Confirm Password</label><span id='message2'></span>
                                    <input name="repeat_password" type="password" maxlength="15" class="form-control" id="repeat_password" placeholder="Confirm Password" required>
                                    
                                </div>
                                <!--end form-group-->
                               <!--  <div class="form-group">
                                    <div class="profile-image">
                                        <div class="image background-image rounded-0" style="background-image: url(&quot;assets/img/author-09.jpg&quot;);">
                                            <img src="assets/img/author-09.jpg" alt="">
                                        </div>
                                        <div class="single-file-input">
                                            <input type="file" id="user_image" name="user_image">
                                            <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                            <hr>
                            <p>
                                By clicking "Register" button, you agree with our <a href="#" class="link">Terms & Conditions.</a>
                            </p>
                            <p>
                                Already registered <a href="sign-in.php" class="link">Login</a>
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
	
	<script>
	    $('#password, #repeat_password').on('keyup', function () {
  if ($('#password').val() == $('#repeat_password').val()) {
    $('#message2').html('Matching').css('color', 'green');
  } else 
    $('#message2').html('Not Matching').css('color', 'red');
});
	</script>
	<script>
	var inputQuantity = [];
    $(function() {     
      $(".zipcode-number").on("keyup", function (e) {
        var $field = $(this),
            val=this.value,
            $thisIndex=parseInt($field.data("idx"),10); 
        if (this.validity && this.validity.badInput || isNaN(val) || $field.is(":invalid") ) {
            this.value = inputQuantity[$thisIndex];
            return;
        } 
        if (val.length > Number($field.attr("maxlength"))) {
          val=val.slice(0, 5);
          $field.val(val);
        }
        inputQuantity[$thisIndex]=val;
      });      
    });

	</script>

</body>
</html>
