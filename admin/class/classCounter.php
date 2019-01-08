<?php
class count{

  public function __construct()
  {
    $this->db=new mysqli('localhost','root','','project');

  }

function add_counter()
{
  $id=$_GET['id'];
$sql="UPDATE `article` set `acounter`= acounter+1 WHERE aid=$id";
mysqli_query($this->db,$sql);
}



function read_counter()
{
$sql1="SELECT * FROM `article`";
$result=mysqli_query($this->db,$sql1);
$acounter=0;
while($row=mysqli_fetch_array($result))
{
  $acounter=$row['acounter'];

}
echo "
    <div style='height:10px;'>
            Page view   <b>".$acounter."</b> </div>";
}

}

 ?>
