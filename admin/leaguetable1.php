
<?php
include_once('inc_session.php');
include('class/classstanding.php');


  ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../gallery/s.jpg">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Panel | League Table</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

<?php include('inc_linkscript.php'); ?>

</head>
<body>

<div class="wrapper"  style="background:#EAEAED;margin-top:-58px;margin-bottom:0px;">
    <div class="sidebar" data-color="trans" data-image="assets/img/soccer.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
				<div class="logo">
					<h5>Dashboard by Sjonchhe</h5>
						</div>
<?php include('inc_menu.php'); ?>

	</div>
    </div>

    <div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
					<?php include('inc_navbar.php') ?>
			</nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">


                  <?php
                    $page=$_GET['page'];
                    switch($page)
                    {
                      case 'epltable':
                      {
                        echo'
                        <div class="col-md-12">
                            <div class="card">
                            <div class="header">
                                <h4 class="title">EPL Standing</h4><img src="../gallery/logo/epl/epl.png" style=" height:80px; width:80px;"/>
                              English Premier League standing of 16/17 season
                          <!--  <a href="editepltable.php">  <button class="btn btn-primary btn-round">
                              Edit Table
                            </button></a>-->

                                </div>
                            <div class="content table-responsive table-full-width">
                            <br>
																	<table class="table table-hover table-striped">
																	    <thead>
																	        <tr><th></th>
																	            <th>#</th>

                                              <th>Logo</th>
                                              <th>Team</th>
																	            <th>Matches Played</th>
																	            <th>Won</th>
																							<th>Draw</th>
                                              <th>Loss</th>
                                              <th>Goals For</th>
                                              <th>Goals Against</th>
                                              <th>Goal Difference</th>
                                              <th>Points</th>

																							<th>Status</th>
																							<th class="text-right">Action</th>


																	        </tr>
																	    </thead>
																	    <tbody>';?>
                                        <?php
																				$standing=new Standing();
																				$standing->getAlleteam();

																	  echo'  </tbody>
																	</table>
											</div>
                        </div>';
                        break;
                      }
                      case 'laligatable':
                      {

                      echo '
                      <div class="col-md-12">
                          <div class="card">
                      <div class="header">
                            <h4 class="title">Laliga Standing</h4><img src="../gallery/logo/laliga/laliga.png" style=" height:80px; width:80px;"/>
                          Laliga standing of 16/17 season


                            </div>
                        <div class="content table-responsive table-full-width">
                          <br>
                              <table class="table table-hover table-striped">
                                  <thead>
                                      <tr><th></th>
                                          <th>#</th>
                                          <th>Logo</th>
                                          <th>Team</th>
                                          <th>Matches Played</th>
                                          <th>Won</th>
                                          <th>Draw</th>
                                          <th>Loss</th>
                                          <th>Goals For</th>
                                          <th>Goals Against</th>
                                          <th>Goal Difference</th>
                                          <th>Points</th>

                                          <th>Status</th>
                                          <th class="text-right">Action</th>


                                      </tr>
                                  </thead>
                                  <tbody>';?>
                                    <?php
                                    $standing=new Standing();
                                    $standing->getAllteamlaliga();


                              echo '    </tbody>
                              </table>
                  </div>';


                      }
                    }
?>


                    </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-tools',
            message: "Edit your <b>About Me</b> and <b>Job Description</b> if you haven't already"

          },{
              type: 'info',
              timer: 2000,

          });

    });
</script>

</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
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

</html>
