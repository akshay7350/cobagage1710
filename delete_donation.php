<?php 
session_start();
include "db/db.php";


$id=$_GET['id'];
if($id > 0){

  // Check record exists
  $checkRecord = mysqli_query($conn,"SELECT * FROM tbl_donation WHERE id=".$id);
  $totalrows = mysqli_num_rows($checkRecord);

  if($totalrows > 0){
    // Delete record
    $query = "DELETE FROM tbl_donation WHERE id=".$id;
    mysqli_query($conn,$query);
    echo 1;
    echo "<script>alert('Delete Successfully...!');
    window.location.href='my_donation.php';</script>;
           ";
    exit;
  }
}

echo 0;
exit;
?>