<?php
include 'dbcon.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $phone=$_POST["phone"];
    //$image=$_POST['image'];
    $created_date=$_POST['created_date'];
    $imagename = $_FILES['image']['name'];
 $tempname=$_FILES['image']['tmp_name'];
 move_uploaded_file($tempname, "/image$imagename");
$sql="INSERT INTO customer(`name`, `fname`, `email`, `phone`, `created_date`, `image`) VALUES ('$name','$fname','$email','$phone','$created_date','$imagename')";
$result=mysqli_query($conn , $sql);
if ($result==true) {

	header("location:index.php");
}


}
?>