<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
	<style>
		.Dbody{
			background: url("doctorpic.jpg") no-repeat;
			background-position: center;
			background-size: cover;
			
		}
	</style>
</head>
<body class="Dbody">
	<div class="Dheader">
	<h2>Doctor Login</h2>
</div>

<form method="post" action="login2.php" class="Dform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupD">
		<label>Doctor ID</label>
		<input type="text" name="doctorID">

	</div>




	<div class="input-groupD">
		<label>Password</label>
		<input type="Password" name="doctorpassword">



	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> Login</button>
	</div>

	
	




</form>

</body>
</html>