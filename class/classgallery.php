<?php
	include_once('dbconfig.php');

	class Gallery extends dbConnect {





    	public function getAllSlider(){

			$sql3="SELECT * from article WHERE akeyword='slider' AND astatus=1 ORDER BY aid DESC LIMIT 0, 10 ";
			$result = mysqli_query($this->db,$sql3);

			//$c=1;
	        while($row=mysqli_fetch_array($result)) {
					/*	if($c==1)
							           {
							           	$isa="item active";
							           }
							           else
							           {
							           	$isa="item";

												}*/

	           echo "
						 <li class='current-slide'>
					 	<img src='admin/".$row['aphoto']."'  alt='".$row['aheading']."' style='height:500px;'>

					 	<div class='caption' style='width:100%;'>
					 		<h2 class='slider-title'>".$row['atitle']."</h2>
					 		<p>".$row['ashort']."</p>
					 	</div>
					 	</li>
";


	        }

    	}

public function getAllGallery()
{

	//$option=$_POST[''];
$gallery=$_POST['gallery'];
$video=$_POST['video'];
	if($video=='video')
	{
		$option='video';
		$sql3="SELECT * from gallery WHERE gtype='$option' AND gstatus=1 ORDER BY gid	 DESC LIMIT 0, 10 ";
		$result = mysqli_query($this->db,$sql3);

		$c=1;
				while($row=mysqli_fetch_array($result)) {


					 echo "


			<div class='col-md-4' style='height:200px;margin:10px 0px 10px 0px;'>
 			<div class='thumbnail' style='height:210px;'>
			<iframe src='".$row['vpath']."' style='width:100%;height:200px;frameborder='0' allowfullscreen></iframe>
			</div>
			</div>
		";
}}
else
{

					$option='gallery';



				//$option=$_POST['option'];

				$sql3="SELECT * from gallery WHERE gtype='$option' AND gstatus=1 ORDER BY gid	 DESC LIMIT 0, 40 ";
				$result = mysqli_query($this->db,$sql3);

				$c=1;
						while($row=mysqli_fetch_array($result)) {


							 echo "
							 <div class='col-md-3' >
		 <div class='thumbnail' style='height:180px;'>
								<a class='fancybox' href='admin/".$row['gpath']."' data-fancybox-group='gallery' title='".$row['gtitle']."' style='width:100%;' >
								<img src='admin/".$row['gpath']."'  style='height:170px;' alt=''></a>
							</div></div>
			";
	}
}
		}




	}
?>
