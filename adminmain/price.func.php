<?php 

include("dbh.inc.php");


if (isset($_POST['POST'])) {
	
	$rgas = $_POST['rgas'];
	$pgas = $_POST['pgas'];
    $diesel =$_POST['diesel'];
	

		$sql = "INSERT INTO priceshell(rgas,pgas,diesel) VALUES('$rgas','$pgas','$diesel')";
		$result = mysqli_query($conn,$sql);

	        
        if($result)
        {
            echo '<script> alert("Submitted");</script>';
            header("Location: Prices.php");
        }
        else
        {
           echo '<script> alert("Cannot be Saved");</script>';

        }
     
       }

