<?php
include 'dbcon.php';
if (isset($_GET['id'])) {
	$id= $_GET['id'];
}
$sql="SELECT * FROM customer WHERE id= $id";
$result=mysqli_query($conn , $sql);
$row=mysqli_fetch_assoc($result);
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
<body>

<nav class="nav" class=" class="navbar navbar-light bg-light">
  <a class="nav-link active" href="index.php">Home</a>
  <a class="nav-link" href="#">Contact US</a>
  <a class="nav-link" href="#">About US</a>
  
</nav>
<hr> 

<form action="update.php" method="POST">


	<form action="update.php" method="POST">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1>Update Customer Information</h1> 
				<label class="lable colom-md-3 control-lable" id="lable">Name</label>
				<input type="hidden" name="id" value="<?php echo $row['id']?>">
				<input type="text" name="name" class="form-control" value="<?php echo $row['name']?>">
				<label class="lable colom-md-3 control-lable" id="lable">Father name</label>
				<input type="text" name="fname" class="form-control" value="<?php echo $row['fname']?>">
                <label class="lable colom-md-3 control-lable" id="lable">Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $row['email']?>">
				<label class="lable colom-md-3 control-lable" id="lable">Phone no</label>
				<input type="text" name="phone" class="form-control" value="<?php echo $row['phone']?>">
				<label class="lable colom-md-3 control-lable" id="lable">Created_date</label>
				<input type="date" name="created_date" class="form-control" value="<?php echo $row['created_date']?>">
				<label class="lable colom-md-3 control-lable" id="lable">Image</label >
				<input type="file"  name="image" class="form-control"  placeholder="upload image" <?php echo $row['image']?>> 
				<br>
                
                 <button type="sbumit" class="btn btn-primary" >submit</button>
                
			</div>

		</div>
	</div>
</form>

</body>
</html>