<!DOCTYPE html>
<html>
	<title>Powered by M</title>
<body>

  <form action="./Page/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" accept=".png, .jpg, .jpeg" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>
<a href="./Page/about.php">About us</a>
</body>

</html>

<?php
	if(isset($_GET['file'])){
		include($_GET['file']);
	}
?>