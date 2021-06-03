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

</head>
<body>

	<nav class="navbar navbar-inverse">
		<div class="contrainer-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#"><h1>Dekma Higher Education Institute Student Management System </h1></a>
		</div>
		</div>
	</nav>


	<nav class="navbar navbar-expand-md">

		<a class="navbar-brand" href="#">Logo</a>

		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="main-navigation">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="/nimeshika/index.php/Registration/savedata">| Home</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="/nimeshika/index.php/Registration/about">| About</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="/nimeshika/index.php/Registration/about">| Contact</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="/nimeshika/index.php/Registration/report">| Report</a>
				</li>
			</ul>
		</div>
	</nav>

	

	<div>
		<center>
		<h2 class="feature style"> Dekma</h2>
		<p>Founded by Janaka Abeywardana in 2006, today, Dekma Higher Educational Institute has become the foremost learning center for the highest number of advanced level students in the Southern Province in Sri Lanka. Every year its students top the ranking in island’s A/L Examination but not limiting to that, the Institute also ensures its students are well disciplined, nature loving, creative humans who are ready to step out into the society. Thus the theme, “Education along with Humanity” at Dekma Higher Educational Institute.</p>
	</center>
    

		<center>
			<div class="container ">
				<?php echo anchor('Form_Controller/form', 'Sign In', ['class' => 'btn btn-primary'] );
				?>
			</div>

			<br>
			<br>
			
			<div class="container">
				<?php echo anchor('Registration/savedata', 'Create an Account', ['class' => 'btn btn-primary'] );
				?>
			</div>
		</center>
	</div>	




</body>
</html>