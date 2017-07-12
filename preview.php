<?php
$server     = 'localhost';
$user       = 'root';
$pass       = '';
$database   = 'bloob';

$con        = mysqli_connect($server, $user, $pass, $database);

if(isset($_GET['image_id'])) {
	$sql = "SELECT * FROM gambar WHERE id=" . $_GET['image_id'];
	$result = mysqli_query($con, "$sql") or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
	$row = mysqli_fetch_array($result);
//header("Content-type: " . $row["imageType"]);
	echo $row["image"];
}
mysqli_close($con);
?>