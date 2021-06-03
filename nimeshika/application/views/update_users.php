<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<!DOCTYPE html>
<html>
<head>
	<title>test reg</title>

	


	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.css'); ?>">


	<style>
		body{
			background: #FFC0CB;
		}
		input[type=submit]{
			background: #8B008B;
			color: white;
		}
	</style>

	
</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="contrainer-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><h1>Update Here...</h1></a>
		</div>
		</div>
	</nav>



	<?php

		foreach($data as $row){ 
	 ?>

	<div class="container">
	 
	  <form class="form-horizontal" method="post">

	  	<div class="form-group">
	      <label class="control-label col-sm-2" for="name">Name:</label>
	      <div class="col-sm-10">          
	        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row->name; ?>">
	      </div>
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Email:</label>
	      <div class="col-sm-10">
	        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row->email; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="mobile">Mobile:</label>
	      <div class="col-sm-10">          
	        <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile" value="<?php echo $row->mobile; ?>">
	      </div>
	    </div>

	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        
	        <input type="submit" name="update"  value="Update Data">
	      </div>
	    </div>

	  </form>

	</div>

	 		<center>
	 			<div class="container">
				<?php echo anchor('Registration/displaydata', 'View Update Details', ['class' => 'btn btn-primary'] );
				?>
				</div>
	 		</center>

	 <?php } ?>
</body>
</html>