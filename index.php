<?php
include('admin/class/classsearch.php');
$search=new Search();
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $query=$_POST['query'];
$search->searchPlayer();
}

 ?>

<!doctype html>
<html>
<head>
  <title>KickOff | HomePage</title>

  <meta charset="utf-8"/>
  <meta name="author" content="Sandesh Jonchhe">

  <meta name="description" content="Index page by Sandesh Jonchhe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	<link href="assets/css/animate.min.css" rel="stylesheet"/>
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
<script src="assets/jquery/jquery-3.2.0.min.js">
</script>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/easing.js"></script>

<link href="assets/css/profile2.css" type="text/css" rel="stylesheet">
<!--CSS Files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
<link href="assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="assets/css/material-kit.css" type="text/css" rel="stylesheet">
<link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Frijole" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Product+Sans:400,400i,700,700i' rel='stylesheet' type='text/css'>


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
<!--JS FOR THE NEWS -->
<script src="js/responsiveslides.min.js"></script>
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


</head>
<body>
  <!--search start here-->
<div class="container-fluid">

<!--START OF tOP SEARCH SECTION-->
    <div class="row">
      <div class="search_div">
        <div class="inner_div">
              <div class="search" style="" >
<img src="gallery/kickoff.png" style="height:250px;width:60%;margin-bottom:-60px;min-width:300px;" class="kickoff_search">
                  	<div class="s-bar">
                  	   <form action="" method="POST">
                      		<input type="text" name="query"  style="max-width:450px;" placeholder="Player's name here" value='<?php echo @$query;?>'  >
                      		<input type="submit"  value="Search"/>
                  	  </form>
                  	</div>
                     <?php
                      $search-> getPlayer();
                                  ?>
              	<!--<p>Popular searches: <a href="#">Cristiano Ronaldo</a> <a href="#"> Lionel Messi </a></p>-->
              </div>
          <!--search end here-->
        </div>
      </div>
    </div>

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
          		<a  href="#" style="margin-right:15px;"><img src="gallery/kickoffbanner1.png" class="kickoff"></a>
          	</div>

          	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >


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
            include('class/articledisplay.php');
            $article=new ArticleD();
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
			<div class="col-md-8 content-left">
				<div class="slider">
					<div class="callbacks_wrap">
						<ul class="rslides" id="slider">
              <?php
              include('class/classgallery.php');
              $gallery=new Gallery();
              $gallery->getAllSlider();

               ?>
						</ul>
					</div>
				</div>
				<div class="articles">
			<!---		<header>
						   <a href="pages.php?id=9"><h3 class="title-head btn btn-info col-md-7">Football around the world</h3></a>
					</header>-->

						      <?php

                    $article->articleDisplay();
                   ?>

				</div>
        <div class="col-md-7"></div><div class="col-md-2"></div>
         <a href="pages.php?id=9"><div class="other col-md-3 text-center"><h4>Other articles</h4></div></a>
					<div class="sports-top">
							<div class="s-grid-left">
								<div class="cricket" style="height:770px;overflow:hidden;">
									<header>
									<a href="pages.php?id=3">	<h3 class="title-head btn btn-info">Transfers</h3></a>
									</header>
                  <?php
                      $article->smalltransferarticleDisplay();
                      ?>
                	</div>
								</div>
							<div class="s-grid-right">
								<div class="cricket" style="height:770px;overflow:hidden;">
									<header>
										<a href="pages.php?id=8"><h3 class="title-popular btn btn-info">EA Sports FIFA </h3></a>
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
      				<div class="newsletter" >
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
             <!--For league table-->


                 <div class="masonry-container col-md-12" style="padding:0px;">

                     <div class="card-box col-md-12" style="padding:0px;height:450px;overflow:hidden;">
                         <div class="card" data-background="image" data-src="gallery/eplback.png" style="margin:0px;">
                             <div class="cheader">
                                 <div class="category">
                                     <h6 class="label label-info">EPL Standing</h6>
                                 </div>
                             </div>

                             <div class="scontent" style="padding:0px;" >

                                 <p class="standing" style="font-size:15px;margin-top:-210px;">
                                   <div class="scontent table-responsive ">

                                        <table class="fresh-table-none table-condensed" style="font-size:16px;">
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
                                               include_once('class/standing.php');
                                               $standing=new Standing();
                                               $standing->displayltable();
                                              ?>
                                            </tbody>
                                        </table>
                            </div>

                                 </p>
                             </div>

                                  <div class='footer text-center'>
                                      <a href='pages.php?id=34' class='btn btn-danger btn-fill btn-round'>View Full table</a>
                                 </div>

                             <div class="filter">

                             </div>
                         </div> <!-- end card -->
                     </div>


                       <div class="card-box col-md-12" style="padding:0px;margin-top:10px;height:450px;overflow:hidden;">
                           <div class="card" data-background="image" data-src="gallery/eplback1.png" style="margin:0px;">
                               <div class="cheader">
                                   <div class="category">
                                       <h6 class="label label-info">Laliga Standing</h6>
                                   </div>
                               </div>

                               <div class="scontent" style="padding:0px;">

                                   <p class="standing" style="font-size:15px;margin-top:-210px;">
                                     <div class="scontent table-responsive ">

                                          <table class="fresh-table-none table-condensed" style="font-size:16px;">
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
                                    <a href="pages.php?id=35" class="btn btn-danger btn-fill btn-round">View Full table</a>
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
						<a href="pages.php?id=13">	<h3 class="title-popular btn btn-info" style="margin-top:20px;">National News</h3></a>
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

  <script>
  $(document).ready(function(){
  	var $Menu = $('.Img');
  	$('.Img').mouseenter(function() {
          $('.PopUp').css('opacity', '1');
  		$('.PopUp').css('margin-top', '20px');
      });
  		$('.Img').mouseleave(function() {
          $('.PopUp').css('opacity', '0');
  		$('.PopUp').css('margin-top', '0px');
      });
  	$('.Img').on('click', function() {
  		if($Menu.hasClass('Img')){
  				$('.Img').addClass('click');
          	$('.inner_div').css('padding-top','1px');
              $('.kickoff_search').css('height','140px');
                  $('.kickoff_search').css('margin-bottom','-40px');
                    	$('.inner_div').css('transition','all 0.83s');

  		$('.Img').removeClass('Img');
  				$('.Profile').addClass('clickProfile');
  				$('.Profile').removeClass('Profile');
  				$('.clickPopUp').css('display', 'block');
  				$('.PopUp').css('display', 'none');
  		}else{
  		$('.click').addClass('Img');
  		$('.click').removeClass('click');
  				$('.clickProfile').addClass('Profile');
  				$('.clickProfile').removeClass('clickProfile');
  								$('.clickPopUp').css('display', 'none');
  				$('.PopUp').css('display', 'block');
          	$('.inner_div').css('padding-top','80px');
              $('.kickoff_search').css('height','250px');
                $('.kickoff_search').css('margin-bottom','-60px');
                	$('.inner_div').css('transition','all 0.83s');
  			}
  		});
  	});
  </script>
  <!---->
</div>
</div>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
