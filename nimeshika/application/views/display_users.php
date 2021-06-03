<!DOCTYPE html>
<html>
<head>
	<title>Display Recordss</title>

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
			<a class="navbar-brand" href="#"><h1>Registered Students</h1></a>
		</div>
		</div>
	</nav>


	<script src="main.js"></script>

	<div  class="container">
	<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Student Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        
        <?php foreach($data as $row){ ?>
	        <tr>
	            <td>
	                <?php echo "$row->id"; ?>
	            </td>
	            <td>
	                <?php echo "$row->name"; ?>
	            </td>
	            <td>
	                <?php echo "$row->email"; ?>
	            </td>
	           	<td>
	                <?php echo "$row->mobile"; ?>
	            </td>
	            <td>

	            	<a href="deletedata?id=<?php echo $row->id ?>" name="delete" class="btn btn-success">Delete</a>
	            </td>
	            <td>
	                <a href="updatedata?id=<?php echo $row->id ?>" name="update" class="btn btn-danger">Update</a>
	            </td>
	        </tr>
    	<?php } ?>
    </table>
</div>


</body>
</html>