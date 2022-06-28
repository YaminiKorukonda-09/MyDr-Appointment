<!-- <!DOCTYPE html>
<html>
<head>
	<title>Doctor Patient</title>
	<link rel="stylesheet"  href="doctorpatient.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="id=edge">
</head>

<body>
	<h1 style="text-align: center; font-size:75px">MrDr Appointment</h1>
	<div class="wrapper">
		<div class="btn" > <a href="login3.php">
		<button type="button" class="buttonA" > Admin</button>

</div>

</div>


	<div class="wrapper" style="text-decoration: none;">
	<div class="btn" > <a href="login.php"  >
<button type="button" class="buttonP">Patient</button>
</div>

</div>


	<div class="wrapper" style="text-decoration: none;">
	<div class="btn" > <a href="login2.php"  >
<button type="button" class="buttonD">Doctor</button>
        </a>
</div>

</div> -->


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Website</title>
	
	<style>
	@import url('https://fonts.googleapis.com/css?family=Roboto:700&display=swap');
	*{
		padding: 0;
		margin: 0;
	}
	.wrapper{
		background: url("medical.jpg") no-repeat;
		background-size: cover;
		height: 100vh;
	}
	.navbar{
		position: fixed;
		height: 80px;
		width: 100%;
		top: 0;
		left: 0;
		background: rgba(0,0,0,0.4);
	}
	.navbar .logo{
		width: 140px;
		height: auto;
		padding: 10px 10px;
		border-radius: 50%;
		
	}
	.navbar ul{
		float: right;
		margin-right: 20px;
	}
	.navbar ul li{
		list-style: none;
		margin: 0 8px;
		display: inline-block;
		line-height: 80px;
	}
	.navbar ul li a{
		font-size: 20px;
		font-family: 'Roboto', sans-serif;
		color: white;
		padding: 6px 13px;
		text-decoration: none;
		transition: .4s;
	}
	.navbar ul li a.active,
	.navbar ul li a:hover{
		background: rgb(190, 120, 120);
		border-radius: 2px;
	}
	.wrapper .center{
		position: absolute;
		left: 50%;
		top: 55%;
		transform: translate(-50%, -50%);
		font-family: sans-serif;
		user-select: none;
	}
	.center h1{
		color: rgb(190, 120, 120);
		font-size: 70px;
		width: 900px;
		font-weight: bold;
		text-align: center;
	}
	.center h5{
		color: rgb(7, 7, 7);
		font-size: 20px;
		font-weight: bold;
		margin-top: 10px;
		width: 885px;
		text-align: center;
		margin-left: 10%;
	}
	.center .buttons{
		margin: 35px 280px;
	}
	.buttons button{
		height: 50px;
		width: 150px;
		font-size: 18px;
		font-weight: 600;
		color: #ffb3b3;
		background: red;
		outline: none;
		cursor: pointer;
		border: 1px solid #cc0000;
		border-radius: 25px;
		transition: .4s;
	}
	.buttons .btn2{
		margin-left: 25px;
	}
	.buttons button:hover{
		background: #cc0000;
	}
	</style>
</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="logo1.jpg">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="login3.php">Admin</a></li>
					<li><a href="login2.php">Doctor</a></li>
					<li><a href="login.php">Patient</a></li>
					<li><a href="https://www.who.int/health-topics/coronavirus">Corona Details</a></li>
				</ul>
			</nav>
			<div class="center">
			<h1>Welcome To MyDr Appointment</h1>
			<h5>Book your trusted doctor appointment</h5>
			<!-- <div class="buttons">
			<button>Explore More</button>
			<button class="btn2">Subscribe Us</button>
			</div> -->
		</div>
</body>
</html>

	

