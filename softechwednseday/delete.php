<?php
 include 'dbcon.php';
 if (isset($_GET['id'])) {
 	$id=$_GET['id'];
 	$name=$_GET['name'];
   $fname=$_GET['fname'];
   $email=$_GET['email'];   
    $phone=$_GET['phone'];
    $created_date=$_GET['created_date'];   
$sql="DELETE FROM customer WHERE id=$id";
$delete=mysqli_query($conn ,$sql);
if ($delete) {
header("location:index.php");
}
}

?>