<?php
if (isset($_POST['submit'])) {
  $file = $_FILES['file'];
  
  echo $fileName = $_FILES['file'] ['name'];
  $fileTemName = $_FILES['file'] ['tmp_name'];
  $fileSize = $_FILES['file'] ['size'];
  $fileError = $_FILES['file'] ['error'];
 echo $fileType = $_FILES['file'] ['type'];

  $fileExt = explode('.', $fileNmae);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'JPEG', 'JPG', 'pdf' );

  if (in_array($fileActualExt)) {
  	if ($fileError === 0) {
  		if ($fileSize < 1000000) {
  		$fileNameNwe = uniqid('', true).".".$fileActualExt;
  		$fileDestination = 'upload/'.$fileNameNwe;
  		move_uploaded_file($fileTemName, $fileDestination);
        header("Location: uploads.php?uploadsuccess");
  	} else {
  		 echo "your file is too big!";
  	}
  } else{
  	echo "There was an error uploading your file";
   }
  } else {
        echo "You cannot upload files of this type!";
  	}
  }