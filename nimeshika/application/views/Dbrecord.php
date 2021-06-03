
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title>Welcome to Dekma Higher Education Institute</title>

	<script type="text/javascript" src="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/bootstrap.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js'); ?>"></script>



	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/css/main.css">
	<script src="bootstrap-4.3.1-dist/bootstrap-4.3.1-dist/js/main.js"></script>
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
		<h1>Database Report</h1>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="card bg-light mb-3" style="max-width: 18rem;">
						<div class="card-body">
							<h5 class="card-title"> Total Number of Students</h5>
							<p class="card-text"><?php echo $Number_of_Students?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
</body>
</html>


