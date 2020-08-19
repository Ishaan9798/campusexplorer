<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: master.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style media="screen">

nav .site-logo img{
width: 10%;
float: left;
height: 50px;
}

nav .btn-group{
margin: 0 0 0 auto;
width: 90%;
height: 50px;
text-align: right;
background-color: black;
/*background: linear-gradient(45deg,black 25%, red 50%, black 75%);
color: rgb(200,200,200);*/
}



.btn-group .button {
	background-color: black;
	border: none;
	color: rgb(200,200,200);
	background:black;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	transition: all 0.5s;
	cursor: pointer;
	float: right;
}
.btn-group .button span{
cursor: pointer;
display: inline-block;
position: relative;
color: white;
transition: 0.5s;

}

.btn-group .button span:after{
content: '\00bb';
position: absolute;
opacity: 0;
top: 0;
right: -20px;
transition: 0.5s;
}

.btn-group .button:hover span {
padding-right: 25px;
}

.btn-group .button:hover span:after {
opacity: 1;
right: 0;
}

</style>
<body>
	<nav>
      <a href="#"></a>
      <span class="site-logo">
      <a href="C:\Users\Sree Hari K\Desktop\class notes\DANCE WEBSITE\master.html"><img src="../assets/images/logo.png" alt="w.o.d"></a>
      </span>
  <div class="btn-group">
    <!-- <a href="C:\Users\Sree Hari K\Desktop\class notes\DANCE WEBSITE\abt\abtus.html"></a> -->
    <button class="button" id="contct"><a href="C:\Users\Sree Hari K\Desktop\class notes\DANCE WEBSITE\contact.html"><span>Contact</span></button></a>
    <button class="button" id="abt"><a href="C:\Users\Sree Hari K\Desktop\class notes\DANCE WEBSITE\abt\abtus.html"><span>About Us</span></button></a>
    <button class="button" id="sgnin"><span>Sign-Up</span></button>
    <button class="button" id="sgnup"><span>Sign-In</span></button>

  </div>
    </nav>
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>

</body>
</html>
