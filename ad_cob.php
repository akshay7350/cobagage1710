<?php




           session_start();
           include 'db/db.php';
             global $msg;
             $date = date("Y-m-d H:i:s");
  //cobagage form coding
 $email=  $_SESSION['session'];
  if(isset($_POST['submit']))
{    
    // $cat = $_POST['cat'];
     $title = $_POST['title'];
     $pick_up = $_POST['pick_up'];
     $drop_up = $_POST['drop_up'];
    //  $s_date = $_POST['s_date'];
    // $e_date = $_POST['end_date'];
    $s_date = $_POST['startDate'];
    $e_date = $_POST['endDate'];
     $capacity = $_POST['capacity'];
      $charges = $_POST['charges'];
       $instruction = $_POST['instruction'];
      $description = $_POST['description'];
    // $article_file = $_POST['article_file'];
    


   
$sql = "SELECT id FROM users where email='".$email."'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $user_id=$row['id'];
       
 }

   
    

     $sql2 = "INSERT INTO tbl_cob (user_id,email,title,pick_up,drop_up,s_date,e_date,capacity,charges,instruction,description,dtime) 
            VALUES ('$user_id','$email','$title','$pick_up','$drop_up','$s_date','$e_date','$capacity','$charges','$instruction','$description','$date')";
     if (mysqli_query($conn, $sql2)) {
         
        /*$fs_msg =  "<div class='alert alert-success' role='alert'>
  Record Updated Successfully.....!
</div>";*/
         echo "<script>alert('Form Data Send Successfully');
         window.location.href = 'my_cobagage.php';
</script>";
        //header("location: submit_ad.php"); 


     } 
     else{
      echo("Error description: " . mysqli_error($conn));

     }
      
  }

  else{
    echo("Error description: " . mysqli_error($conn));
  }


















?>