<?php 

include 'connection.php';

$sql = "SELECT * FROM practise";
$query = mysqli_query($con,$sql) or die('Query Failed');

$output = "";

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Operation in PHP</title>
	<style>
		.btn
		{
			text-decoration: none;
			background: #1abc9c;
			color: #fff;
			padding: 4px 8px;
			border-radius: 3px;
			position: relative;
			top: 20px;
			margin-left: 20px;
			transition: .35s ease-in-out;
		}
		.btn:hover
		{
			background: #079992;
/*			padding: 5px 9px;*/
		}
		.edt
		{
			background: #74b9ff;
			border: none;
			border-radius: 3px;
			padding: 4px 8px;
			cursor: pointer;
			transition: .35s;
			color: #fff;
		}
		.edt:hover
		{
			background: #0984e3;
		}
		.dlt
		{
			background: #ff6b6b;
			border: none;
			border-radius: 3px;
			padding: 4px 8px;
			cursor: pointer;
			transition: .35s;
			color: #fff;	
		}
		.dlt:hover{
			background: #ee5253;
		}
	</style>
</head>
<body style="font-family: 'Poppins',sans-serif;">

	<a class="btn" href="index.php" style="">Add New User</a>


	<table width="100%" cellpadding="10px" cellspacing="0" border="1px" style="position: relative;margin-top: 30px;">
		<thead>
			<th>id</th>
			<th>Name</th>
			<th>Age</th>
			<th>Email</th>
			<th>Address</th>
			<th colspan="2">Operations</th>
		</thead>

		<tbody>
			<?php
			if (mysqli_num_rows($query)>0) { 
				while ($row = mysqli_fetch_assoc($query)) 
				{
					$output .= "<tr align='center'>
								<td>{$row['id']}</td>
								<td>{$row['Name']}</td>
								<td>{$row['Age']}</td>
								<td>{$row['Email']}</td>
								<td>{$row['Address']}</td>
								<td><a href='update.php?id={$row['id']}'><button class='edt'>Edit</button></a></td>
								<td><a href='delete.php?id={$row['id']}'><button class='dlt'>Delete</button></a></td>
								</tr>";
				}
			}
			echo $output;
			?>
		</tbody>
	</table>
</body>
</html>