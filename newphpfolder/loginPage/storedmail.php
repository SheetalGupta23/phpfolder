<?php
	$database=new mysqli("localhost","root","","db");
	if($database->connect_error){
		echo "not connected";
	}else{
		$method=$_SERVER["REQUEST_METHOD"];
		$mail=$_GET["email"]??'';
		if($method=="GET"){
			$check="SELECT EMAIL FROM login_details WHERE EMAIL='$mail'";
			$response=$database->query($check);
			if($response->num_rows==0){
				echo "<div style='color:red;'>email not found</div>";
			}
			else{
				echo "<div style='color:green;'>email found</div>";
			}
		}
		else{
			echo "no";
		}
	}
?>