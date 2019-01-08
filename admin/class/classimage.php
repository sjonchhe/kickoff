<?php
include_once('../include/dbconfig.php');

class Gallery extends dbConnect {
	public function getAllGallery()
	{

		$sql3="SELECT * from gallery WHERE gstatus=1 ORDER BY gid DESC  ";
		$result = mysqli_query($this->db,$sql3);

		$c=1;
		while($row=mysqli_fetch_array($result)) {


			echo "
			<tr>
			<td>".$row['gid']."</td>
			<td>".$row['gtype']."</td>
			<td>".$row['gtitle']."</td>
			<td>".$row['vpath']."</td>
			<td>".$row['gdescription']."</td>
			<td><img src='".$row['gpath']."' style='height:90px;width:130px;'></td>
			<td>".$row['gdate']."</td>
			<td>".$row['gstatus']."</td>
			<td class='td-actions text-right'>

			<a href='editdelete.php?q=gallery&zid=".$row['gid']." &ac=edit'><button type='button' rel='tooltip' title='Edit' class='btn btn-success btn-simple btn-xs'>
			<i class='fa fa-edit'></i>
			</button></a>
			<a href='editdelete.php?q=gallery&zid=".$row['gid']." &ac=delete'><button type='button' rel='tooltip' title='Delete' class='btn btn-danger btn-simple btn-xs'>
			<i class='fa fa-times'></i>
			</button></a>
			</td>
			</tr>
			";


		}

	}
	/*FUNCTION FOR UPLOADING GALLERY PHOTOS/VIDEO*/
	public function galleryUpload($gtype,$gtitle,$vpath,$gdescription,$gpath,$gstatus)
	{
		$gtitle=addslashes($gtitle);
		$gdescription=addslashes($gdescription);
		$gtitle=addslashes($gtitle);

		if(!$gpath="")
		{
			$gdate=date('Y-m-d H:i:s');
			$target_dir = "gallery/";
			$target_file = $target_dir . date("d-m-Y")."-".time() . basename($_FILES["gpath"]["name"]) ;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			$url="gallery/";

			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES["gpath"]["size"] > 50000000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "<script>alert('Sorry, your file was not uploaded.');</script>";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["gpath"]["tmp_name"], $target_file)) {

						$sql1="INSERT into gallery SET gtype='$gtype',gtitle='$gtitle',vpath='$vpath',gdescription='$gdescription',gpath='$target_file',gdate='$gdate',gstatus='1'";
						$result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
						if($result1)
						{
							echo "hello";
							move_uploaded_file($_FILES["gpath"],"gallery/".$img_name);

							//echo "Stored in: "."gallery/".$img_name;
							@	header('Location: index.php?id=7');
						}
						else{
 							exit("Error While uploading image on the server");
 					 }
			    }

			}
}
else {
	$gpath="video";
	$sql1="INSERT into gallery SET gtype='$gtype',gtitle='$gtitle',vpath='$vpath',gdescription='$gdescription',gpath='$gpath',gdate='$gdate',gstatus='1'";
	$result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
	if($result1)
	{
		echo "hello";
		move_uploaded_file($_FILES["gpath"],"gallery/".$img_name);

		//echo "Stored in: "."gallery/".$img_name;
		@	header('Location: index.php?id=7');
	}
	else{
		exit("Error While uploading image on the server");
 }


}


		}




	/*FUNCTION FOR EDITING THE DATA*/
	public function editGallery($id)
	{
		$sql6="SELECT * FROM gallery WHERE gid=$id";
		$result=mysqli_query($this->db,$sql6);
		while($row=mysqli_fetch_array($result))
		{
			$gid=$row['gid'];
			$gtype=$row['gtype'];
			$gtitle=addslashes($row['gtitle']);
			$vpath=$row['vpath'];
			$gdescription=$row['gdescription'];
			$gpath=$row['gpath'];
			$gstatus=$row['gstatus'];
			echo "




			<div class='container-fluid'>
			<div class='row'>
			<div class='col-md-12'>
			<div class='content'>
			<h3>Gallery/Photo/Video Update</h3>
			<form action='editdelete.php?q=gallery&zid=$gid&a
			c=edit' method='POST' enctype='multipart/form-data'>
			<input type='hidden' name='gid' value=$gid>
			<div class='form-group label-floating'>
			<label class='control-label'>Type</label>
			<select name='gtype'>
			<option value='gallery'>Photo</option>
			<option value='video'>Video</option>

			</select>
			</div>
			<div class='form-group label-floating'>
			<label class='control-label'>Title</label>
			<input type='text' class='form-control' name='gtitle' value='$gtitle'>
			</div>
			<div class='form-group label-floating'>
			<label class='control-label'>Video URL</label>
			<textarea class='form-control' name='vpath'>".$row['vpath']."</textarea>
			</div>
			<div class='form-group label-floating'>
			<label class='control-label'>Description</label>
			<textarea class='form-control' name='gdescription'>".$row['gdescription']."</textarea>
			</div>

			<div class='form-group label-floating'>
			<label class='control-label'>Path</label>
			<input type='file' class='form-control' name='gpath' value='$gpath'>
			</div>
			<div class='form-group label-floating'>
			<label class='control-label'>Status</label>
			<input type='text' class='form-control' name='gstatus' value='$gstatus'>

			</div>


			<div>
			<input type='submit' value='Update' class='btn btn-default'>
			</div>

			</form>


			</div>

			</div></div></div>
			";
		}
	}

	public function galleryUpdate($gid,$gtype,$gtitle,$vpath,$gdescription,$target_path,$gstatus)
	{
		function GetImageExtension($imagetype)
		{

			if(empty($imagetype)) return false;
			switch($imagetype)
			{
				case 'image/bmp': return '.bmp';
				case 'image/gif': return '.gif';
				case 'image/jpeg': return '.jpg';
				case 'image/png': return '.png';
				default: return false;
			}
		}

		if (!empty($_FILES["gpath"]["name"])) {
			$file_name=$_FILES["gpath"]["name"];
			$temp_name=$_FILES["gpath"]["tmp_name"];
			$imgtype=$_FILES["gpath"]["type"];
			$ext= GetImageExtension($imgtype);
			$imagename=date("d-m-Y")."-".time().$ext;
			$target_path = "gallery/".$imagename;
			if(move_uploaded_file($temp_name, $target_path))
			{

				$gtitle=addslashes($gtitle);
				$gdescription=addslashes($gdescription);
				$gdate=date('Y-m-d H:i:s');
				$sql7="UPDATE gallery SET gtype='$gtype',gtitle='$gtitle',vpath='$vpath',gdescription='$gdescription',gpath='$target_path',gdate='$gdate',gstatus='$gstatus' WHERE gid=$gid";
				$result=mysqli_query($this->db,$sql7);
				if($result)
				{
					header('location: index.php?id=7');
				}
				else {
					echo "Please try again!Update fail!";
				}
			}
		}
		else{
			exit("Error While uploading image on the server");
		}
	}

	public function deleteGallery($id)
	{
		$sql6="SELECT * FROM gallery WHERE gid=$id";
		$result9=mysqli_query($this->db,$sql6);
		while($row=mysqli_fetch_array($result9))
		{
			unlink($row['gpath']);
		}
		$sql5="DELETE from gallery WHERE gid=$id";
		$result = mysqli_query($this->db,$sql5);
		if($result)
		{
			header('location: index.php?id=7');
		}
		else
		{
			echo "Something wrong! Please Try Again!Delete Failed";
		}
	}

}



?>
