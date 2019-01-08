<?php
include_once('../include/dbconfig.php');

class Competition extends dbConnect
{
/*FUNCTION FOR REGISTERING NEW COMPETITION*/
public function competitionRegister($cname,$cdescription,$chistory,$cstatus)
{
  $sql="SELECT * from competition WHERE cname='$cname'";
  $result=mysqli_query($this->db,$sql);
  $userdata=mysqli_fetch_array($result);
  $count_row=$result->num_rows;
  if($count_row==0)
  {
    $sql1="INSERT into competition SET cname='$cname',cdescription='$cdescription',chistory='$chistory',cstatus='1'";
    $result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
    if($result)
    {
      header('Location: index.php?id=4');
    }
  }
  else {
    echo "Competition already exists! Please try by changing the competition name ";
  }
}

Public function getAllCompetition()
{
    $sql3="SELECT * FROM competition ORDER BY cid LIMIT 0,30"  ;
    $result=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result))
    {
        echo "
        <tr>
            <td>".$row['cid']."</td>
            <td>".$row['cname']."</td>
            <td>".$row['cdescription']."</td>
            <td>".$row['chistory']."</td>
            <td>".$row['cstatus']."</td>




            <td class='td-actions text-right'>

                <a href='editdelete.php?q=competition&id=".$row['cid']." &ac=edit'><button type='button' rel='tooltip' title='Edit Competition detail' class='btn btn-success btn-simple btn-xs'>
                    <i class='fa fa-edit'></i>
                </button></a>
                <a href='editdelete.php?q=competition&id=".$row['cid']." &ac=delete'><button type='button' rel='tooltip' title='Delete competition' class='btn btn-danger btn-simple btn-xs'>
                    <i class='fa fa-times'></i>
                </button></a>
            </td>
        </tr>



        ";
    }

  }

              /*FUNCTION FOR EDITING THE DATA*/
                      public function editCompetition($id)
                      {
                          $sql6="SELECT * FROM Competition WHERE cid=$id";
                          $result=mysqli_query($this->db,$sql6);
                          while($row=mysqli_fetch_array($result))
                          {
                              $cid=$row['cid'];
                              $cname=$row['cname'];
                              $cdescription=$row['cdescription'];
                              $chistory=$row['chistory'];
                              $cstatus=$row['cstatus'];

                              echo "
                              <kbd style='font-size:20px;'>Competition Update</kbd><br>
                              <div class='col-md-10'>
                                  <table class='table table-condensed'>
                                     <form action='editdelete.php?q=competition&id=$cid&ac=edit' method='POST'>
                                       <tr><td colspan='2' >COMPETITION UPDATE</td></tr>
                                       <input type='hidden' name='cid' value=$cid>
                                       <tr><td>Competition name :</td><td><input type='text' placeholder='Competition name' name='cname' value='$cname'></td></tr>
                                       <tr><td>Competition description :</td><td><textarea placeholder='Description' name='cdescription' style='width:100%;' rows='8' >".$row['cdescription']."</textarea></td></tr>
                                       <tr><td>History :</td><td><textarea placeholder='History' style='width:100%;' rows='10' name='chistory' >".$row['chistory']."</textarea></td></tr>
                                       <tr><td>Status :</td><td><input type='text' placeholder='mstatus' name='cstatus' value=$cstatus></td></tr>


                                       <tr><td colspan='2'><input type='submit' value='Update' class='btn btn-primary '></td></tr>
                                     </form>
                                 </table></div>";
                          }
                        }

    public function competitionUpdate($cid,$cname,$cdescription,$chistory,$cstatus)
      {
        $sql7="UPDATE competition SET cname='$cname',cdescription='$cdescription',chistory='$chistory',cstatus='$cstatus' WHERE cid=$cid";
        $result=mysqli_query($this->db,$sql7);
        if($result)
        {
              header('location: index.php?id=4');
        }
        else {
                echo "Please try again!";
              }
        }

        public function deletecompetition($id)
            {
              $sql5="DELETE from competition WHERE cid=$id";
            $result = mysqli_query($this->db,$sql5);
            if($result)
            {
              header('location: index.php?id=4');
            }
            else
            {
              echo "Something wrong! Please Try Again";
            }
            }

}
