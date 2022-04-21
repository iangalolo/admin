<?php 
include('includes/header.php');
 include('includes/nav.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Prices</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="styly.css">
</head>
<body>
    <main>
    <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      method="post" 
      	      style="width: 450px;">
      	      <h3 class="text-center p-3">PRODUCT UPDATE</h3>
		  <div class="mb-3">
		    <label for="ProductName" 
		           class="form-label">PRODUCT NAME</label>
		    <input type="text" 
		           class="form-control" 
		           name="ProductName" 
		           id="ProductName">
		  </div>
		  <div class="mb-3">
		    <label for="ProductPrice" 
		           class="form-label">PRODUCT Price</label>
		    <input type="text" 
		           class="form-control" 
		           name="ProductPrice" 
		           id="ProductPrice">
		  </div>
		  
		  <label>As Of:</label>
			<input type="datetime-local" 
					name="startDate" 
					id="startDate">
					
					
		  <label>Valid until</label>
			<input type="datetime-local" 
					name="endDate" 
					id="endDate">
				
                
                
		  <button type="submit" name="update"
		          class="btn btn-primary">Update</button>
		</form>
      </div>
    </main>
	<?php 

include("dbh.inc.php");


if (isset($_POST['update'])) {
		$productname = $_POST['ProductName'];
		$productprice = $_POST['ProductPrice'];
		$start = $_POST['startDate'];
		$end = $_POST['endDate'];


		$sql = "UPDATE `shell` SET ProductPrice='$_POST[ProductPrice]',startDate='$_POST[startDate]',endDate='$_POST[endDate]' WHERE ProductName ='$_POST[ProductName]'";
		$result = mysqli_query($conn,$sql);

	        
        if($result)
        {
            echo '<script> alert("Updated");</script>';
           
        }
        else
        {
           echo '<script> alert("Cannot be Updated");</script>';

        }
     
       }


 ?>   
</body>
</html>