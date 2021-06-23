<html>
<body>
<p>The file uploaded is <strong><?=$_FILES["fileToUpload"]["name"]?></strong></p>
<p>Temporarily generated server name is <strong><?=$_FILES["fileToUpload"]["tmp_name"]?></strong></p>
<p>Bool <strong><?=is_uploaded_file($_FILES["fileToUpload"]["tmp_name"]);?></strong></p>
<p>Booooool <strong><?=is_uploaded_file($_FILES["fileToUpload"]["name"]);?></strong></p>
<p>Result <strong><?=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $_FILES["fileToUpload"]["name"]);?></strong></p>
</body>
</html>
