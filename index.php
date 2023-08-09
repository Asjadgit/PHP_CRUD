<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Operation in PHP</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="main">
		<div class="inner">
			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				<h1>Registeration Form</h1>
				<div class="input-box">
					<input type="text" name="name" placeholder="Enter Your Name">					
				</div>

				<div class="input-box">
					<input type="number" name="age" placeholder="Enter Your Age">					
				</div>

				<div class="input-box">
					<input type="email" name="mail" placeholder="Enter Your Email">					
				</div>

				<div class="input-box">
					<textarea name="address" placeholder="Enter Your Address"></textarea>					
				</div>

				<button class="btn" name="btn">Register</button>				
			</form>
		</div>
	</div>
</body>
</html>



<?php 
include 'connection.php';
if (isset($_POST['btn'])) 
{
	$name = $_POST['name'];
	$age = $_POST['age'];
	$mail = $_POST['mail'];
	$address = $_POST['address'];

	$sql = "INSERT INTO practise (Name,Age,Email,Address) VALUES ('$name',$age,'$mail','$address')";
	$query = mysqli_query($con,$sql) or die('Query Failed');

	if ($query) {
		echo "<script>alert('Record added Successfully')</script>";
		header('location:show.php');
	}
	else
	{
		echo "<script>alert('Query Failed')</script>";
	}
}



 ?>