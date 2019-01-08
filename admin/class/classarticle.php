<?php
include_once('../include/dbconfig.php');


  class Article extends dbConnect{

   public function articleRegister($atitle,$akeyword,$adescription,$acategory,$aheading,$ashort,$afull,$astatus,$target_path)
    {
      $atitle=addslashes($atitle);
      $adescription=addslashes($adescription);
      $aheading=addslashes($aheading);
      $ashort=addslashes($ashort);
      $afull=addslashes($afull);

 $adate= date('Y-m-d H:i:s');
      $sql0="SELECT * from article WHERE atitle='$atitle'";
      $result0=mysqli_query($this->db,$sql0);
      $user_data0=mysqli_fetch_array($result0);
      $count_row0=$result0->num_rows;
      $uid=$_SESSION['uid'];

      if($count_row0==0)
      {
        $afull=addslashes($_POST['afull']);

        $sql1="INSERT INTO article SET atitle ='$atitle', akeyword='$akeyword', adescription='$adescription',acategory='$acategory',aheading='$aheading',ashort='$ashort',afull='$afull',adate='$adate',astatus='$astatus',aphoto='$target_path',mid='0',uid='0',acounter='0'";
        $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Article cannot be inserted");
        if($result)
        {
          echo "Article inserted";

         header('Location: index.php?id=6');

        }
      }
      else {
        echo "Article already exists!Please change the menuname ";
      }
    }

    Public function getAllArticle()
    {
        $sql3="SELECT * FROM article ORDER BY aid DESC LIMIT 0,30"  ;
        $result=mysqli_query($this->db,$sql3);


        while($row=mysqli_fetch_array($result))
        {
            echo "
            <tr>
            <td>".$row['aid']."</td>
              <td>".$row['atitle']."</td>
              <td>".$row['akeyword']."</td>
              <td>".$row['adescription']."</td>
              <td>".$row['acategory']."</td>

              <td>".$row['aheading']."</td>
              <td>".$row['ashort']."</td>
              <!--<td>".$row['afull']."</td>-->
              <td>".$row['adate']."</td>
              <td>".$row['astatus']."</td>
              <td><img src='".$row['aphoto']."' style='height:90px;width:120px;'></td>
              <td>".$row['acounter']."</td>

              <td class='td-actions text-right'>

                  <a href='editdelete.php?q=article&zid=".$row['aid']." &ac=edit'><button type='button' rel='tooltip' title='Edit Article' class='btn btn-success btn-simple btn-xs'>
                      <i class='fa fa-edit'></i>
                  </button></a>
                  <a href='editdelete.php?q=article&zid=".$row['aid']." &ac=delete'><button type='button' rel='tooltip' title='Delete Article' class='btn btn-danger btn-simple btn-xs'>
                      <i class='fa fa-times' style=''></i>
                  </button></a>
              </td>
            </tr>

            ";
        }

      }
      public function articleCount(){

        	$sql4="SELECT * from article ORDER BY aid";
			$result = mysqli_query($this->db,$sql4);
        	$user_data = mysqli_fetch_array($result);
        	$count_row = $result->num_rows;
        	echo "<span class='badge'>".$count_row."</span>";
    	}




      /*FUNCTION FOR EDITING THE DATA*/
        public function editArticle($id)
        {

            $sql6="SELECT * FROM article WHERE aid=$id";
            $result=mysqli_query($this->db,$sql6);
            while($row=mysqli_fetch_array($result))
            {

                $aid=$row['aid'];
                $atitle=$row['atitle'];
                $akeyword=$row['akeyword'];
                $adescription=$row['adescription'];
                $aheading=$row['aheading'];
                $ashort=$row['ashort'];
                $afull=$row['afull'];

                $adate=$row['adate'];
                $astatus=$row['astatus'];

                echo "
                <div class='container-fluid'>
                <div class='row'>
                <div class='col-md-12'>
                <div class='content'>
                <h3>Article Edit/Update</h3>
                <form action='editdelete.php?q=article&zid=$aid&a
                c=edit' method='POST'>
                   <input type='hidden' name='aid' value=$aid>
                      <div class='form-group label-floating'>
                            <label class='control-label'>Title</label>
                            <textarea type='text' class='form-control' name='atitle' >".$row['atitle']."</textarea>
                      </div>
                      <div class='form-group label-floating'>
                            <label class='control-label'>Keyword</label>
                            <input type='text' class='form-control' name='akeyword' value='$akeyword'>
                      </div>
                      <div class='form-group label-floating'>
                            <label class='control-label'>Description</label>
                          <textarea class='form-control' name='adescription'>".$row['adescription']."</textarea>
                      </div>
                      <div class='form-group label-floating'>
                            <label class='control-label'>Heading</label>
                          <textarea class='form-control' name='aheading'>".$row['aheading']."</textarea>
                      </div>
                      <div class='form-group label-floating'>
                            <label class='control-label'>Short Description</label>
                          <textarea class='form-control' name='ashort'>".$row['ashort']."</textarea>
                      </div>
                      <div class='form-group label-floating'>
                            <label class='control-label'>Full Description</label>
                          <textarea class='form-control' name='afull' rows='9'>".$row['afull']."</textarea>
                      </div>

                      <div class='form-group label-floating'>
                            <label class='control-label'>Status</label>
                            <input type='text' class='form-control' name='astatus' value='$astatus'>
                              <!--<input type='radio' class='form-control' name='astatus' value='$adate'>0
                              <input type='radio' class='form-control' name='astatus' value='$adate'>1-->
                      </div>


                      <div>
                      <input type='submit' value='Update' class='btn btn-default'>
                    </div>

                    </form>


                </div>

              </div></div></div>";
            }
          }

        public function articleUpdate($aid,$atitle,$akeyword,$adescription,$aheading,$ashort,$afull,$astatus)
        {
          $atitle=addslashes($atitle);
          $adescription=addslashes($adescription);
          $aheading=addslashes($aheading);
          $ashort=addslashes($ashort);
          $afull=addslashes($afull);

          $date=date('Y-m-d H:i:s');
          $sql7="UPDATE article SET atitle='$atitle',akeyword='$akeyword',adescription='$adescription',aheading='$aheading',ashort='$ashort',afull='$afull',adate='$date',astatus=$astatus WHERE aid=$aid";
          $result=mysqli_query($this->db,$sql7);
          if($result)
          {
            header('location: index.php?id=6');
          }
          else {
            echo "Please try again!";
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

        public function deletearticle($id)
            {
              $sql6="SELECT * FROM article WHERE aid=$id";
              $result9=mysqli_query($this->db,$sql6);
              while($row=mysqli_fetch_array($result9))
              {
                unlink($row['aphoto']);
              }
              $sql5="DELETE from article WHERE aid=$id";
            $result = mysqli_query($this->db,$sql5);
            if($result)
            {
              header('location: index.php?id=6');
            }
            else
            {
              echo "Something wrong! Please Try Again";
            }
            }
  }
      ?>
