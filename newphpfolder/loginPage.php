<?php

$database=new mysqli("localhost","root","","main_database");
if($database->connect_error){
	echo "Connection error";
}
else{
	$method=$_SERVER['REQUEST_METHOD'];
	$st_name=$_POST['username'];
	$st_email=$_POST['email'];
	$st_pass=md5($_POST['password']);

	if($method=="POST"){
		$data="SELECT * FROM student_details WHERE EMAIL='$st_email' AND '$st_pass'";
		$check=$database->query($data);
		if($check->num_rows==0){
			$insert="INSERT INTO student_details(NAME,EMAIL,PASSWORD)VALUES('$st_name','$st_email','$st_pass')";

			if($database->query($insert)){
				echo "data inserted";
			}
			else{
				echo "data not inserted";
			}
		}
		else{
			echo "Data already exists";
		}

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

	<title>Login Page</title>

	<style>
		.cards{
			width: 100%;
			max-width: 400px;
			margin: 40px auto;
			background-color: lightgrey;
		}

		span{
			color: red;
		}
	</style>
</head>
<body>
	
	<div class="cards rounded-3">
		<div class="card-header">
			<h3 class="text-center text-secondary">Login Page</h3>
		</div>
		<form action="loginPage.php" method="post">
		<div class="card-body">
			<label for="username">Name <span>*</span></label>
			<input type="text" name="username" class="form-control mb-3" placeholder="Enter name" autofocus>

			<label for="email">Email <span>*</span></label>
			<input type="email" name="email" class="form-control mb-3" placeholder="Enter email">

			<label for="password">Password <span>*</span></label>
			<input type="password" name="password" class="form-control mb-3" placeholder="Enter password">
		</div>
		<div class="card-footer">
			<input type="submit" class="btn btn-secondary w-100 my-3">
		</div>
		</form>
	</div>

</body>
</html>