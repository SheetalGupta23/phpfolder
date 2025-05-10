<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/	jquery/3.7.1/jquery.min.js"></script>


	<title>Signin Page</title>

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
		<form action="index.php" method="post">
		<div class="card-body">
			<label for="username">Name <span>*</span></label>
			<input type="text" name="username" class="form-control mb-3" placeholder="Enter your name" autofocus="autofocus">

			<label for="email">Email <span>*</span></label>
			<input type="email" name="email" class="form-control mb-3" placeholder="Enter email">

			<label for="password">Password <span>*</span></label>
			<input type="password" name="password" class="form-control mb-3" placeholder="Enter password">
		</div>
		<div class="card-footer">
			<button type="button" class="btn bg-secondary text-light w-100">Click</button>
		</div>
		<h3 id="btm_text" class="text-center p-2"></h3>
		</form>
	</div>

	<script>
		$(document).ready(function(){
		$("button").click(function(){
		$.ajax({
			type:"GET",
			url:"secondPage.php",
			success:function(event){
				$("#btm_text").text(event);
			}
		});
	});
});
	</script>

</body>
</html>