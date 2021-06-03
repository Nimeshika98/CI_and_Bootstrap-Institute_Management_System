<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<script type="text/javascript" src="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.css'); ?>">

	<title>test reg</title>

	<style>
		body{
			background: #e590b7;
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
			
				<a class="navbar-brand" href="#"><h1>Register Here...</h1></a>
		</div>
		</div>
	</nav>

	<div class="container">
	 
	  <form name="userinput" class="form-horizontal" method="post">

	  	<div class="form-group">
	      <label class="control-label col-sm-2" for="name">Enter Your Name:</label>
	      <div class="col-sm-10">          
	        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" >
	      </div>
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Enter Your Email:</label>
	      <div class="col-sm-10">
	        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	      </div>
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2" for="mobile">Mobile:</label>
	      <div class="col-sm-10">          
	        <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile" >
	      </div>
	    </div>

	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <input type="submit" name="save"  value="Save">
	      </div>
	    </div>

	  </form>

	</div>







    <div class="container">
    	<center>
    		<?php echo anchor('Registration/displaydata', 'View Details', ['class' => 'btn btn-primary'] );
		?>
    	</center>
		
	</div>

</body>
</html>