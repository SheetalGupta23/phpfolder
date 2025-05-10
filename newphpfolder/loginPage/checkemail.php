<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Check the presence of email</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<style>
		.cards{
			width: 100%;
			max-width: 350px;
			margin: 60px auto;

		}
	</style>

</head>
<body>
	<div class="cards border border-info rounded-3">
		<div class="card-header">
			<h3 class="text-center">Enter email id</h3>
		</div>
		<div class="card-body">
			
				<label for="email" class="text-secondary">Enter email id to Check</label>
				<input type="email" name="email" class="form-control mt-2" id="usermail" autofocus>
				<input type="submit" class="btn w-100 bg-info mt-4">
			
		</div>
		<div class="card-footer">
			<h4 id="text" class="text-center"></h4>
		</div>
	</div>

	<script>
		$(document).ready(function(){
			$(".btn").click(function(){
				let email_value=$("#usermail").val();
				$.ajax({
					type:"GET",
					url:"storedmail.php?email="+email_value,
					success:function(response){
						$("h4").html(response)
					}
				});
			});
		});
	</script>
</body>
</html>

