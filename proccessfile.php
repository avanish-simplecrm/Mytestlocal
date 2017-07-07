<?php
$uploadfile = "./uploads/". basename($_FILES['file_contents']['name']);
echo '<pre>';
	if (move_uploaded_file($_FILES['file_contents']['tmp_name'], $uploadfile)) {
	    echo "file_contents--This file is valid, and was successfully uploaded.\n";
	} else {
	    echo "Possible file upload attack!\n";
	}

	if (move_uploaded_file($_FILES['another_file']['tmp_name'], $uploadfile)) {
	    echo "another_file--This file is valid, and was successfully uploaded.\n";
	} else {
	    echo "Possible file upload attack!\n";
	}
	echo 'Here is some more debugging info:';
	print_r($_FILES);
	echo "\n<hr />\n";
	print_r($_POST);
print "</pr" . "e>\n";
?>