<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	#This print funcation is printing out a gesture and telling 
	#me what infomation i can grab/use in my code below
	#print_r($file);
	$fileName = $_Files['file']['name'];
	$fileTmpName = $_Files['file']['tmp_name'];
	$fileSize = $_Files['file']['size'];
	$fileError = $_Files['file']['error'];
	$fileType = $_Files['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	#Setting an array to make sure only image file can be sent
	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError == 0) {
			if ($fileSize < 500000) {
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header("Location: index.php?uploadsuccsess");
			} else {
				echo "Your file is too big!";
			}
		} else {
			echo "There was an error uploading your file!";
		}

	} else{
		echo "You cannot epload file of this type";
	}
}