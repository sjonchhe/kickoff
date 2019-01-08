<?php
include_once('../include/dbconfig.php');

class Player extends dbConnect
{
/*FUNCTION FOR REGISTERING NEW COMPETITION*/
public function playerRegister($pname,$pposition,$pleague,$pteam,$pnationality,$pdob,$page,$pfname,$plname,$psnum,$pfoot,$pheight,$target_path)
{
  $sql="SELECT * from players WHERE pname='$pname'";
  $result=mysqli_query($this->db,$sql);
  $userdata=mysqli_fetch_array($result);
  $count_row=$result->num_rows;
  if($count_row==0)
  {
    $sql1="INSERT into players SET pname='$pname',pposition='$pposition',pleague='$pleague',pteam='$pteam',pnationality='$pnationality',pdob='$pdob',page='$page',pfname='$pfname',plname='$plname',psnum='$psnum',pfoot='$pfoot',pheight='$pheight',ppath='$target_path'";
    $result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
    if($result)
    {
      header('Location: index.php?id=5');
    }
  }
  else {
    echo "Player already exists! Please try by changing the Player name ";
  }
}

Public function getAllPlayer()
{
    $sql3="SELECT * FROM players ORDER BY pid LIMIT 0,30"  ;
    $result=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result))
    {
        echo "
        <tr>
            <td>".$row['pid']."</td>
            <td>".$row['pname']."</td>
            <td>".$row['pposition']."</td>
            <td>".$row['pleague']."</td>
            <td>".$row['pteam']."</td>
            <td>".$row['pnationality']."</td>
            <td>".$row['pdob']."</td>
            <td>".$row['page']."</td>
            <td>".$row['pfname']."</td>
            <td>".$row['plname']."</td>
            <td>".$row['psnum']."</td>
            <td>".$row['pfoot']."</td>
            <td>".$row['pheight']."</td>
            <td><img src=".$row['ppath']." style='height:60px;width:50px;'></td>




            <td class='td-actions text-right'>

                <a href='editdelete.php?q=player&zid=".$row['pid']." &ac=edit'><button type='button' rel='tooltip' title='Edit Player detail' class='btn btn-success btn-simple btn-xs'>
                    <i class='fa fa-edit'></i>
                </button></a>
                <a href='editdelete.php?q=player&zid=".$row['pid']." &ac=delete'><button type='button' rel='tooltip' title='Delete Player' class='btn btn-danger btn-simple btn-xs'>
                    <i class='fa fa-times'></i>
                </button></a>
            </td>
        </tr>



        ";
    }

  }

              public function deletePlayer($id)
            	{
            		$sql5="DELETE from players WHERE pid=$id";
        			$result = mysqli_query($this->db,$sql5);
        			if($result)
        			{
        				header('location:index.php?id=5');
        			}
        			else
        			{
        				echo "Something wrong! Please Try Again";
        			}
            	}


  /*FUNCTION FOR EDITING THE DATA*/
  public function editPlayer($id)
  {
    $sql6="SELECT * FROM players WHERE pid=$id";
    $result=mysqli_query($this->db,$sql6);
    while($row=mysqli_fetch_array($result))
    {
      $pid=$row['pid'];
      $pname=$row['pname'];
      $pposition=$row['pposition'];
      $pleague=$row['pleague'];
      $pteam=$row['pteam'];
      $pnationality=$row['pnationality'];
      $pdob=$row['pdob'];
      $page=$row['page'];
      $pfname=$row['pfname'];
      $plname=$row['plname'];
      $psnum=$row['psnum'];
      $pfoot=$row['pfoot'];
      $pheight=$row['pheight'];

      echo "
      <script src='../assets/Date/jquery.min.js'></script>

      <script src='../assets/Date/datedropper.js'></script>

      <div class='container-fluid'>
      <div class='row'>
      <div class='col-md-12'>
      <div class='content'>
      <h3>Player Update</h3>
      <form action='editdelete.php?q=player&zid=$pid&ac=edit' method='POST' enctype='multipart/form-data'>
      <input type='hidden' name='pid' value=$pid>

      <div class='form-group label-floating'>
      <label class='control-label'>Name</label>
      <input type='text' class='form-control' name='pname' placeholder='Player name' value='$pname' >
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Playing Position</label>
      <input type='text' class='form-control' name='pposition'  placeholder='Playing Position' value='$pposition'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>League</label>
      <input type='text' class='form-control' name='pleague'  placeholder='League' value='$pleague'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Team</label>
      <input type='text' class='form-control' name='pteam'  placeholder='Team' value='$pteam'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Nationality</label>
      <input type='text' class='form-control' name='pnationality' value='$pnationality'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Date of Birth</label>
      <input type='text' class='form-control' name='pdob'  placeholder='pdob' value='$pdob'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Age</label>
      <input type='text' class='form-control' name='page'  placeholder='Age' value='$page'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Full Name</label>
      <input type='text' class='form-control' name='pfname'  placeholder='Full name' value='$pfname'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Last name</label>
      <input type='text' class='form-control' name='plname' value='$plname'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Shirt number</label>
      <input type='text' class='form-control' name='psnum'  placeholder='Shirt number for club' value='$psnum'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Preferred Foot</label>
      <input type='text' class='form-control' name='pfoot'  placeholder='preferred foot' value='$pfoot'>
      </div>
      <div class='form-group label-floating'>
      <label class='control-label'>Height</label>
      <input type='text' class='form-control' name='pheight' value='$pheight'>
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

  public function playerUpdate($pid,$pname,$pposition,$pleague,$pteam,$pnationality,$pdob,$page,$pfname,$plname,$psnum,$pfoot,$pheight)

  {
    $sql7="UPDATE players SET pname='$pname',pposition='$pposition',pleague='$pleague',pteam='$pteam',pnationality='$pnationality',pdob='$pdob',page='$page',pfname='$pfname',plname='$plname',psnum='$psnum',pfoot='$pfoot',pheight='$pheight' WHERE pid=$pid";
    $result=mysqli_query($this->db,$sql7);
    if($result)
    {
      header('location:index.php?id=5');
    }
    else {
      echo "Please try again!";
    }

  }

}
