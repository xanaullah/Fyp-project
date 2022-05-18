<?php 
include 'dbcon.php';
if (isset($_SERVER['REQUEST_METHOD'])=='POST') {

	$txtstartDate=$_POST['txtStartDate'];
	$txtEndDate=$_POST['txtEndDate'];
	$sql=mysqli_query($conn , "SELECT name FROM customer WHERE
		 joindate BETWEEN  '$txtstartDate' AND '$txtEndDate' order by joindate");
	
	}
	  $count=mysqli_num_rows($sql);


?>