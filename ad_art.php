<?php session_start();?>
<?php include 'db/db.php';
      global $msg;
             $email=  $_SESSION['session'];
             $category_display = mysqli_query($conn,"SELECT * FROM category");


             if(isset($_POST['submit_cob']))
{    
    // $cat = $_POST['cat'];
     $title = $_POST['title'];
     $price = $_POST['price'];
     $sub_cat = $_POST['sub_cat'];
      $qty = $_POST['qty'];
     $slugs = $_POST['slugs'];
     $desc = $_POST['description'];
      $location = $_POST['location'];
      
    // $article_file = $_POST['article_file'];
    

$sql2 = "SELECT id FROM users where email='".$email."'";
$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $user_id=$row['id'];
       
 }
   /*files upload*/
   
   /*files upload*/
 
    /*foreach ($_FILES['files']['tmp_name'] as $key => $val ) {

        $fileName = $_FILES['files']['name'][$key];
        $filesize = $_FILES['files']['size'][$key];
        $filetempname = $_FILES['files']['tmp_name'][$key];

        $fileext = pathinfo($fileName, PATHINFO_EXTENSION);
        $fileext = strtolower($fileext);*/
$sql2 = "INSERT INTO tbl_donation (user_id,email,title,price,category,qty,slugs,description,location,gallery) 
            VALUES ('$user_id','$email','$title','$price','$sub_cat','$qty','$slugs','$desc','$location','$fileext')";
        // here your insert query
    

     
     if (mysqli_query($conn, $sql2)) {
       echo "<script>alert('Form Data Send Successfully');
         window.location.href = 'my_donation.php';
</script>";
     } 
     else{
      echo("Error description: " . mysqli_error($conn));

     }
      
  }

  
   ?>  
     