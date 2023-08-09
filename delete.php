<?php 
include 'connection.php';

$id = $_GET['id'];


$dlt = "DELETE FROM practise WHERE id = $id";

$query = mysqli_query($con,$dlt) or die('Query Failed');

if ($query) {
	header('location:show.php');
}
else
{
	echo "Some error in query";
}

 ?>