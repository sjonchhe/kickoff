<?php
include_once('dbconfig.php');
class Menu extends dbConnect {


  public function menuDisplay(){

			$sql3="SELECT * from menu WHERE mparent=0 AND mname!='Home' AND mstatus=1 ORDER BY morder ASC LIMIT 0, 30 ";
			$result = mysqli_query($this->db,$sql3);

			echo "<ul class='nav navbar-nav topmenu'>";

			echo "<li> <a href='index.php'>Home</a></li>";
	        while($row=mysqli_fetch_array($result)) {
            $id=$row['mid'];
            $sql8 = " SELECT * FROM menu WHERE mparent =$id";
              $qry=mysqli_query($this->db,$sql8);
              $count=mysqli_num_rows($qry);
              if($count>=1)
					{
						echo "<li ><a href=pages.php?id=".$row['mid']." >".$row['mname']."</a>";
            echo "<ul class='submenu dropdown-menu '>";
						while($subrow=mysqli_fetch_array($qry))
						{
							echo "<li><a href=pages.php?id=".$subrow['mid']." >".$subrow['mname']."</a>	</li>";
						}

						echo "</ul></li>";

					}
	           else {
	             {

                 echo "
    	           <li><a href=pages.php?id=".$row['mid']." >".$row['mname']."</a></li>";
               }
	           }



	        }

	        echo "</ul>";
    	}
    }

?>
