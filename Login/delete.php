<?php
 include 'database.php';

 $id = $_GET['deleteid'];
//  echo $id;
$sql = "DELETE FROM `nike` WHERE id = $id";
$result = mysqli_query($conn,$sql);

if($result){
    // echo "Deleted successfully";
    header('location:list.php');
}else{
    die(mysqli_error($conn));
}
?>