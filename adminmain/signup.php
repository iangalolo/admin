<?php 
include('includes/headermain.php');
include('includes/navmain.php');?>


<?php 

include("dbh.inc.php");

$output = "";

if (isset($_POST['register'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];
    $cpassword =$_POST['cpassword'];
	$usertype = $_POST['usertype'];
    
	
	

	$error = array();

	if (empty($username)) {
		$error['error'] = "username is Empty";
	}else if(empty($password)){
		$error['error'] = "password is empty";
    }else if(empty($cpassword)){
		$error['error'] = "password doesnt match";
	}else if(empty($usertype)){
		$error['error'] = "Select an usertype";
}



	if (isset($error['error'])) {
		$output .= $error['error'];
	}else{
		$output .= "";
	}


	if (count($error) < 1) {
		
		$sql = "INSERT INTO login(username,password,usertype) VALUES('$username','$password','$usertype')";
		$result = mysqli_query($conn,$sql);

		if ($result) {
			$output .= "registered";
			header("Location: signup.php");
		}else{
			$output .= "Failed to register";
		}
	}
}



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multilogin System</title>
</head>
<body>



	<div class="container">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 shadow-sm" style="margin-top:100px;">
					<form method="post">
						<h3 class="text-center my-3">Register</h3>

						<div class="text-center"><?php echo $output; ?></div>

						<label>Username</label>
						<input type="text" name="username" class="form-control my-2" placeholder="Enter Username" autocomplete="off">

                        <label>Password</label>
						<input type="password" name="password" class="form-control my-2" placeholder="Enter Password">

						<label>Confirm Password</label>
						<input type="password" name="cpassword" class="form-control my-2" placeholder="Enter Confirm Password">
                        
						<label>Select A User</label>
						<select name="usertype" class="form-control my-2">
							<option value="">Selete Role</option>
							<option value="Admin">Admin</option>
							<option value="User">User</option>
							
						</select>
						<input type="submit" name="register" class="btn btn-success" value="Register">
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="" style="margin-top: 30px;"></div>

</body>
</html>