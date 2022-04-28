<?php 
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['fileToUpload']["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

if(isset($_POST["submit"])){
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

	$uploaded_name = $_FILES['fileToUpload']['name'];
	$uploaded_type = $_FILES['fileToUpload']['type'];
	$uploaded_size = $_FILES['fileToUpload']['size'];

	//Check image?
	if(($uploaded_type == "image/jpeg" || $uploaded_type == "image/png") && ($uploaded_size < 100000)){

		if(!move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
			echo "Sorry, there was an error uploading your file.";
		}
		else{
			echo "File ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " da duoc upload!!!";
		}
	}else{
	echo "Sorry, there was an error uploading your file.";
}
}

// if($uploadOk == 0){
// 	echo "Xin loi, file cua ban khong upload duoc!!!";
// }else{
// 	if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)){
// 		echo "File ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " da duoc upload!!!";
// 	}else{
// 		echo "Sorry, there was an error uploading your file.";
// 	}
// }
?>