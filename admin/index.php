<?php ob_start ();
include('inc_session.php');
include_once('class/classuser.php');
$user=new User();



?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="icon" type="image/png" href="../gallery/football.jpg">
	<title>
		<?php
		$pageid=$_GET['id'];
		switch($pageid)
		{
			case '1':
			echo "Dashboard | Admin Panel | Kickoff.com";
			break;
			case '2':
			echo "Users/Admin List | Admin Panel | KickOff.com";
			break;
			case '3':
			echo "Menu | Admin Panel | Kickoff.com";
			break;
			case '5':
			echo "Players | Admin Panel | Kickoff.com";
			break;
			case '6':
			echo "Articles | Admin Panel | Kickoff.com";
			break;
			case '8':
			echo "League Table | Admin Table | Kickoff.com";
			break;
			case '7':
			echo "Gallery | Admin Table | Kickoff.com";
			break;
			case '10':
			echo "Comments | Admin Table | Kickoff.com";
			break;
			default:
			echo "Admin table | Kickoff.com";
		};


		 ?>

	</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

<?php include('inc_linkscript.php');?>

</head>
<body>

<div class="wrapper" style="margin-top:-58px;margin-bottom:0px;">

    <div class="main-panel" style=" ">
        <nav class="navbar navbar-default navbar-fixed">
            <?php include('inc_navbar.php') ?>
        </nav>
				<div class="sidebar" data-color="trans" data-image="assets/img/soccer.jpg">
				  <div class="sidebar-wrapper" style="float:right;">
				        <div class="logo">
				          <h5>Dashboard by Sjonchhe</h5>
				        </div>
				              <?php include('inc_menu.php'); ?>
				  </div>
				</div>


        <div class="content" >
            <div class="container-fluid">
                <div class="row">
									<?php   $id =$_GET['id'];
												switch ($id) {
													case "1":
															include('dashboard.php');
															break;
                              case "1":
    															include('dashboard.php');
    															break;
                              case "2":
        													include('users.php');
        													break;
                            case "3":
        													include('menu.php');
        													break;
														case "4":
			        										include('competition.php');
			        										break;
														case "5":
																	include('player.php');
																	break;

														case "6":
			        										include('article.php');
			        										break;
															case "7":
															include('gallery.php');
																	break;
															case "8":
															include('leaguetable.php');
																	break;


														case "9":
															include('team.php');
															break;
															case "10":
																include('comments.php');
																break;
													default:
															 header('location: index.php?id=1');
												}
												 ?>


                </div>

							</div>
							</div>
                </div>



    </div>



</body>

    <!--   Core JS Files   -->

			<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
		<script src="../assets/js/demo.js"></script>



</html>
