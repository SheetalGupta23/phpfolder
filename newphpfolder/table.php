<?php
	$database=new mysqli("localhost","root","","data_base");
	if($database->connect_error){
		echo "not connected";
	}
	else{
		$data="CREATE TABLE table_details(
		ID INT(20) NOT NULL AUTO_INCREMENT,
		NAME VARCHAR(100),
		EMAIL VARCHAR(20),
		PASSWORD VARCHAR(20),
		PRIMARY KEY(ID)
	)";
	if($database->query($data)){
		echo "table created";
	}
	else{
		echo "table not created";
	}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<title>Add database dynamically</title>

	<style>
		.cards{
			width: 30%;
			margin: 40px auto;
			border: 1px solid grey;
			border-radius: 10px;
		}
	</style>
</head>
<body>
	
		<div class="cards">
			<div class="card-header">
				<h2 class="text-center text-success">Login Page</h2>
			</div>
			<div class="card-body">
				<form action="table.php" method="post">
					<label for="name">Name*</label>
					<input type="text" name="candidateName" placeholder="Enter username" class="form-control mb-2">

					<label for="email">Email*</label>
					<input type="email" name="email" placeholder="Enter email" class="form-control mb-2">

					<label for="password">Password*</label>
					<input type="password" name="password" placeholder="Enter password" class="form-control mb-2">
			</div>
			<div class="card-footer text-center">
				<input type="submit" class="btn w-100 bg-success text-light">
				</form>
			</div>
		</div>
	
</body>
</html>