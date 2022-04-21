<?php 
include('includes/headermain.php');
 include('includes/navmain.php'); ?>

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
      	      action="shell.func.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h3 class="text-center p-3">PRODUCT INPUT</h3>
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
		           class="form-label">PRODUCT PRICE</label>
		    <input type="text" 
		           class="form-control" 
		           name="ProductPrice" 
		           id="ProductPrice">
		  </div>
         <button type="submit" name="add"
		          class="btn btn-primary">ADD</button>
		</form>
      </div>
    </main>
    
</body>
</html>>