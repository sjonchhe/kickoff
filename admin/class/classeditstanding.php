<?php

$league=$_GET['league'];
switch($league)
{
	case 'epl':
	 {
		 extract($_POST);
				  $db=new mysqli("localhost","root","","project");
				   $sql7="UPDATE epl_table SET ename='$ename',emp='$emp',ew='$ew',ed='$ed',el='$el',egf='$egf',ega='$ega',egd='$egd',epts='$epts',estatus='$estatus' WHERE eid='$eid'";
				   $result4=mysqli_query($db,$sql7) or die(mysqli_connect_errno()."data cannot be inserted");
				   if($result4)
				   {
				     //echo "hello2";
				        header('location: ../leaguetable1.php?id=8&page=epltable');
				   }
				   else
				   {
				         echo "Please try again!Update Failed!";
				   }
					 break;
 			 }
			 case 'laliga':
		 	 {
		 		 extract($_POST);
		 				  $db=new mysqli("localhost","root","","project");
		 				   $sql2="UPDATE laliga_table SET lname='$lname',lmp='$lmp',lw='$lw',ld='$ld',ll='$ll',lgf='$lgf',lga='$lga',lgd='$lgd',lpts='$lpts',lstatus='$lstatus' WHERE lid='$lid'";
		 				   $result5=mysqli_query($db,$sql2) or die(mysqli_connect_errno()."data cannot be inserted");
		 				   if($result5)
		 				   {
		 				     //echo "hello2";
		 				        header('location: ../leaguetable1.php?id=8&page=laligatable');
		 				   }
		 				   else
		 				   {
		 				         echo "Please try again!Update Failed!";
		 				   }
		 					 break;
		  			 }

}

 ?>
