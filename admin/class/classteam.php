<?php
include_once('../include/dbconfig.php');

class Team extends dbConnect
{
/*FUNCTION FOR REGISTERING NEW COMPETITION*/
public function teamRegister($tname,$tdescription,$tcompetition,$tstatus)
{
  $sql="SELECT * from team WHERE tname='$tname'";
  $result=mysqli_query($this->db,$sql);
  $userdata=mysqli_fetch_array($result);
  $count_row=$result->num_rows;
  if($count_row==0)
  {
    $sql4="INSERT into team SET tname='$tname',tdescription='$tdescription',tcompetition='$tcompetition',tstatus='1'";
    $result4=mysqli_query($this->db,$sql4) or die(mysqli_connect_errno()."data cannot be inserted");
    if($result4)
    {
      header('Location: index.php?id=9');
    }
  }
  else {
    echo "team already exists! Please try by changing the competition name ";
  }
}

Public function getAllTeam()
{
    $sql3="SELECT * FROM team ORDER BY tid LIMIT 0,30"  ;
    $result=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result))
    {
        echo "
        <tr>
            <td>".$row['tid']."</td>
            <td>".$row['tname']."</td>
            <td>".$row['tdescription']."</td>
            <td>".$row['tcompetition']."</td>
            <td>".$row['tstatus']."</td>
            <td><img src=".$row['tpath']." style='height:60px;width:60px;'></td>





            <td class='td-actions text-right'>

                <a href='editdelete.php?q=team&id=".$row['tid']." &ac=edit'><button type='button' rel='tooltip' title='Edit Team detail' class='btn btn-success btn-simple btn-xs'>
                    <i class='fa fa-edit'></i>
                </button></a>
                <a href='editdelete.php?q=team&id=".$row['tid']." &ac=delete'><button type='button' rel='tooltip' title='Delete Team' class='btn btn-danger btn-simple btn-xs'>
                    <i class='fa fa-times'></i>
                </button></a>
            </td>
        </tr>



        ";
    }

  }

    /*FUNCTION FOR EDITING THE DATA*/
    public function editTeam($id)
    {
      $sql6="SELECT * FROM Team WHERE tid=$id";
      $result=mysqli_query($this->db,$sql6);
      while($row=mysqli_fetch_array($result))
      {
          $tid=$row['tid'];
          $tname=$row['tname'];
        $tdescription=$row['tdescription'];
        $tcompetition=$row['tcompetition'];
        $tstatus=$row['tstatus'];
        echo "
          <kbd style='font-size:20px;'>Team Update</kbd><br>
          <div class='col-md-10'>
            <table class='table table-condensed'>
           <form action='editdelete.php?q=team&id=$tid&ac=edit' method='POST'>
             <tr><td colspan='2' >TEAM UPDATE</td></tr>
           <input type='hidden' name='tid' value=$tid>
           <tr><td>Team name :</td><td><input type='text' placeholder='Team name' name='tname' value='$tname'></td></tr>
           <tr><td>Team description :</td><td><textarea placeholder='Description' name='tdescription' style='width:100%;' rows='8' >".$row['tdescription']."</textarea></td></tr>
           <tr><td>Competition :</td><td><textarea placeholder='Competition' style='width:100%;' rows='10' name='tcompetition' >".$row['tcompetition']."</textarea></td></tr>
           <tr><td>Status :</td><td><input type='text' placeholder='Status' name='tstatus' value=$tstatus></td></tr>
           <tr><td colspan='2'><input type='submit' value='Update' class='btn btn-primary '></td></tr>
           </form>
           </table></div>";
                            }
                          }

      public function teamUpdate($tid,$tname,$tdescription,$tcompetition,$tstatus)
        {
          $sql7="UPDATE team SET tname='$tname',tdescription='$tdescription',tcompetition='$tcompetition',tstatus='$tstatus' WHERE tid=$tid";
          $result=mysqli_query($this->db,$sql7);
          if($result)
          {
                header('location: index.php?id=9');
          }
          else {
                  echo "Please try again!";
                }
          }
          public function deleteteam($id)
              {
                $sql5="DELETE from team WHERE tid=$id";
              $result = mysqli_query($this->db,$sql5);
              if($result)
              {
                header('location: index.php?id=9');
              }
              else
              {
                echo "Something wrong! Please Try Again";
              }
              }


}
