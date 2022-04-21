
<?php 
session_start();
  include("dbh.inc.php");

   
   $output = "";

  if (isset($_POST['login'])) {
  	   
  	   $username = $_POST['username'];
  	   $password = $_POST['password'];
		 $usertype = $_POST['usertype'];

  	   if (empty($username)) {
  	   	
  	   }else if(empty($usertype)){

  	   }else if(empty($password)){

  	   }else{

         $query = "SELECT * FROM login WHERE username='$username' AND password='$password' AND usertype='$usertype'";
         $res = mysqli_query($conn,$query);

         if (mysqli_num_rows($res) == 1) {

         	  if ($usertype == "Admin") {

         	  	$_SESSION['Admin'] = $username;
				header("Location: adminmain/indexmain.php");
         	  	
         	
         	  }else if($usertype == "User"){
                
                $_SESSION['User'] = $username;
                header("Location: index.php");


         	  }
         	 $output .= "you have logged-In";
         }else{
             $output .= "Failed to login";
         }

  	   }
  }




 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Log-in Form</title>

</head>
<body>
	<?php include("includes/header.php"); ?>



	<div class="container">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 shadow-sm" style="margin-top:100px;">
					<form method="post">
						<h3 class="text-center my-3">Login</h3>
						<div class="text-center"><?php echo $output; ?></div>
						<label>Username</label>
						<input type="text" name="username" class="form-control my-2" placeholder="Enter Username" autocomplete="off">
                         
                    
						<label>Password</label>
						<input type="password" name="password" class="form-control my-2" placeholder="Enter Password">
						<label>Select Role</label>
						<select name="usertype" class="form-control my-2">
							<option value="">Selete Role</option>
							<option value="Admin">Admin</option>
							<option value="User">User</option>
							
						</select>
						<input type="submit" name="login" class="btn btn-success" value="Login">
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>