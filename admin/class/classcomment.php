<?php
@include_once('../../include/dbconfig.php');


  class Commenting extends dbConnect{


    /*  FUNCTION FOR ADDING COMMENT*/
    public function comment($commenter,$cemail,$comment,$id)
      {
         $cdate= date('Y-m-d H:i:s');
         $comment=addslashes($comment);
          $sql1="INSERT INTO comments SET commenter='$commenter',cemail='$cemail',comment='$comment',aid='$id',cdate='$cdate',cstatus=1";
          $result1=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
          if($result1)
          {

          }
          else {
            echo"sql ma error";
          }
        }

        /*EXTRACTING ALL THE COMMENT*/
        Public function getAllComment()
        {
            $sql3="SELECT * FROM comments ORDER BY cid DESC LIMIT 0,30"  ;
            $result=mysqli_query($this->db,$sql3);


            while($row=mysqli_fetch_array($result))
            {
                echo "
                <tr>
                    <td>".$row['cid']."</td>
                    <td>".$row['commenter']."</td>
                    <td>".$row['cemail']."</td>
                    <td>".$row['comment']."</td>
                    <td>".$row['aid']."</td>
                    <td>".$row['cdate']."</td>

                    <td>".$row['cstatus']."</td>




                    <td class='td-actions text-right'>

                        <a href='editdelete.php?q=comment&zid=".$row['cid']." &ac=delete'><button type='button' rel='tooltip' title='Delete comment' class='btn btn-danger btn-simple btn-xs'>
                            <i class='fa fa-times'></i>
                        </button></a>
                    </td>
                </tr>



                ";
            }

          }


          Public function getComment($id)
          {

                $sql3="SELECT * FROM comments WHERE aid='$id' ORDER BY cid";
              $result=mysqli_query($this->db,$sql3);


              while($row=mysqli_fetch_array($result))
              {
                  echo "
                  <div class='media response-info' style='background:#F0F0F0;padding:10px;box-shadow:0px 2px 3px white;'>
                    <div class='media-left response-text-left'>
                      <a href='#'>
                        <img class='media-object' src='gallery/icon1.png' alt=''/ style='height:70px;width:70px;'>
                      </a>
                    </div>
                    <div class='media-body response-text-right'>
                   <h5 class='text-small'><a href='#'>".$row['commenter']."</a></h5>
                      <p>".$row['comment']."</p>
                      <ul>
                        <li>".$row['cdate']."</li>
                        <li><a href='single.html'>Reply</a></li>
                      </ul>
                    </div>
                    <div class='clearfix'> </div>
                  </div>




                  ";
              }

            }
            public function deletecomment($id)
                {
                  $sql5="DELETE from comments WHERE cid=$id";
                $result = mysqli_query($this->db,$sql5);
                if($result)
                {
                  header('location: index.php?id=10');
                }
                else
                {
                  echo "Something wrong! Please Try Again";
                }
                }


                /*DISPLAYING COMMENTS ON THE SIDEBAR*/
                    public function sidebarCommentDisplay(){

                        $sql3="SELECT * from comments WHERE cstatus=1  ORDER BY cid DESC LIMIT 0, 5 ";
                        $result = mysqli_query($this->db,$sql3);



                            while($row=mysqli_fetch_array($result)) {

                  echo "
                  <div class='media response-info' style='background:#ECECEC;padding:5px;margin-top:4px;'>
  							<div class='media-left response-text-left'>
  								<a href='#'>
  									<img class='media-object' src='images/icon1.png' alt='' / style='height:70px;width:70px;'>
  								</a>

  							</div>
  							<div class='media-body response-text-right'>
  									<h5><a href='#'>".$row['commenter']."</a></h5><p>".$row['comment']."</p>
  								<ul>
  									<li>".$row['cdate']."</li>

  								</ul>
  							</div>
  							<div class='clearfix'> </div>
  						</div>


                  ";

                }
                            echo "<div class='clearfix'></div>
                  ";

                        }

  }?>
