<?php
include_once('dbconfig.php');
class ArticleD extends dbConnect {

/*FOR DISPLAYING THE TITLE ON THE TABS*/
public function titleDisplay($id)
{
  $sql9="SELECT * from article WHERE astatus=1 and aid=$id ";
  $result9 = mysqli_query($this->db,$sql9);
  while($row=mysqli_fetch_array($result9))
  {
  echo $row['atitle'];
  }
}

/*MAIN ARTICLE DISPLAY ON THE HOME PAGE*/
public function articleDisplay(){

			$sql3="SELECT * from article WHERE astatus=1 ORDER BY aid DESC LIMIT 0, 5 ";
			$result = mysqli_query($this->db,$sql3);



	        while($row=mysqli_fetch_array($result)) {


	           echo "<div class='clearfix'></div></div>
             <div class='article' >

               <div class='article-left' >
                  <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' alt='' style='height:230px;width:100%;'/></a>
               </div>
               <div class='article-right'>
             <div class='article-title'>
               <p>On " .$row['adate']." </p>
               <a class='title' href=single.php?id=".$row['aid'].">".$row['atitle'].  " </a>
             </div>
             <div class='article-text'>
               <p>".$row['ashort']."</p>
              <a href=single.php?id=".$row['aid'].">Read more</a>

               </div>

               <div class='clearfix'></div>
</div>


";

	        }

          echo "<div class='clearfix'></div>";
            //echo "<h4>Other Articles</h4>";



    	}

    /*DISPLAYING ALL THE ARTICLES IN SEPARATE PAGE*/
      public function getallarticle(){

      			$sql3="SELECT * from article WHERE astatus=1 ORDER BY aid DESC  ";
      			$result = mysqli_query($this->db,$sql3);


echo "
<div class='col-md-8'>
<div class='articles'>
  <div class='articles sports display_categories'>
      <header>
        <h3 class='title-head btn btn-info '>News</h3>
        <div class='article_categories'>
          <a href='pages.php?id=3'><h4 class=' btn btn-success btn-sm'>Transfers</h4></a>
          <a href='pages.php?id=8'><h4 class=' btn btn-success btn-sm'>Fifa</h4></a>
          <a href='pages.php?id=13'><h4 class=' btn btn-success btn-sm'>National</h4></a>
        </div>
      </header>
<div class='articles'>
";
      	        while($row=mysqli_fetch_array($result)) {


      	           echo "<div class='clearfix'></div></div>
                   <div class='article' >

                     <div class='article-left' >
                        <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' alt='' style='height:220px;width:100%;'/></a>
                     </div>
                     <div class='article-right'>
                   <div class='article-title'>
                     <p>On " .$row['adate']." </p>
                     <a class='title' href=single.php?id=".$row['aid'].">".$row['atitle'].  " </a>
                   </div>
                   <div class='article-text'>
                     <p>".$row['ashort']."</p>
                    <a href=single.php?id=".$row['aid'].">Read more</a>

                     </div>

                     <div class='clearfix'></div>
      </div>


      ";

      	        }

                echo "</div></div><div class='clearfix'></div><div class='col-md-8'>";
                  //echo "<h4>Other Articles</h4>";



          	}

/*FOR DISPLAYING THE TRANSFER NEW ON TRANSFER.PHP SEPARATE PAGE*/
    public function transferarticleDisplay(){

          $sql3="SELECT * from article WHERE astatus=1 and acategory='transfer' ORDER BY aid DESC LIMIT 0, 10 ";
          $result = mysqli_query($this->db,$sql3);



              while($row=mysqli_fetch_array($result)) {

echo"
                <div class='c-sports-main'>
                    <div class='c-image'>
                      <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' alt='' style='height:150px;'/></a>
                    </div>
                    <div class='c-text'>
                      <a class='power' href=single.php?id=".$row['aid'].">".$row['atitle']."</a>
                      <p class='date'>On Feb 25, 2015</p>
                      <a class='reu'href=single.php?id=".$row['aid'].">Read more</a>
                      <div class='clearfix'></div>
                    </div>
                    <div class='clearfix'></div>
                  </div>";

                                }
                                echo "<div class='clearfix'></div>
                        ";

                            }


/*FOR DISPLAYING RECENT NEWS ON THE SIDEBAR*/
    public function recentpostDisplay(){

  			$sql3="SELECT * from article WHERE astatus=1 ORDER BY aid DESC LIMIT 0, 8 ";
  			$result = mysqli_query($this->db,$sql3);



  	        while($row=mysqli_fetch_array($result)) {


echo "
  <div class='popular-post-grid'>
    <div class='post-img'>
      <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' style='width:100%;height:70px;margin-top:5px; ' alt='' /></a>
    </div>
    <div class='post-text'>
      <a class='pp-title' href=single.php?id=".$row['aid']."> ".$row['atitle'].  " </a>
      <p>" .$row['adate']."</p>
    </div>
    <div class='clearfix'></div>
  </div>



  ";

  	        }
            echo "<div class='clearfix'></div>
  ";

      	}


/*FOR DISPLAYING SINGLE ARTICLE ON CLICK AND OPENING IT IN NEW PAGE*/
public function singleArticleDisplay(){
$id=$_GET['id'];
    $sql3="SELECT * from article WHERE astatus=1 and aid='$id'";
    $result = mysqli_query($this->db,$sql3);



        while($row=mysqli_fetch_array($result)) {


           echo "
              <h3 class='post'>".$row['atitle']."</h3>
                <div class='last-article'>
                  <p class='artext'>".$row['adescription']."</p>
                  <h4 >".$row['aheading']."</h4>
                  <img src='admin/".$row['aphoto']."' style='width:100%;height:450px;'/>
                  <p class='artext' style='text-align: justify;'>".$row['afull']."</p>

                  <div class='clearfix'></div>
<hr>              ";

        }
        echo "<div class='clearfix'></div>
";

    }

/*DISPLAYING POPULAR POSTS ON THE SIDEBAR*/
    public function popularPostDisplay(){

        $sql3="SELECT * from article WHERE astatus=1  ORDER BY acounter DESC LIMIT 0, 5 ";
        $result = mysqli_query($this->db,$sql3);



            while($row=mysqli_fetch_array($result)) {

  echo "
  <div class='popular-post-grid'>
    <div class='post-img'>
      <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' style='width:100%;height:70px;margin-top:5px; ' alt='' /></a>
    </div>
    <div class='post-text'>
      <a class='pp-title' href=single.php?id=".$row['aid']."> ".$row['atitle'].  " </a>
      <p>".$row['adate']." <a class='span_link' href='#'><span class='glyphicon glyphicon-eye-open'></span>".$row['acounter']." </a></p>
    </div>
    <div class='clearfix'></div>
  </div>



  ";

            }
            echo "<div class='clearfix'></div>
  ";

        }


/*FOR DISPLAYING NATIONAL NEWS ON THE SIDEBAR*/
public function nationalarticleDisplay(){

    $sql3="SELECT * from article WHERE astatus=1 and acategory='nepal' ORDER BY aid DESC LIMIT 0, 10 ";
    $result = mysqli_query($this->db,$sql3);



        while($row=mysqli_fetch_array($result)) {

echo"

            <div class='popular-grid' >
              <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."'  alt='' /></a>
              <a class='title' href=single.php?id=".$row['aid'].">".$row['atitle']."</a>
              <p>" .$row['adate']."</p>
            </div>";
                                    }

                      }


  /*FOR DISPLAYING NATIONAL NEWS ON SEPARATE PAGE*/
  public function nationalarticle(){

  $sql3="SELECT * from article WHERE astatus=1 and acategory='nepal' ORDER BY aid DESC ";
  $result = mysqli_query($this->db,$sql3);

  echo "
  <div class='articles'>
      <div class='articles sports'>
          <header>
            <h3 class='title-head btn btn-info'>National News</h3>
          </header>
    <div class='articles'>";
  while($row=mysqli_fetch_array($result)) {

    echo"
    <div class='article'>
      <div class='article-left'>
        <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' style='height:230px;' class=''></a>
      </div>
      <div class='article-right'>
        <div class='article-title'>
          <p>" .$row['adate']." </p>
          <a class='title' href=single.php?id=".$row['aid']."> ".$row['atitle']."</a>
        </div>
        <div class='article-text'>
          <p>".$row['ashort'].".....</p>
          <a href=single.php?id=".$row['aid']."></a>
          <div class='clearfix'></div>
        </div>
      </div>
      <div class='clearfix'></div>
    </div>";
  }
    echo "</div></div><div class='clearfix'></div><div class='col-md-8'>";
}


  /*FOR DISPLAYING EASPORTS FIFA NEWS IN BOTTOM*/
      public function smallfifaarticleDisplay(){

            $sql3="SELECT * from article WHERE astatus=1 and acategory='fifa' ORDER BY aid DESC LIMIT 0, 4 ";
            $result = mysqli_query($this->db,$sql3);

            while($row=mysqli_fetch_array($result)) {

          echo"

                                  <div class='s-grid-small'>
                                    <div class='sc-image'>
                                      <a  href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' style='height:110px;margin-top:5px;' alt='' /></a>
                                    </div>
                                  <div class='sc-text'>
                                    <a class='power' href=single.php?id=".$row['aid'].">".$row['atitle']."</a>
                                    <p class='date'>".$row['adate']."</p>
                                    <a class='reu' href=single.php?id=".$row['aid'].">Read more</a>
                                      <div class='clearfix'></div>
                                  </div>
                                  <div class='clearfix'></div>
                                  </div>";
                                                          }

                                            }

/*FOR DISPLAYING FIFA NEWS ON SEPAREATE PAGE*/
      public function fifaarticleDisplay(){
          $sql3="SELECT * from article WHERE astatus=1 and acategory='fifa' ORDER BY aid DESC LIMIT 0, 10 ";
          $result = mysqli_query($this->db,$sql3);
          echo"<div class='articles'>
              <div class='articles sports'>
                  <header>
                    <h3 class='title-head btn btn-info'>EA Sports FIFA</h3>
                  </header>
            <div class='articles'>";
          while($row=mysqli_fetch_array($result)) {

          echo"
          <div class='article'>
            <div class='article-left'>
              <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' style='height:230px;'></a>
            </div>
            <div class='article-right'>
              <div class='article-title'>
                <p>" .$row['adate']." </p>
                <a class='title' href=single.php?id=".$row['aid']."> ".$row['atitle']."</a>
              </div>
              <div class='article-text'>
                <p>".$row['ashort'].".....</p>
                <a href=single.php?id=".$row['aid']."></a>
                <div class='clearfix'></div>
              </div>
            </div>
            <div class='clearfix'></div>
          </div>
";
}
      echo "</div></div><div class='clearfix'></div><div class='col-md-8'>
                ";

                    }


    public function relatedarticleDisplay(){

          $sql3="SELECT * from article WHERE astatus=1 and akeyword='realmadrid' ORDER BY aid DESC LIMIT 0, 10 ";
          $result = mysqli_query($this->db,$sql3);



          while($row=mysqli_fetch_array($result)) {
            echo"
        <div class='col-xs-6 col-md-3 related-grids'>
          <a href=single.php?id=".$row['aid']." class='thumbnail'>
            <img src='admin/".$row['aphoto']."' alt='' style='height:110px;'/>
          </a>
          <h5><a href=single.php?id=".$row['aid'].">".$row['atitle']."</a></h5>
        </div>
        ";
        }
      }

      /*FOR BREAKINGNEWS*/
      public function breakingNewsDisplay(){

            $sql3="SELECT * from article WHERE astatus=1  ORDER BY aid DESC LIMIT 0, 5";
            $result = mysqli_query($this->db,$sql3);



            while($row=mysqli_fetch_array($result)) {
              echo"

          	<div class='marquee1'><a class='breaking' href=single.php?id=".$row['aid'].">>>".$row['atitle']."...</a></div>
          ";
          }
        }

/*   FOR SEPARATE TRANSFER DISPLAY PAGE*/
              public function transferarticle(){

            $sql3="SELECT * from article WHERE astatus=1 and acategory='transfer' ORDER BY aid DESC LIMIT 0, 10 ";
            $result = mysqli_query($this->db,$sql3);
            echo "<div class='articles'>
          			<div class='articles sports'>
          					<header>
          						<h3 class='title-head btn btn-info'>Transfers</h3>
          					</header>
              <div class='articles'>";
            while($row=mysqli_fetch_array($result)) {

        echo"

                          <div class='article'>
                            <div class='article-left'>
                              <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' style='height:230px;'></a>
                            </div>
                            <div class='article-right'>
                              <div class='article-title'>
                                <p>" .$row['adate']."</p>
                                <a class='title' href=single.php?id=".$row['aid']."> ".$row['atitle']."</a>
                              </div>
                              <div class='article-text'>
                                <p>".$row['ashort'].".....</p>
                                <a href=single.php?id=".$row['aid']."><img src='images/more.png' alt='' /></a>
                                <div class='clearfix'></div>
                              </div>
                            </div>
                            <div class='clearfix'></div>
                          </div>
";
  }
        echo "</div></div><div class='clearfix'></div><div class='col-md-8'>
                                ";

                                    }

    /*FOR DIPLAYING TRANSFER NEW IN BOTTOM*/
    public function smalltransferarticleDisplay(){
    $sql3="SELECT * from article WHERE astatus=1 and acategory='transfer' ORDER BY aid DESC LIMIT 0, 4 ";
    $result = mysqli_query($this->db,$sql3);
    while($row=mysqli_fetch_array($result)) {
    echo"
        <div class='c-sports-main'>
        <div class='c-image'>
        <a href=single.php?id=".$row['aid']."><img src='admin/".$row['aphoto']."' alt='' style='height:120px;width:100%;'/></a>
        </div>
        <div class='c-text'>
            <a class='power' href=single.php?id=".$row['aid']." style='font-size:19px;'>".$row['atitle']."</a>
          <p class='date'>" .$row['adate']."</p>
            <a class='reu'href=single.php?id=".$row['aid'].">Read more</a>
          <div class='clearfix'></div>
        </div>
        <div class='clearfix'></div>
        </div>";
        }
      echo "<div class='clearfix'></div>
  ";
}


    }

?>
