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