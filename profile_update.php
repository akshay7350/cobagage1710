<?php 
session_start();
include("includes/header.php");
   include("db/db.php");
  
 $country_display = mysqli_query($conn,"SELECT * FROM tbl_countries");


   global $msg;
   
  
      
      
       
      
      $sql = "SELECT * FROM users WHERE email='".$_SESSION['session']."' ";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
     
      if(isset($_POST['submit']))
{    
     $title = $_POST['title'];
     $name = $_POST['name'];
     $location = $_POST['country'];
    // $about = $_POST['about'];
      $phone = $_POST['phone'];
     $email = $_POST['email'];
      $passport = $_POST['passport'];
        $address = $_POST['address'];
     $city = $_POST['city'];
      $pincode = $_POST['pincode'];
    // $user_image = $_POST['user_image'];

     $target = "uploads/";
$target = $target . basename( $_FILES['user_image']['name']) ;
$ok=1;

//This is our size condition
/*if ($user_image_size > 2097152){
echo "Your file is too large. We have a 2MB limit.<br>";
$ok=0;
}*/

$types = array('image/jpeg', 'image/gif', 'image/png');

if (in_array($_FILES['user_image']['type'], $types)) {
// file is okay continue
} else {
$ok=0;
} 

//Here we check that $ok was not set to 0 by an error
if ($ok==0){
/*$msg= "Sorry your file was not uploaded. It may be the wrong filetype. We only allow JPG, GIF, and PNG filetypes.";*/
}

//If everything is ok we try to upload it

if(move_uploaded_file($_FILES['user_image']['tmp_name'], $target)){


}

     

     $sql2 = "UPDATE users SET gender = '$title',fullname ='$name',location ='$location',phone ='$phone',email ='$email',picture = '$target', passport='$passport',address='$address',city='$city' ,pincode='$pincode' WHERE email='".$_SESSION['session']."' ;";
     if (mysqli_query($conn, $sql2)) {
        $msg =  "<div class='alert alert-success' role='alert'>
  Record Updated Successfully.....! 
</div>";
     } else {
        echo("Error description: " . mysqli_error($conn));
     }
     
      
}
else{
$msg= "submit problem";
}       
   ?>