<?php
/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
session_start();
include 'db/db.php';
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM users WHERE email='$email'";
  $results = mysqli_query($conn, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
  echo "<script>alert('Sorry, no user exists on our system with that email');
    </script>";
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    //$sql = "INSERT INTO users(token) VALUES ('$token') where email='$email'";
    $sql="Update users SET token='$token' where email='$email'";
    $results2 = mysqli_query($conn, $sql);

    // Send email to user with the token in a link they can click on
    $to = $email;
    $subject = "Reset your password on cobagage.com";
    $msg = "Hi there, click on this <a href=http://gator4224.temp.domains/~cobagage/users/new_password.php?token=" . $token . ">link</a> to reset your password on our site";
    $msg = wordwrap($msg,70);
    $headers = "From: password-reset@cobagage.com";
    mail($to, $subject, $msg, $headers);
    header('location: pending.php?email=' . $email);
  }
}

// ENTER A NEW PASSWORD
if (isset($_POST['new_password']) && preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8}$/',$_POST['new_pass'] ) ) {
  $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($conn, $_POST['new_pass_c']);


  // Grab to token that came from the email link
  //$token = $_SESSION['token'];
  $token=$_GET['token'];
  
  /*if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");*/
  if ($new_pass == $new_pass_c){ /*array_push($errors, "Password do not match");*/
  
  if (count($errors) == 0) {
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM users WHERE token='$token'";
    $results = mysqli_query($conn, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      $new_pass = md5($new_pass);
      $sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
      $results = mysqli_query($conn, $sql);
      echo "<script>alert('Password Successfully Reset..! please login again with new password');
      window.location.href='index.php';</script>";
      
    }
  }}
  else{
      echo "<script>alert('New Password And confirm password not match please try again');</script>";
  }
}
/*else{
     echo "<script>alert('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');</script>";
}*/

?>