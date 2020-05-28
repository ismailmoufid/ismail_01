<?php
if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
    print_r($file);
	$fileName = $_FILES['file']['name'];
	$fileSize = $_FILES['file']['size'];
	$fileType = $_FILES['file']['type'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileError = $_FILES['file']['error'];

	$fileExt = explode('.', $fileName);
    $fileActualExt = strtolower("end($fileExt)");

    $allowed = array('jpg','jpeg','png','pdf');

    if (in_array($fileActualExt, $allowed)) {
    	if ($fileError === 0) {
    		if ($fileSize < 5000000){
    			$fileNameNew = uniqid('',true).".".$fileActualExt;
    			$fileDestination = 'uploads/'.$fileNameNew;
    			move_uploaded_file($fileTmpName, $fileDestination);
    			header("loation: index.html?uploadsuccess");
    		}else{
    			echo "Sorry , but your file is too big .";
    		}
    	}else{
    		echo "There was an error uploading your file .";
    	}
    }else{
    	echo "Sorry , but you cannot upload files of this type .";
    }
}