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
      	      action="price.func.php" 
      	      method="post" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">PRODUCT</h1>
		  <div class="mb-3">
		    <label for="rgas" 
		           class="form-label">Regular GAS PRICE</label>
		    <input type="text" 
		           class="form-control" 
		           name="rgas" 
		           id="rgas">
		  </div>
		  <div class="mb-3">
		    <label for="pgas" 
		           class="form-label">Premium GAS PRICE</label>
		    <input type="text" 
		           name="pgas" 
		           class="form-control" 
		           id="pgas">
		  </div>
          <div class="mb-3">
		    <label for="diesel" 
		           class="form-label">DIESEL PRICE</label>
		    <input type="text" 
		           name="diesel" 
		           class="form-control" 
		           id="diesel">
		  </div>
                
		  <button type="submit" name="POST"
		          class="btn btn-primary">Update</button>
		</form>
      </div>
    </main>

    
</body>
</html>