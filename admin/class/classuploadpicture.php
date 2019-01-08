<?php
$db=new mysqli("localhost","root","","project");
$userid=$_POST['userid'];
$target_dir = "../gallery/profile/";
$target_file = $target_dir . basename($_FILES["propic"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$url="gallery/profile/";

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["propic"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["propic"]["tmp_name"], $target_file)) {

        $a=$url . basename($_FILES["propic"]["name"]);
				$sql1="UPDATE user SET upath='$a' WHERE userid=$userid";
				$result1=mysqli_query($db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
				if($result1)
				{

					@header('Location: ../index.php?id=2');

				 }
				 else
				 {
						exit("Error While uploading image on the server");
				 }
    }
}
?>
