<!DOCTYPE html>
<html>
<head>
	<title>Drag And Drop DropZone</title>
	<link rel="stylesheet" type="text/css" href="css/dropzone.css" />
</head>
<body>

	<form action="upload.php" class="dropzone">
		<button id="startUpload">UPLOAD</button>
	</form>

	<?php
// Include the database configuration file
require 'dbConfig.php';

// Get files from the database
$query = $db->query("SELECT * FROM files ORDER BY id DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $filePath = 'uploads/'.$row["file_name"];
        $fileMime = mime_content_type($filePath);
?>
	<embed src="<?php echo $filePath; ?>" type="<?php echo $fileMime; ?>" width="350px" height="280px" />
<?php }
}else{ ?>
    <p>No file(s) found...</p>
<?php } ?>

</body>
<script type="text/javascript" src="js/dropzone.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script>
//Disabling autoDiscover
Dropzone.autoDiscover = false;

$(function() {
    //Dropzone class
    var myDropzone = new Dropzone(".dropzone", {
		url: "upload.php",
		paramName: "file",
		maxFilesize: 2,
		maxFiles: 10,
		acceptedFiles: "image/*,application/pdf",
		autoProcessQueue: false
	});
	
	$('#startUpload').click(function(){           
		myDropzone.processQueue();
	});
});
</script> -->


<script>
//Disabling autoDiscover
Dropzone.autoDiscover = false;

$(function() {
    //Dropzone class
    var myDropzone = new Dropzone(".dropzone", {
		url: "upload.php",
		paramName: "file",
		maxFilesize: 2,
		maxFiles: 10,
		acceptedFiles: "image/*,application/pdf"
	});
});
</script>
</html>