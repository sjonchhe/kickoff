<?php
/*if($_SERVER['REQUEST_METHOD']=='POST')
{
include('admin/class/classsearch.php');
$search=new Search;
$search->searchPlayer($query);
}*/

 ?>
 <?php
 include('class/articledisplay.php');
 $article=new ArticleD();
 include('class/standing.php');
 $standing=new Standing();
?>
<!doctype html>
<html>
<head>
  <title><?php
    $title=$_GET['id'];
      switch($title)
      {
        case '2':
        echo "League table | KickOff";
        break;
        case '3':
        echo "Transfers | Articles | KickOff";
        break;
        case '8':
        echo "Fifa | Articles | KickOff";
        break;

        case '9':
        echo "Articles | KickOff";
        break;
        case '7':
        echo "Gallery | KickOff";
        break;
        case '13':
        echo "National News | Articles | KickOff";
        break;
        case '34':
        echo "EPL Standing | League Table | KickOff";
        break;
        case '35':
        echo "Laliga Standing | League Table | KickOff";
        break;
      }

   ?></title>

  <meta charset="utf-8"/>
  <meta name="author" content="Sandesh Jonchhe">

  <meta name="description" content="Index page by Sandesh Jonchhe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="icon" type="image/png" href="gallery/football.jpg">
<!--JS FILES-->
<script src="assets/js/bootstrap.min.js">
</script>
<script src="assets/js/material.min.js">
</script>
<script src="assets/js/nouislider.min.js">
</script>
<script src="assets/js/bootstrap-datepicker.js">
</script>
<script src="assets/js/material-kit.js">
</script>
<script src="jquery/jquery-3.2.0.min.js">
</script>
<script src="assets/js/jquery.min.js"></script>
<!--JS FOR THE NEWS -->
<script src="assets/js/responsiveslides.min.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			pager: true,
		  });
		});
	</script>
	<link rel="icon" type="image/png" href="Gallery/football.jpg">
  <script type="text/javascript" src="assets/js/move-top.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<!--CSS Files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="assets/css/material-kit.css" type="text/css" rel="stylesheet">
<link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
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
<!--FOR GALLERY-->
<link rel="stylesheet" href="assets/css/touchTouch.css" type="text/css" media="all" />
<script type="text/javascript" src="assets/js/jquery.fancybox.js"></script>
   <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

    });
  </script>

<body>
  <!--search start here-->
<div class="container-fluid">

<!--START OF tOP SEARCH SECTION-->
  <!--  <div class="row">
      <div class="search_div">
        <div class="inner_div">
              <div class="search">

                  	<div class="s-bar">
                  	   <form action="admin/class/classsearch.php" method="POST">
                      		<input type="text" name="query" placeholder="Player's or club 's name" >
                      		<input type="submit"  value="Search"/>
                  	  </form>
                  	</div>
              	<p>Popular searches: <a href="#">Cristiano Ronaldo</a> <a href="#"> Lionel Messi </a></p>
              </div>
          <!--search end here-->
        <!--</div>
      </div>
    </div>-->

<!--END OF TOP SEARCH SECTION-->
    <div class="row ">
      <!-- header-section-starts-here -->


      <nav class="navbar navbar-info" role="navigation" style="margin-bottom:0px;">
      	<div class="container-fluid">
          	<div class="navbar-header">
          		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
          		</button>
          	<a  href="index.php" style="margin-right:15px;"><img src="gallery/kickoffbanner1.png" class="kickoff"></a>          	</div>

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

    <!--START OF breaking news-->

    <div class="row">
      <!-- header-section-ends-here -->
      <div class="wrap">
        <div class="move-text">
          <div class="breaking_news">
            <h2>Breaking News</h2>
          </div>
          <div class="marquee">
            <?php

            $article->breakingNewsDisplay(); ?>

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
  <!--END OF BREAKING NEWS-->

<div class="container-fluid contents">
<div class="row">
  <!-- content-section-starts-here -->
	<div class="main-body">
		<div class="wrap">
      <ol class="breadcrumb" style="margin-top:-2px;margin-bottom:10px;">
          <li><a href="index.php">Home</a></li>
          <li class="active">
            <?php   $id =$_GET['id'];
                  switch ($id) {
                    case "2":
                        echo "League Table";
                        break;
                    case "3":
                        echo "Transfer";
                        break;
                        case "7":
                        echo "Gallery";
                        break;
                        case "8":
                          echo "Fifa";
                            break;
                        case "9":
                          echo "News";
                          break;
                          case "13":
                            echo "National";
                            break;
                            case "34":
                            echo "League Table / EPL";
                            break;
                            case "35":
                            echo "League Table / Laliga";
                            break;
                      default:
                        echo "";
                  }
                   ?>
            </li>
        </ol>



			<!--	<div class="articles">-->
                    <?php
                    $id =$_GET['id'];


                    switch ($id) {
                      case "1":
                          echo "This is first page";

                          break;
                      case "2":
                        echo "<div class='col-md-8 content-left' style='margin-top:-10px;'>";
                        include('leaguetable.php');


                          break;
                      case "3":
                          echo "<div class='col-md-8 content-left' style='margin-top:-10px;'>";

                          	$article->transferarticle();
                          break;
                      case "7":
                          echo "<div class='col-md-12 contennt' style='margin-top:-10px;'>";
                          include('gallery.php');
                          if($id=7)
                          {

                              include('footer.php');
                            die;
                          	    }
                      case "9":
                            $article->getallarticle();

                          break;
                          case "8":
                            echo "<div class='col-md-8 content-left' style='margin-top:-10px; '>";
                                $article-> fifaarticleDisplay();

                              break;
                              case "13":
                              echo "<div class='col-md-8 content-left' style='margin-top:-10px; '>";
                                    $article->nationalarticle();

                                  break;
                                  case "34":
                                      $standing->getEplTable();

                                      break;
                                      case "35":
                                            $standing->getLaligaTable();

                                          break;
                      default:
                          echo "Your favorite color is neither red, blue, nor green!";
                    }
                     ?>
      </div></div>



					<div class="sports-top ">
							<div class="s-grid-left">
								<div class="cricket">
									<header>
										<h3 class="title-head btn btn-info">Transfers</h3>
									</header>
                  <?php

                      $article->smalltransferarticleDisplay();
                      ?>
                	</div>
								</div>
							<div class="s-grid-right">
								<div class="cricket">
									<header>
										<h3 class="title-popular btn btn-info">EA Sports FIFA </h3>
									</header>
                  <?php
                  $article->smallfifaarticleDisplay();
                   ?>



										</div>
								</div>
								<div class="clearfix"></div>
							</div>
				</div>
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
                              include_once('admin/class/classcomment.php');
                              $commenting=new Commenting();
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


					 </div>
					 </div>
					 <div class="secound_half" >

					 <div class="popular-news"  >
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
</div>
	<!-- content-section-ends-here -->
	<?php
  include('footer.php');
   ?>
	<!-- footer-section-ends-here -->
	<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				wrapID: 'toTop', // fading element id
				wrapHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!---->



</div>
</div>
</body>
</html>
