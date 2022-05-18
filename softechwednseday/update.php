<?php 
include 'dbcon.php';
if(isset($_POST['id'])) {
	    $id=$_POST['id'];
	$name=$_POST['name'];
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$created_date=$_POST['created_date'];
	$image=$_POST['image'];
	/*echo $id,$name,$fname,$email,$phone,$image ;
	echo $created_date;
	echo $phone;*/

     $sql="UPDATE `customer` SET `name`='$name',`fname`='$fname',`email`='$email',`phone`='$phone',`created_date`='$created_date',`image`='$image'";
         $run=mysqli_query($conn ,$sql);
         header("location:index.php");
	if ($run) {
		echo "successfully updated";

	 
	}
}
echo "update ";
?>