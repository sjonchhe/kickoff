<?php
$id=$_GET['id'];
include_once('class/articledisplay.php');
$article=new ArticleD();
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if($_SERVER['REQUEST_METHOD']=='POST')
{

  include('admin/class/classcomment.php');
  $commenting=new Commenting();
  extract($_POST);
  $commenting->comment($commenter,$cemail,$comment,$id);

}
 ?>

<!doctype html>
<html>
<head>
  <title>
   <?php

  $article->titleDisplay($id);

   ?>
 </title>

  <meta charset="utf-8"/>
  <meta name="author" content="Sandesh Jonchhe">

  <meta name="description" content="Index page by Sandesh Jonchhe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" type="image/png" href="gallery/football.jpg">
<!--JS FILES-->
<script src="js/bootstrap.min.js">
</script>
<script src="assets/js/material.min.js">
</script>
<script src="assets/js/nouislider.min.js">
</script>
<script src="assets/js/bootstrap-datepicker.js">
</script>
<script src="assets/js/material-kit.js">
</script>
<script src="assets/jquery/jquery-3.2.0.min.js">
</script>
<script src="assets/js/jquery.min.js"></script>
	<link rel="icon" type="image/png" href="Gallery/football.jpg">
<!--CSS Files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="assets/css/material-kit.css" type="text/css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Custom Theme files-->
<link href="assets/css/homestyle.css" rel="stylesheet" type="text/css" >


<!-- hIpster card's links-->
<link href="assets/css/hipster_cards.css" rel="stylesheet"/>
<style>
       .card{
           margin-bottom: 70px;
       }
   </style>
 <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
 <script src="assets/js/hipster-cards.js"></script>
</head>

<body>
<!--START--FACEBOOK LIKE AND SHARE BUTTON-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=121861798404001";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- END--FOR FACEBOOK COMMENT-->


  <div class="container-fluid">

    <div class="row ">
      <!-- header-section-starts-here -->

<!--new navigaion-->
<nav class="navbar navbar-info" role="navigation" style="margin-bottom:0px;">
	<div class="container-fluid">
    	<div class="navbar-header">
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
    		</button>
        <a  href="index.php" style="margin-right:15px;"><img src="gallery/kickoffbanner1.png" class="kickoff"></a>

    	</div>

    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


        <?php
            include('class/menu.php');
            $menu=new Menu();
            $menu->menuDisplay();
        ?>


    	</div>
	</div>
</nav>

<!--End of new navigation-->

        </div>

        <div class="row ">
<!-- header-section-ends-here -->
            	<div class="wrap">
            		<div class="move-text">
            			<div class="breaking_news">
            				<h2>Breaking News</h2>
            			</div>
            			<div class="marquee">
                    <?php $article->breakingNewsDisplay(); ?>

            				<div class="clearfix"></div>
            			</div>
            			<div class="clearfix"></div>
            			<script type="text/javascript" src="assets/js/jquery.marquee.min.js"></script>
            			<script>
            			  $('.marquee').marquee({ pauseOnHover: true });
            			  //@ sourceURL=pen.js
            			</script>
            		</div>
            	</div>
        </div>
	<!-- content-section-starts-here -->
  <d  iv class="row">
  <div class="main-body">
		<div class="wrap">
		<ol class="breadcrumb" style="margin-top:-30px;margin-bottom:18px;">
			  <li><a href="index.php">Home</a></li>
			  <li class="active">Single Page</li>
			</ol>
			<div class="single-page">
			<div class="col-md-8 content-left single-post">
				<div class="blog-posts">

          <?php
            $article->singleArticleDisplay();
           ?>
           <!--FOR FACEBOOK LIKE AND SHARE-->
           <div class="fb-like" data-href="<?php echo $actual_link; ?>" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
           <!--FOR FACEBOOK COMMENTS-->
           <div class="fb-comments col-md-12 " data-href="<?php echo $actual_link; ?>" data-numposts="5" ></div>
</div>
					<!--related-posts-->



				<!--//related-posts-->

				<div class="response">
					<h4>Responses</h4>



							<?php
              include_once('admin/class/classcomment.php');
              $commenting=new Commenting();
              $commenting->getComment($id);
               ?>




				</div>
				<div class="coment-form">
					<h4>Leave your comment</h4>
					<form action="" method="POST">
						<input type="text" Placeholder="Name " name="commenter" required>
						<input type="email"  Placeholder="Email"  name="cemail" required>

						<textarea placeholder="Your comment here...." name="comment"></textarea>
						<input type="submit" value="Submit Comment" >
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

				</div>

        <!-- SIDEBAR-RIGHT-->
        <div class="col-md-4 side-bar">
  			<div class="first_half">
        				<div class="newsletter">
        					<h1 class="side-title-head">Newsletter</h1>
        					<p class="sign">Sign up to receive our free newsletters!</p>
        					<form>
        						<input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
        						<input type="submit" value="submit">
        					</form>
        				</div>
  				<div class="list_vertical">
  		         	 	<section class="accordation_menu ">
  						  <div>
  						    <input id="label-1" name="lida" type="radio" />
  						   <label for="label-1"  id="item1"><i class="ferme"> </i>Popular Posts<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
  						    <div class="content" id="a1">
  						    	<div class="scrollbar" id="style-2">
  								 <div class="force-overflow">
                  	<div class="popular-post-grids">
        									<?php
                          $article->popularPostDisplay();
                           ?>
  									</div>
  									</div>
                                  </div>
                                </div>
  						  </div>
  						  <div>
  						    <input id="label-2" name="lida" type="radio" checked/>
  						    <label for="label-2" id="item2"><i class="icon-leaf" id="i2"></i>Recent Posts<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
  						    <div class="content" id="a2">
  						       <div class="scrollbar" id="style-2">
  								   <div class="force-overflow">
  									<div class="popular-post-grids">
  											<?php
                          $article->recentpostDisplay();
                         ?>

  										</div>
  									</div>
  								</div>
  						    </div>
  						  </div>
  						  <div>
  						    <input id="label-3" name="lida" type="radio"/>
  						    <label for="label-3" id="item3"><i class="icon-trophy" id="i3"></i>Comments<i class="icon-plus-sign i-right1"></i><i class="icon-minus-sign i-right2"></i></label>
  						    <div class="content" id="a3">
  						     <div class="scrollbar" id="style-2">
  							    <div class="force-overflow">
  								            <div class="response">

                                <?php
                                $commenting->sidebarCommentDisplay();
                                ?>
  					                  </div>
  					        </div>

                    </div>
  						    </div>
  						  </div>
  						</section>
  					 </div>




  					 <div class="side-bar-articles" style="margin-bottom:20px;">
               <!--For league table-->


                   <div class="masonry-container col-md-12" style="padding:0px;  ">

                       <div class="card-box col-md-12" style="background:red;padding:0px;">
                           <div class="card" data-background="image" data-src="gallery/eplback.png" style="margin:0px;">
                               <div class="cheader">
                                   <div class="category">
                                       <h6 class="label label-info">EPL Standing</h6>
                                   </div>
                               </div>

                               <div class="scontent" style="padding:0px;">

                                   <p class="standing" style="font-size:15px;margin-top:-210px;">
                                     <div class="scontent table-responsive ">

                                          <table class="fresh-table-none table-condensed" style="font-size:16px">
                                              <thead>
                                                  <tr>

                                                       <th>Logo</th>
                                                       <th>Team</th>
                                                      <th>MP</th>
                                                      <th>GF</th>
                                                       <th>GA</th>
                                                       <th>GD</th>
                                                       <th>P</th>
                                                     </tr>


                                              </thead>
                                              <tbody>
                                                <?php
                                                 include('class/standing.php');
                                                 $standing=new Standing();
                                                 $standing->displayltable();
                                                ?>
                                              </tbody>
                                          </table>
                              </div>

                                   </p>
                               </div>
                               <div class="footer text-center">
                                    <a href="#" class="btn btn-danger btn-fill btn-round">View Full table</a>
                               </div>
                               <div class="filter">

                               </div>
                           </div> <!-- end card -->
                       </div>


                         <div class="card-box col-md-12" style="background:red;padding:0px;margin-top:10px;">
                             <div class="card" data-background="image" data-src="gallery/eplback1.png" style="margin:0px;">
                                 <div class="cheader">
                                     <div class="category">
                                         <h6 class="label label-info">Laliga Standing</h6>
                                     </div>
                                 </div>

                                 <div class="scontent" style="padding:0px;">

                                     <p class="standing" style="font-size:15px;margin-top:-210px;">
                                       <div class="scontent table-responsive ">

                                            <table class="fresh-table-none table-condensed" style="font-size:16px">
                                                <thead>
                                                    <tr>

                                                         <th>Logo</th>
                                                         <th>Team</th>
                                                        <th>MP</th>
                                                        <th>GF</th>
                                                         <th>GA</th>
                                                         <th>GD</th>
                                                         <th>P</th>
                                                       </tr>


                                                </thead>
                                                <tbody>
                                                  <?php
                                                	$standing=new Standing();
                                                   $standing->displayltablelaliga();
                                                  ?>
                                                </tbody>
                                            </table>
                                </div>

                                     </p>
                                 </div>
                                 <div class="footer text-center">
                                      <a href="#" class="btn btn-danger btn-fill btn-round">View Full table</a>
                                 </div>
                                 <div class="filter">

                                 </div>
                             </div> <!-- end card -->
                         </div>
                       </div>

              <!--ENd of league table-->

  					 </div>
  					 </div>
  					 <div class="secound_half">

  					 <div class="popular-news" >
  						<header>
  							<h3 class="title-popular btn btn-info" style="margin-top:20px;">National News</h3>
  						</header>
  						<div class="popular-grids">
  						<?php
                $article->nationalarticleDisplay();
               ?>
  						</div>
  					</div>
  					</div>
  					<div class="clearfix"></div>
  			</div>
  			<div class="clearfix"></div>
  		</div>
  	</div>
  </div>
  </div>

	<!-- content-section-ends-here -->
	<?php
include('footer.php');
   ?>
   <?php include_once('admin/counter.php') ?>
</body>
</html>
