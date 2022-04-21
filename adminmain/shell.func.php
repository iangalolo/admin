<?php 

include("dbh.inc.php");

$output = "";

if (isset($_POST['add'])) {
	
	$pname = $_POST['ProductName'];
	$pprice = $_POST['ProductPrice'];
	
	

	$error = array();

	if (empty($pname)) {
		$error['error'] = "Empty";
	}else if(empty($pprice)){
		$error['error'] = "Empty";
}



	if (isset($error['error'])) {
		$output .= $error['error'];
	}else{
		$output .= "";
	}


	if (count($error) < 1) {
		
		$sql = "INSERT INTO shell(ProductName,ProductPrice) VALUES('$pname','$pprice')";
		$result = mysqli_query($conn,$sql);

		if ($result) {
			$output .= "ADDED";
			header("Location: productentry.php");
		}else{
			$output .= "Failed to Add";
		}
	}
}



 ?>