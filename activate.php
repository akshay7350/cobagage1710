<?php
     session_start();
     include 'db/db.php';
     $email= $_GET['email'];
     echo $email;
     
     $query = "UPDATE users set status = 1 WHERE email='$email'";
      $retval = mysqli_query($conn,$query);
if($retval) {
			echo "<script>alert('your account activated successfully');
			window.location.href = 'sign-in.php';
</script>";
		} else {
			//echo "<script>alert('Problem with query')</script>";
			echo "error".mysqli_error();
		}


?>