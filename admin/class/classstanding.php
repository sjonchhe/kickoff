<?php
require_once('../include/dbconfig.php');

class Standing extends dbConnect
{
/*FUNCTION FOR REGISTERING NEW COMPETITION*/
public function teamRegister($ename,$emp,$ew,$ed,$el,$egf,$ega,$egd,$estatus)
{
  $sql="SELECT * from epl_table WHERE ename='$ename'";
  $result=mysqli_query($this->db,$sql);
  $userdata=mysqli_fetch_array($result);
  $count_row=$result->num_rows;
  if($count_row==0)
  {
    $sql4="INSERT into team SET ename='$ename',emp='$emp',ew='$ew',ed='$ed',el='$el',egf='$egf',ega='$ega',egd='$egd',estatus='1'";
    $result4=mysqli_query($this->db,$sql4) or die(mysqli_connect_errno()."data cannot be inserted");
    if($result4)
    {
      header('Location: leaguetable.php');
    }
  }
  else {
    echo "team already exists! Please try by changing the competition name ";
  }
}



    /**FOR LALIGA**/
    Public function getAllteamlaliga()
    {
        $sql3="SELECT * FROM laliga_table  ORDER BY lpts DESC LIMIT 0,30"  ;
        $result=mysqli_query($this->db,$sql3);


        while($row=mysqli_fetch_array($result))
        {
          echo "
          <tr>
          <form action='class/classeditstanding.php?league=laliga' method='POST'>
            <td></td>
               <td ><input type='hidden'  class='form-control' name='lid' value='".$row['lid']."''></td>
              <td><img src='../gallery/logo/laliga/".$row['lphoto']."' style='height:30px;width:30px; alt='logo'></td>

              <td style='width:200px;'><input type='text' class='form-control' name='lname' value='".$row['lname']."'></td>
              <td style='width:80px;'><input type='number' class='form-control' name='lmp' value='".$row['lmp']."'></td>
              <td style='width:90px;'><input type='number' class='form-control' name='lw' value='".$row['lw']."'></td>
              <td style='width:80px;'><input type='number' class='form-control' name='ld' value='".$row['ld']."'></td>
              <td style='width:80px;'><input type='number' class='form-control' name='ll' value='".$row['ll']."'></td>
              <td style='width:80px;'><input type='number' class='form-control' name='lgf' value='".$row['lgf']."'></td>
              <td style='width:80px;'><input type='number' class='form-control' name='lga' value='".$row['lga']."'></td>
              <td style='width:80px;'><input type='number' class='form-control' name='lgd' value='".$row['lgd']."'></td>
              <td style='width:80px;'><input type='number' class='form-control' name='lpts' value='".$row['lpts']."' ></td>
              <td style='width:80px;'><input type='number' class='form-control' name='lstatus' value='".$row['lstatus']."'></td>

              <td class='td-actions text-right'>
              <input type='submit' value='Update' class='btn btn-success btn-simple '>


              </td>
              </form>
          </tr>  ";
        }

      }




Public function getAlleteam()
{
    $sql3="SELECT * FROM epl_table  ORDER BY epts DESC LIMIT 0,30"  ;
    $result=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result))
    {
        echo "
        <tr>
        <form action='class/classeditstanding.php?league=epl' method='POST'>
          <td></td>
             <td ><input type='hidden'  class='form-control' name='eid' value='".$row['eid']."''></td>
            <td><img src='../gallery/logo/epl/".$row['ephoto']."' style='height:30px;width:30px; alt='logo'></td>

            <td style='width:200px;'><input type='text' class='form-control' name='ename' value='".$row['ename']."'></td>
            <td style='width:80px;'><input type='number' class='form-control' name='emp' value='".$row['emp']."'></td>
            <td style='width:90px;'><input type='number' class='form-control' name='ew' value='".$row['ew']."'></td>
            <td style='width:80px;'><input type='number' class='form-control' name='ed' value='".$row['ed']."'></td>
            <td style='width:80px;'><input type='number' class='form-control' name='el' value='".$row['el']."'></td>
            <td style='width:80px;'><input type='number' class='form-control' name='egf' value='".$row['egf']."'></td>
            <td style='width:80px;'><input type='number' class='form-control' name='ega' value='".$row['ega']."'></td>
            <td style='width:80px;'><input type='number' class='form-control' name='egd' value='".$row['egd']."'></td>
            <td style='width:80px;'><input type='number' class='form-control' value='".$row['epts']."'  name='epts' ></td>
            <td style='width:80px;'><input type='number' class='form-control' name='estatus' value='".$row['estatus']."'></td>

            <td class='td-actions text-right'>
            <input type='submit' value='Update' class='btn btn-success btn-simple '>


            </td>
            </form>
        </tr>  ";
    }

  }



}
