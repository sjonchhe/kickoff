<?php

include_once('../include/dbconfig.php');

ob_start ();
class User extends dbConnect
{
  /*FUNCTION FOR REGISTERING via userreg.php USER/ADMIN*/
  public function userReg($uname,$fname,$lname,$uemail,$ucontact,$upword,$uaddress,$target_upath)
  {
    $sql="SELECT * from user WHERE username='$uname' OR email='$uemail'";
    $result=mysqli_query($this->db,$sql);
    $userdata=mysqli_fetch_array($result);
    $count_row=$result->num_rows;
    if($count_row==0)
    {
      $sql1="INSERT into user SET username='$uname',first_name='$fname',last_name='$lname',email='$uemail',contact='$ucontact',password='$upword',address='$uaddress',upath='$target_upath',ustatus=0";
      $result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
      if($result)
      {

      	move_uploaded_file($_FILES["upath"],"gallery/profile/".$img_name);
        	@	header('Location: index.php?id=1');
      }
    }
    else {
      echo "User already exists! Please try by changing the username or a different email address.";
    }
  }
/*FUNCTION FOR REGISTERING USER/ADMIN from inside*/
public function userRegisterInside($uname,$fname,$lname,$uemail,$ucontact,$upword,$uaddress,$uabout,$udescription,$ustatus,$utype,$target_path)
{
  $sql="SELECT * from user WHERE username='$uname' OR email='$uemail'";
  $result=mysqli_query($this->db,$sql);
  $userdata=mysqli_fetch_array($result);
  $count_row=$result->num_rows;
  if($count_row==0)
  {
    $sql1="INSERT into user SET username='$uname',first_name='$fname',last_name='$lname',email='$uemail',contact='$ucontact',address='$uaddress',password='$upword',uabout='$uabout',udescription='$udescription',ustatus=1,utype='normal',upath='$target_path'";
    $result10=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
    if($result10)
    {
      move_uploaded_file($_FILES["upath"],"gallery/profile/".$img_name);
        @	header('Location: index.php?id=2');
    }
  }
  else {
    echo "User already exists! Please try by changing the username or a different email address.";
  }
}


/*FUNCTION FOR USER LOGIN*/
public function userLogin($username,$upassword)
{

  $sql2="SELECT userid from user WHERE username='$username'  and password='$upassword' and ustatus='1'";
  $result2=mysqli_query($this->db,$sql2);
  $user_data=mysqli_fetch_array($result2);
  $count_row=$result2->num_rows;

  if($count_row==1)
  {
    $sql11="UPDATE user SET ustatus='3' WHERE username='$username'";
      $result11=mysqli_query($this->db,$sql11);
    //echo $_SESSION['uid'];
        //header('Location: users.php');
        $_SESSION['login']=true;
        $_SESSION['uid']=$user_data['userid'];
        $_SESSION['username']=$user_data['username'];


          header('Location: index.php?id=1');

  }
  else{
        echo "<script>alert('Wrong user details');</script>";
      }

}

Public function getAllUsers()
    {
        $sql3="SELECT * FROM user ORDER BY userid LIMIT 0,30"  ;
        $result3=mysqli_query($this->db,$sql3);


        while($row=mysqli_fetch_array($result3))
        {

          $ustatus=$row['ustatus'];
          if($ustatus==1)
          {
            $ustatus="<div style='color:blue;border:2px solid blue;width:60px;padding:3px;'>Approved</div>";
          }
          else if($ustatus==0)
          {
            $ustatus="<div style='color:red;border:2px solid red;width:60px;padding:5px;'>Approval required*</div>";
          }
          else
          {
            $ustatus="<div style='color:green;border:2px solid green;width:50px;padding:5px;'>Online</div>";
          }
          $utype=$row['utype'];
          $password=$row['password'];

            echo "

            <tr>
                <td>".$row['userid']."</td>
                <td>".$row['username']."</td>
                <th>".$password."</td>
                <td>".$row['first_name']."</td>
                <td>".$row['last_name']."</td>
                <td>".$row['email']."</td>
                <td>".$row['contact']."</td>
                <td>".$row['address']."</td>
               <td>".$row['uabout']."</td>
              <td>".$row['udescription']."</td>
              <td>".$ustatus."</td>

                <td ><div id='type' class='usertype'>".$row['utype']."</div></td>
                <td><img src='".$row['upath']."' style='height:70px;width:70px;' alt='".$row['upath']."' ></td>



                <td class='td-actions text-right'>
                    <a href='editdelete.php?q=user&zid=".$row['userid']." &ac=edit'><button type='button' rel='tooltip' title='Edit Profile' class='btn btn-success btn-simple btn-xs'>
                        <i class='fa fa-edit'></i>
                    </button></a>
                    <a href='editdelete.php?q=user&zid=".$row['userid']." &ac=delete'><button type='button' rel='tooltip' title='Remove' class='btn btn-danger btn-simple btn-xs' id='delbutton'>
                        <i class='fa fa-times'></i>
                    </button></a>
                </td>
            </tr>

            <script>
            var disable=document.getElementsByClassName('usertype').innerHTML;
            if(disable='normal')
            {
              //alert('Its admin!');
              document.getElementById('delbutton').disabled= true;
            }
            </script>


            ";
        }

      }

      /*FUNCTION FOR EDITING THE DATA*/
        public function editUser($id)
        {

            $sql4="SELECT * FROM user WHERE userid=$id";
            $result4=mysqli_query($this->db,$sql4);
            while($row=mysqli_fetch_array($result4))
            {
                $userid=$row['userid'];
                $uname=$row['username'];
              $fname=$row['first_name'];
              $lname=$row['last_name'];
              $uemail=$row['email'];
              $ucontact=$row['contact'];

              $uaddress=$row['address'];
              $uabout=$row['uabout'];
              $udescription=$row['udescription'];
              $ustatus=$row['ustatus'];
              $utype=$row['utype'];
              $upath=$row['upath'];


                echo "
                <div class='row'>
                    <div class='col-md-8'>
                        <div class='card'>
                            <div class='header'>
                                <h4 class='title'>Edit Profile</h4>
                            </div>
                            <div class='content'>
                                <form action='editdelete.php?q=user&zid=$userid&ac=edit' method='POST'>
                                    <!--<div class='row'>
                                        <div class='col-md-12'>

                                        </div>
                                        </div>-->
                                        <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='form-group'>
                                            <input type='hidden' name='userid' value='$userid'>

                                                <label>Username</label>
                                                <input type='text' class='form-control' placeholder='Username' value=".$uname." name='uname'>
                                            </div>
                                        </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>First Name</label>
                                                    <input type='text' class='form-control' placeholder='First Name' name='fname' value=".$fname." >
                                                </div>
                                            </div>
                                            <div class='col-md-6'>
                                                <div class='form-group'>
                                                    <label>Last Name</label>
                                                    <input type='text' class='form-control' placeholder='Last Name' name='lname' value=".$lname." >
                                                </div>
                                            </div>
                                        </div>

                                        <div class='row'>
                                        <div class='col-md-12'>
                                            <div class='form-group'>
                                                <label for='exampleInputEmail1'>Email address</label>
                                                <input type='email' class='form-control' placeholder='Email' value=".$uemail." name='uemail'>
                                            </div>
                                        </div>
                                        </div>



                                        <div class='row'>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label>Contact</label>
                                                <input type='text' class='form-control' placeholder='Contact' name='ucontact' value=".$ucontact." >
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label>Address</label>
                                                <input type='text' class='form-control' placeholder='Home Address' name='uaddress' value=".$uaddress." >
                                            </div>
                                        </div>
                                        </div>
                                        <div class='row'>
                                            <div class='col-md-12'>
                                                <div class='form-group'>
                                                    <label>About Me <span style='text-transform:lowercase;'>(in Less than 140 characters)</span></label>
                                                    <textarea rows='5' class='form-control' placeholder='Here can be your description' name='uabout' maxlength='140' >".$row['uabout']."</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                                    <div class='col-md-12'>
                                                        <div class='form-group'>
                                                            <label>Job description <span style='text-transform:lowercase;'>(in Less than 150 characters)</span></label>
                                                          <textarea rows='5' class='form-control' placeholder='Here can be your description' maxlength='150' name='udescription' >".$row['udescription']."</textarea>
                                                        </div>
                                                    </div>
                                        </div>
                                        <div class='row'>
                                        <div class='col-md-8'>
                                          <div class='form-group'>
                                              <label>status</label>

                                              <select name='ustatus' class='form-control' >
                                              <option value='1'>Activate</option>
                                              <option value='0'>Deactivate</option>
                                              </select>
                                          </div>
                                      </div>
                                        <div class='col-md-4'>
                                            <div class='form-group'>
                                                <label>Type</label>
                                                <select name='utype' class='form-control' >
                                                <option value='admin'>Admin</option>
                                                <option value='normal'>Normal</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                        <div class='row'>
                                        <div class='col-md-12'>
                                        	<!--	<input type='file'  name='upath'>-->
                                        </div></div>

          <input type='submit' value='Update' class='btn btn-warning'></form>
                                          </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class='card card-user'>
                            <div class='image'>
                                <img src='assets/img/rotating_card_thumb2.png' alt='...'/>
                            </div>
                            <div class='content'>
                                <div class='author'>
                                     <a href='#'>
                                    <img class='avatar border-gray editpropic' src='".$upath."' alt='...'/>
                                        <form action='class/classuploadpicture.php' method='POST'  enctype='multipart/form-data' style='margin-bottom:10px;'>

                                        <input type='file' name='propic' style='margin-left:60px;'>
                                        <input type='hidden' name='userid' value='$userid'>
                                        <input type='submit' value='Upload Picture' class='btn btn-warning'>
                                        </form>
                                      <h4 style='font-size:20px;'>".$fname." ".$lname."<br />
                                         <small>@".$uname."</small></form>
                                      </h4>
                                    </a>
                                </div>
                                <p class='description text-center'>".$uabout."
                                </p>
                            </div>
                            <hr>
                            <div class='text-center'>
                                <button href='#' class='btn btn-simple'><i class='fa fa-facebook-square'></i></button>
                                <button href='#' class='btn btn-simple'><i class='fa fa-twitter'></i></button>
                                <button href='#' class='btn btn-simple'><i class='fa fa-google-plus-square'></i></button>

                            </div>
                        </div>
                    </div>
                    <div>

                </div>


                </div>


                ";
            }
          }

        public function userUpdate($userid,$uname,$fname,$lname,$uemail,$ucontact,$uaddress,$uabout,$udescription,$ustatus,$utype)
        {
          $uemail=addslashes($uemail);
          $uabout=addslashes($uabout);
          $udescription=addslashes($udescription);
          $uabout=substr("$uabout",0,140);

            $sql7="UPDATE user SET username='$uname',first_name='$fname',last_name='$lname',email='$uemail',contact='$ucontact',address='$uaddress',uabout='$uabout',udescription='$udescription',ustatus='$ustatus',utype='$utype' WHERE userid=$userid";
            $result=mysqli_query($this->db,$sql7);
            if($result)
            {
              header('location: index.php?id=1');
            }
            else {
              echo "Please try again!";
            }

          }


        /*FUNCTION FOR DELETEING USER*/
              public function deleteUser($id)
              {
                $sql6="SELECT * FROM user WHERE userid=$id";
                $result9=mysqli_query($this->db,$sql6);
                while($row=mysqli_fetch_array($result9))
                {
                  unlink($row['upath']);
                }
                $sql5="DELETE from user WHERE userid=$id";
                $result=mysqli_query($this->db,$sql5);
                if($result)
                {
                  header('location: index.php?id=2');
                }
                else {
                  echo "Please try again!";
                }
              }


    /*FUNCTION FOR COUNTING THE TOTAL NUMBER OF USERS*/
      public function userCount()
      {
        $sql4="SELECT * from user";
        $result=mysqli_query($this->db,$sql4);
        $user_data=mysqli_fetch_array($result);
        $count_row=$result->num_rows;
        echo "<span class='badge'>".$count_row."</span>";
      }




}





 ?>
