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

	<script type="text/javascript">
		var a = 
	</script>
</body>
</html>