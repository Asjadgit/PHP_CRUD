<?php 

include 'connection.php';

//fetching the data of the record we want to update

$id = $_GET['id'];

$sql = "SELECT * FROM practise WHERE id = $id";

$query = mysqli_query($con,$sql) or die('Query Failed');
$row = mysqli_fetch_assoc($query);

 ?>

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
			<form method="POST">
				<h1>Update Record</h1>
				<div class="input-box">
					<input type="text" name="name" placeholder="Enter Your Name" value="<?php echo $row['Name']; ?>">					
				</div>

				<div class="input-box">
					<input type="number" name="age" placeholder="Enter Your Age" value="<?php echo $row['Age']; ?>">					
				</div>

				<div class="input-box">
					<input type="email" name="mail" placeholder="Enter Your Email" value="<?php echo $row['Email']; ?>">					
				</div>

				<div class="input-box">
					<input name="address" placeholder="Enter Your Address" value="<?php echo $row['Address'];?> "></input>					
				</div>

				<button class="btn" name="btn">Update</button>				
			</form>
		</div>
	</div>
</body>
</html>


<?php 
// upadte record by update query
if (isset($_POST['btn'])) 
{
	$name = $_POST['name'];
	$age = $_POST['age'];
	$mail = $_POST['mail'];
	$address = $_POST['address'];

	$update = "UPDATE practise SET Name = '$name', Age = $age, Email = '$mail', Address = '$address'  WHERE id = $id";

	$updatequery = mysqli_query($con,$update) or die('Query Failed');

	if ($updatequery) {
		header('location:show.php');
	}
	else
	{
		echo "<script>alert('Query Failed')</script>";
	}
}

 ?>
