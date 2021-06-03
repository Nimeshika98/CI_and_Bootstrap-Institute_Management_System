<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Dekma Higher Education Institute</title>


	<script type="text/javascript" src="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js'); ?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.css'); ?>">
	<style>
		body{
			background: #e590b7;
		}
		input[type=submit]{
			background: #e590b7;
			color: white;
		}
	</style>

</head>
<body>

<div class="container features">
<div class="row">

	<div class="col-lg-10 col-md-8 col-sm-12">
	<h2 class="feachure style" >Login</h2>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="was-validated">
			    <div class="form-group">
			      	<label for="name">Student Id :</label>
			      		<input type="text" class="form-control" id="id" placeholder="Enter id" name="id" value="<?php echo set_value('id'); ?>" required>
			      			<?php if(form_error('id'))
							{
								echo "<span style='color:red'>".form_error('id')."</span>";
							}
							?>
				      		<div class="valid-feedback">Valid.</div>
				      		<div class="invalid-feedback">Please fill out this field.</div>
			    </div>

			    <div class="form-group">
			      	<label for="email">Email:</label>
			      		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo set_value('email'); ?>" required>
			      			<?php if(form_error('email'))
							{
								echo "<span style='color:red'>".form_error('email')."</span>";
							}
							?>
			      			<div class="valid-feedback">Valid.</div>
			      			<div class="invalid-feedback">Please fill out this field.</div>
			    </div>
			    <div class="form-group form-check">
			      <label class="form-check-label">
			        <input class="form-check-input" type="checkbox" name="remember" required> I agree terms.
				        <div class="valid-feedback">Valid.</div>
				        <div class="invalid-feedback">Check this checkbox to continue.</div>
			      </label>
			    </div>
			   
			  </form>
			  <br>
			  <div class="container">
				<?php echo anchor('Form_Controller/form', 'Log', ['class' => 'btn btn-primary'] );
				?>
			</div>
		</div>

</div>
</div>

</body>
</html>