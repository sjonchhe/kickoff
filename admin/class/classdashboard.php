<?php

include_once('../include/dbconfig.php');

class Dashboard extends dbConnect {

  public function adminDetail()
  {
    $a=$_SESSION['uid'];

    $sql3="SELECT * FROM user ";

    $result3=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result3))
    {
      if ($row['userid']== $a)
      {

        echo "
        <div class='card'>
        <div class='front'>
        <div class='cover'>
        <img src='assets/img/rotating_card_thumb2.png'/>
        </div>
        <div class='user'>
        <img class='img-circle' src='".$row['upath']."' style='height:110px;width:110px;'/>
        </div>
        <div class='content'>
        <div class='main' >
        <h3 class='name'>".$row['first_name']." ".$row['last_name']."</h3>
        <span class='text-center'><center>@".$row['username']."</center></span>
        <p class='profession' style='overflow:hidden;margin-top:-10px;'>".$row['utype']."</p>
        <p class='text-center' style='margin-top:-20px;font-size:14px;'>".$row['uabout']."</p>
        </div>
        <div class='footer'>
        <i class='fa fa-mail-forward'></i> EDIT
        </div>
        </div>
        </div> <!-- end front panel -->
        <div class='back'>
        <div class='header'>
        <h5 class='motto'>'To be or not to be, this is my awesome motto!'</h5>
        </div>
        <div class='content'>
        <div class='main'>
        <h4 class='text-center'>Job Description</h4>
        <p class='text-center'>".$row['udescription']."</p>

        <div class='stats-container'>
        <center> <a href='editdelete.php?q=user&zid=".$row['userid']." &ac=edit'> <button class='btn btn-info btn-lg'>Edit</button></a>
        </div>

        </div>
        </div>
        <div class='footer'>
        <div class='social-links text-center'>
        <a href='#' class='facebook'><i class='fa fa-facebook fa-fw'></i></a>
        <a href='#' class='google'><i class='fa fa-google-plus fa-fw'></i></a>
        <a href='#' class='twitter'><i class='fa fa-twitter fa-fw'></i></a>
        </div>
        </div>
        </div> <!-- end back panel -->
        </div> <!-- end card -->


        ";
      }
    }
  }



  Public function getAllUsers()
  {
    $sql3="SELECT * FROM user ORDER BY userid DESC LIMIT 0,5"  ;
    $result3=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result3))
    {
      $ustatus=$row['ustatus'];
      if($ustatus==1)
      {
        $ustatus="<div style='color:blue;'>Approved</div>";
      }
      else if($ustatus==0)
      {
        $ustatus="<div style='color:red;'>Approval required*</div>";
      }
      else
      {
        $ustatus="<div style='color:green;'>Online</div>";
      }
      echo "
      <tr>
      <td>".$row['username']."</td>
      <td>".$ustatus."</td>
      <td>".$row['utype']."</td>

      </tr>
      ";
    }

  }

  public function getAllMenu(){

    $sql3="SELECT * from menu WHERE mparent=0 AND mname!='Home' ORDER BY morder ASC LIMIT 0, 30 ";
    $result = mysqli_query($this->db,$sql3);




    while($row=mysqli_fetch_array($result)) {
      echo "<tr>";

      echo "
      <td><a href=pages.php?id=".$row['mid'].">".$row['mname']."</a></td>";




    }

    echo "</tr>";
  }
  /*FUNCTION FOR COUNTING THE TOTAL NUMBER OF USERS*/
  public function userCount()
  {
    $sql4="SELECT * from user";
    $result=mysqli_query($this->db,$sql4);
    $user_data=mysqli_fetch_array($result);
    $count_row=$result->num_rows;
    echo $count_row;
  }

  /*FUNCTION FOR COUNTING THE TOTAL NUMBER OF COMPETITION */
  public function competitionCount()
  {
    $sql4="SELECT * from competition";
    $result=mysqli_query($this->db,$sql4);
    $user_data=mysqli_fetch_array($result);
    $count_row=$result->num_rows;
    echo $count_row;
  }
  /*FUNCTION FOR COUNTING THE TOTAL NUMBER OF TEAM*/
  public function teamCount()
  {
    $sql4="SELECT * from team";
    $result=mysqli_query($this->db,$sql4);
    $user_data=mysqli_fetch_array($result);
    $count_row=$result->num_rows;
    echo $count_row;
  }
  /*FUNCTION FOR COUNTING THE TOTAL NUMBER OF PLAYER */
  public function playerCount()
  {
    $sql4="SELECT * from players";
    $result=mysqli_query($this->db,$sql4);
    $user_data=mysqli_fetch_array($result);
    $count_row=$result->num_rows;
    echo $count_row;
  }
  /*FUNCTION FOR COUNTING THE TOTAL NUMBER OF ARTICLE */
  public function articleCount()
  {
    $sql4="SELECT * from article";
    $result=mysqli_query($this->db,$sql4);
    $user_data=mysqli_fetch_array($result);
    $count_row=$result->num_rows;
    echo $count_row;
  }
  /*FUNCTION FOR COUNTING THE TOTAL NUMBER OF GALLERY */
  public function galleryCount()
  {
    $sql4="SELECT * from gallery";
    $result=mysqli_query($this->db,$sql4);
    $user_data=mysqli_fetch_array($result);
    $count_row=$result->num_rows;
    echo $count_row;
  }
  /*FUNCTION FOR COUNTING THE TOTAL NUMBER OF COMMENTS */
  public function commentCount()
  {
    $sql4="SELECT * from comments";
    $result=mysqli_query($this->db,$sql4);
    $user_data=mysqli_fetch_array($result);
    $count_row=$result->num_rows;
    echo $count_row;
    return $count_row;
  }
  Public function publishedby()
  {
    $sql3="SELECT * FROM article ORDER BY aid DESC LIMIT 0,5"  ;
    $result3=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result3))
    {
      echo "
      <tr>


      <td>".$row['acategory']."</td>
      <td>".$row['adate']."</td>

      </tr>
      ";
    }

  }

  // START -For article with maximum views
  Public function articlecounter()
  {
    $sql3="SELECT * FROM article ORDER BY acounter DESC LIMIT 0,5"  ;
    $result3=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result3))
    {
      echo "
      <tr>


      <td>".$row['aid']."</td>
      <td>".$row['adate']."</td>
      <td>".$row['acounter']."</td>

      </tr>
      ";
    }

  }
  /*FOR DISPLAYING ON THE DASHBOARD*/
  Public function recentComments()
  {
    $sql3="SELECT * FROM comments ORDER BY cid DESC "  ;
    $result3=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result3))
    {
      echo "
      <tr>


      <td>".$row['commenter']."</td>
      <td>".$row['comment']."</td>
      <td>".$row['cdate']."</td>
      <td>".$row['aid']."</td>

      </tr>
      ";
    }

  }
  public function highestCommentArticle(){

    $sql9='SELECT * from comments ORDER BY aid DESC LIMIT 0, 2';
      $result9=mysqli_query($this->db,$sql9);
      $user_data=mysqli_fetch_array($result9);
      $count_row=$result9->num_rows;
echo $count_row;
      $sql3="SELECT * from comments INNER JOIN article ON comments.aid=article.aid WHERE  comments.cstatus=1 AND article.astatus=1  ORDER BY adate DESC LIMIT 0, 1";
      $result = mysqli_query($this->db,$sql3);



          while($row=mysqli_fetch_array($result)) {



            echo"
              <div class='popular-grid' style='height:440px;width:320px;padding:5px;overflow:hidden;margin:0px;'>
                <a href='#'><img src='".$row['aphoto']."'  alt='' style='height:150px;width:100%;margin-top:-20px;' /></a>
                <p><b>".$row['atitle']."</b></p>
                <p>" .$row['adate']." <br> Total Comments = <b>".$count_row."</b></p>

              </div>";
                                      }

                        }
    public function loggedinAdmin()
                        {
                          $a=$_SESSION['uid'];

                          $sql11="SELECT * FROM user WHERE userid='$a'";
                          $result11=mysqli_query($this->db,$sql11);



                          while($row=mysqli_fetch_array($result11))
                          {

                              echo "@". $row['username'];


                          }
                        }


}
