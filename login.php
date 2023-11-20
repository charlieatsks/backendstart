<?php 
	
$showAlert = false; 
$showError = false; 
$exists=false; 
	
if($_SERVER["REQUEST_METHOD"] == "POST") { 
	
	// Include file which makes the 
	// Database Connection. 
	include 'dbconnect.php'; 
	
	$username = $_POST["username"]; 
	$password = $_POST["password"]; 
	$cpassword = $_POST["cpassword"]; 
			
	
	$sql = "Select * from users where username='$username'"; 
	
	$result = mysqli_query($conn, $sql); 
	
	$num = mysqli_num_rows($result); 
	
	// This sql query is use to check if 
	// the username is already present 
	// or not in our Database 
	if($num == 0) { 
		if(($password == $cpassword) && $exists==false) { 
	
			$hash = password_hash($password, 
								PASSWORD_DEFAULT); 
				
			// Password Hashing is used here. 
			$sql = "INSERT INTO `users` ( `username`, 
				`password`, `date`) VALUES ('$username', 
				'$hash', current_timestamp())"; 
	
			$result = mysqli_query($conn, $sql); 
	
			if ($result) { 
				$showAlert = true; 
			} 
		} 
		else { 
			$showError = "Passwords do not match"; 
		}	 
	}// end if 
	
if($num>0) 
{ 
	$exists="Username not available"; 
} 
	
}//end if 
	
?>


<!doctype html> 
<html lang="en"> 
<head> 
	<!-- Required meta tags --> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
	<!-- Bootstrap CSS --> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> 
</head> 
<body> 
	

<script src=" 
https://code.jquery.com/jquery-3.5.1.slim.min.js" 
	integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"> 
</script> 
	
</body> 
</html> 









