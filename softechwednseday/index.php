<?php
include 'dbcon.php';
$sql="SELECT * FROM customer";
$select=mysqli_query($conn , $sql);
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
	<form action="insert.php" method="POST" enctype="multipart/form-data">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h1>Customer Information</h1> 
				<label class="lable colom-md-3 control-lable" id="lable">Name</label>
				<input type="text" name="name" class="form-control">
				<label class="lable colom-md-3 control-lable" id="lable">Father name</label>
				<input type="text" name="fname" class="form-control">
                <label class="lable colom-md-3 control-lable" id="lable">Email</label>
				<input type="email" name="email" class="form-control">
				<label class="lable colom-md-3 control-lable" id="lable">Phone no</label>
				<input type="text" name="phone" class="form-control">
				<label class="lable colom-md-3 control-lable" id="lable">Created_date</label>
				<input type="date" name="created_date" class="form-control">
				<label class="lable colom-md-3 control-lable" id="lable">Image</label>
				<input type="file"  name="image" class="form-control"  placeholder="upload image"> 
				<br>
                
                 <button type="sbumit" class="btn btn-primary" >submit</button>
                
			</div>

		</div>
	</div>
</form>
<table border="1" class="table">
		<thead class="thead-dark">
		<tr>
			<td style="border: 2px">ID</td>
			<td>Name</td>
			<td>F-Name</td>
			<td>Email</td>
			<td>Phone no</td>
			<td>Created Date</td>
			<td>image</td>
			<td>Action</td>
			<td>Edit</td>
			

		</tr>
		</thead>
		<?php if (mysqli_num_rows($select)>0) {
			while ($row=mysqli_fetch_assoc($select)) {?>
				<tr>
					<td><?php  echo $row['id'] ?></td>
					<td><?php  echo $row['name'] ?></td>
					<td><?php  echo $row['fname'] ?></td>
					<td><?php echo $row['email']?></td>
					<td><?php  echo $row['phone'] ?></td>
					<td><?php echo $row['created_date']?></td>
					<td><?php echo $row['image']?></td>
					
					<td><a href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
					<td><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
				</tr>
		<?php	}
			// code...
		}
		?>
	</table>
</body>
</html>
