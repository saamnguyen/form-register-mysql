<?php 
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])){
	//$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

	$uploaded_name = $_FILES['fileToUpload']['name'];
	$uploaded_ext = substr($uploaded_name, strrpos($uploaded_name, ".") + 1);
	$uploaded_type = $_FILES['fileToUpload']['type'];
	$uploaded_size = $_FILES['fileToUpload']['size'];
	$uploaded_tmp = $_FILES['fileToUpload']['tmp_name'];



	// Check image?
	if( ( strtolower( $uploaded_ext ) == "jpg" || strtolower( $uploaded_ext ) == "jpeg" || strtolower( $uploaded_ext ) == "png" ) &&
		( $uploaded_size < 100000 ) && getimagesize( $uploaded_tmp )) {

		// Can we move the file to the upload folder?
		if( !move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target_file )) {
			// No
			echo '<pre>Your image was not uploaded.</pre>';
		}
		else {
			// Yes!
			echo "File ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " da duoc upload!!!";
		}
	}
	else {
		// Invalid file
		echo  '<pre>Your '. htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . ' was not uploaded... We can only accept JPEG or PNG images.</pre>';
	}
}



?>