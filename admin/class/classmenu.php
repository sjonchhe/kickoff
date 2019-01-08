  <?php
include_once('../include/dbconfig.php');

class Menu extends dbConnect {

   public function menuRegister($mname,$mdescription,$morder,$mparent,$mstatus)
   {

     $sql0="SELECT * from menu WHERE mname='$mname'";
     $result0=mysqli_query($this->db,$sql0);
     $user_data0=mysqli_fetch_array($result0);
     $count_row0=$result0->num_rows;

     if($count_row0==0)
     {

       $sql1="INSERT INTO menu SET mname= '$mname',mdescription ='$mdescription', morder='$morder', mparent='$mparent',mstatus='$mstatus'";
       $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Menu cannot be inserted");
       if($result)
       {
         echo "Menu inserted";

        @header('Location: index.php?id=3');

       }
     }
     else {
       echo "Menu already exists!Please change the menuname ";
     }
   }

   Public function getAllMenu()
   {
       $sql3="SELECT * FROM menu ORDER BY morder LIMIT 0,30"  ;
       $result=mysqli_query($this->db,$sql3);


       while($row=mysqli_fetch_array($result))
       {
           echo "
           <tr>
               <td>".$row['mid']."</td>
               <td>".$row['mname']."</td>
               <td>".$row['mdescription']."</td>
               <td>".$row['morder']."</td>
               <td>".$row['mparent']."</td>
               <td>".$row['mstatus']."</td>




               <td class='td-actions text-right'>

                   <a href='editdelete.php?q=menu&zid=".$row['mid']." &ac=edit'><button type='button' rel='tooltip' title='Edit Menu' class='btn btn-success btn-simple btn-xs'>
                       <i class='fa fa-edit'></i>
                   </button></a>
                   <a href='editdelete.php?q=menu&zid=".$row['mid']." &ac=delete'><button type='button' rel='tooltip' title='Delete menu' class='btn btn-danger btn-simple btn-xs'>
                       <i class='fa fa-times'></i>
                   </button></a>
               </td>
           </tr>



           ";
       }

     }
     public function parentOptions()
            {
              $sql8="SELECT * FROM menu WHERE mparent=0" ;
              $result=mysqli_query($this->db,$sql8);
              while($row=mysqli_fetch_array($result))
              {
                $mid=$row['mid'];
                $mname=$row['mname'];
                echo "<option value=".$mid.">".$mname."</option>";

              }
            }

            public function deleteMenu($id)
          	{
          		$sql5="DELETE from menu WHERE mid=$id";
      			$result = mysqli_query($this->db,$sql5);
      			if($result)
      			{
      				header('location:index.php?id=3');
      			}
      			else
      			{
      				echo "Something wrong! Please Try deleting menu again";
      			}
          	}

            /*FUNCTION FOR EDITING THE DATA*/
                    public function editMenu($id)
                    {
                        $sql6="SELECT * FROM menu WHERE mid=$id";
                        $result=mysqli_query($this->db,$sql6);
                        while($row=mysqli_fetch_array($result))
                        {
                            $mid=$row['mid'];
                            $mname=$row['mname'];
                            $mdescription=$row['mdescription'];
                            $morder=$row['morder'];
                            $mparent=$row['mparent'];
                            $mstatus=$row['mstatus'];

                            echo "
                            <kbd style='font-size:20px;'>Menu Update</kbd><br>
                            <div class='col-md-8'>
                                <table class='table table-condensed'>
                                   <form action='editdelete.php?q=menu&zid=$mid&ac=edit' method='POST'>
                                     <tr><td colspan='2' >MENU UPDATE</td></tr>
                                     <input type='hidden' name='mid' value=$mid>
                                     <tr><td>Mname :</td><td><input type='text' placeholder='Menuname' name='mname' value=$mname></td></tr>
                                     <tr><td>Mdescription :</td><td><textarea placeholder='Description' name='mdescription' >".$row['mdescription']."</textarea></td></tr>
                                     <tr><td>morder :</td><td><input type='text' placeholder='morder' name='morder' value=$morder></td></tr>
                                     <tr><td>mparent :</td><td><input type='text' placeholder='Id of the menu that u want the dropdown in ' name='mparent' value=$mparent></td></tr>
                                     <tr><td>mstatus :</td><td><input type='text' placeholder='mstatus' name='mstatus' value=$mstatus></td></tr>


                                     <tr><td colspan='2'><input type='submit' value='Update' class='btn btn-primary '></td></tr>
                                   </form>
                               </table></div>";
                        }
                      }

                    public function menuUpdate($mid,$mname,$mdescription,$morder,$mparent,$mstatus)
                    {
                      $sql7="UPDATE menu SET mname='$mname',mdescription='$mdescription',morder='$morder',mparent='$mparent',mstatus='$mstatus' WHERE mid=$mid";
                      $result=mysqli_query($this->db,$sql7);
                      if($result)
                      {
                        header('location: index.php?id=3');
                      }
                      else {
                        echo "Please try again!";
                      }

                    }


   }

 ?>
