<?php
ob_start();

class search
{

  public function searchPlayer()
  {
    $db=new mysqli("localhost","root","","project") or die ('I cannot connect to the database  because: ' . mysql_error());
    @$query=$_POST['query'];

  $sqlsearch ="SELECT * FROM players WHERE pname LIKE '%".$query."%' ";
      $result = mysqli_query($db,$sqlsearch);
      if(mysqli_num_rows($result)>0)
    {
      while ($row=mysqli_fetch_array($result))
      {
         $pname=$row['pname'];
            $pfname=$row['pfname'];
         $pposition=$row['pposition'];
         $pteam=$row['pteam'];
         $page=$row['page'];
         $ppath=$row['ppath'];
        $pdob=$row['pdob'];
        $pheight=$row['pheight'];
        $pnationality=$row['pnationality'];
           return $pname;

          }
        }
      }

  public function getPlayer()
  {
$db=new mysqli("localhost","root","","project") or die ('I cannot connect to the database  because: ' . mysql_error());
    $searching = $this->searchPlayer();

 $sql3="SELECT * FROM players WHERE pname LIKE '%".$searching."%' ";
 $result3=mysqli_query($db,$sql3);
 echo "<span style='color:white;'>Recent Search:</span>";
  while($row=mysqli_fetch_array($result3))
  {
  $pteam=$row['pteam'];

      echo "<div class='ACon' style='margin-top:-10px;'>
  <div class='Profile'>
  <div class='Img'><img src='admin/".$row['ppath']."' style='height:168px;'>
    <div class='overlay'>
      <span><img /></span>
    </div>
  </div>
  <div class='PopUp'>Open Profile</div>
  <div class='clickPopUp' >
  <h5><a class='username' href=''>".$row['pfname']."</a></h5>
  <h5 class='buttons'>".$row['pteam']."</h5>
  <h5 class='buttons'>".$row['pposition']."</h5>
  <h5 class='buttons'>".$row['page']." years old</h5>
  <h5 class='buttons'>".$row['pheight']."</h5>
  <h5 class='buttons'>".$row['pdob']."</h5>
  <h5 class='buttons'>".$row['pnationality']."</h5>

  </div>
  </div>
  </div>
  
  ";





}
}
}



?>
