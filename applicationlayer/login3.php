<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
	<style>
		.Abody{
	/* font-size: 120%;
	background: url("add-admin.jpg"); */
		background: url("admin.jpg");
		height: 100%;
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		/* filter: blur(8px); */
		/* background-repeat: no-repeat; */

}
form{
	margin-top: 50%;
}
	</style>

</head>
<body class="Abody">
	<div class="Aheader">
	<h2>Admin Login</h2>
</div>

<form method="post" action="login3.php" class="Aform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupA">
		<label>Admin ID</label>
		<input type="text" name="adminID">

	</div>




	<div class="input-groupA">
		<label>Password</label>
		<input type="Password" name="adminpassword">



	<div class="input-groupA">
		<button type="submit" name="Login3" class="btnA" style="text-align:center"> Login</button>
	</div>

	
	




</form>

</body>
</html>