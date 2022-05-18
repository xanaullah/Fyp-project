<?php 
include 'dbcon.php';
if (isset($_SEVER['REQUEST_METHOD'])=='POST') {

	$txtstartDate=$_POST['txtStartDate'];
	$txtEndDate=$_POST['txtEndDate'];
	$sql=mysqli_query($conn , "SELECT name FROM customer WHERE
		 joindate BETWEEN  '$txtstartDate' AND '$txtEndDate' order by joindate");
	if (!$sql) {

		echo mysql_errno();
	}
	  $count=mysqli_num_rows($sql);
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body id="id">

<nav class="nav  bg-dark navbar-dark" >
  <a class="nav-link active" href="index.php">Home</a>
  <a class="nav-link" href="">Update</a>
  <a class="nav-link" href="#">About US</a>
  
</nav>
<hr> 
	<form action="search.php" method="POST" enctype="multipart/form-data">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1>Search Empolyee</h1> 
				
				<input type="date" name="txtStartDate" class="form-control">
				<input type="date" name="txtEndDate" class="form-control"> 
				
				<br>
                
                 <button type="sbumit"  name="search" class="btn btn-primary"  value="Search Empolyee">Search</button>
                
			</div>

		</div>
	</div>
	
</form>
</body>
</html>
<?php  
	if ($count==0) {
echo "NO record found ";
	}
	else{
		while($row=mysqli_fetch_assoc($sql));
		{
			$result=$row['name'];
			$output='<h2>'.$result.'</h2>';
		 echo $output;
		 }
	}
		 ?>