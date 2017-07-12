<?php

$server     = 'localhost';
$user       = 'root';
$pass       = '';
$database   = 'bloob';

$con        = mysqli_connect($server, $user, $pass, $database);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Bloob</title>
</head>
<body>
	<form method="post" action="posting.php" enctype="multipart/form-data">
		<div>
			<label>Judul</label>
			<input type="text" name="judul" />
		</div>
		<div>
			<label>Input Gambar</label>
			<img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
			<input id="uploadImage" type="file" name="image" onchange="PreviewImage();" />
		</div>
		<button type="submit" name="simpan">Simpan</button>
	</form>

	<h1>Lihat file yang sudah diupload</h1>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Judul</th>
				<th>Nama</th>
				<th>Preview</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$kueri = mysqli_query($con, "SELECT * FROM gambar");
        while ($baris=mysqli_fetch_array($kueri))
        {
        	echo "<tr>";
        	echo "<td>" . $baris['id'] . "</td>";
        	echo "<td>" . $baris['judul'] . "</td>";
        	echo "<td>" . $baris['nama'] . "</td>";
        	echo "<td><img src=\"preview.php?image_id=".$baris['id']."\" width=\"250\" /></td>";
        	echo "</tr>";
        }
     ?>
		</tbody>
	</table>
</body>
</html>