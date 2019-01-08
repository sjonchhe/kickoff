<?php

include_once('inc_session.php');

include_once('class/classmenu.php');
$menu=new Menu();
include_once('class/classarticle.php');
$article=new Article();
include_once('class/classimage.php');
$gallery=new Gallery();
include_once('class/classuser.php');
$user=new User();
include_once('class/classcomment.php');
$commenting=new Commenting();
include_once('class/classplayer.php');
$player=new Player();
include_once('class/classstanding.php');
@$ac=$_GET['ac'];
 @$zid=$_GET['zid'];
$q=$_GET['q'];
  switch($q)
  {
    case 'menu':
    {
      if($_SERVER['REQUEST_METHOD']=='POST')
      {
       extract($_POST);
         $menu->menuUpdate($mid,$mname,$mdescription,$morder,$mparent,$mstatus);
       }
       break;
     }
    case 'user':
    {
      if($_SERVER['REQUEST_METHOD']=='POST')
      {
       extract($_POST);
         $user->userUpdate($userid,$uname,$fname,$lname,$uemail,$ucontact,$uaddress,$uabout,$udescription,$ustatus,$utype);
       }
       break;
     }
     case 'article':
     {
       if($_SERVER['REQUEST_METHOD']=='POST')
       {
        extract($_POST);
      $article->articleUpdate($aid,$atitle,$akeyword,$adescription,$aheading,$ashort,$afull,$astatus);
        }
        break;
      }
      case 'gallery':
      {
        if($_SERVER['REQUEST_METHOD']=='POST')
        {
         extract($_POST);
       @$gallery->galleryUpdate($gid,$gtype,$gtitle,$vpath,$gdescription,$target_gpath,$gstatus);
         }
         break;
       }
       case 'player':
       {
         if($_SERVER['REQUEST_METHOD']=='POST')
         {
          extract($_POST);
         $player->playerUpdate($pid,$pname,$pposition,$pleague,$pteam,$pnationality,$pdob,$page,$pfname,$plname,$psnum,$pfoot,$pheight);
          }
          break;
        }

       default:
 }


 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../gallery/s.jpg">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Panel | User Profile</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

<?php include('inc_linkscript.php'); ?>
</head>
<body>

<div class="wrapper" style="margin-top:-58px;margin-bottom:0px;">
    <div class="sidebar" data-color="trans" data-image="assets/img/soccer.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


		<div class="sidebar-wrapper">
					<div class="logo">
						<h5>Dashboard by Sjonchhe</h5>
							</div>

<?php include('inc_menu.php'); ?>

		</div>    </div>

    <div class="main-panel">
			<nav class="navbar navbar-default navbar-fixed">
						</nav>
        <div class="content">
            <div class="container-fluid">

              <?php

                  switch($ac)
                  {
                    case 'edit':
                    {


                       $q=$_GET['q'];
                        switch($q)
                          {
                            case 'menu':
                            {
                              //echo 'edit menu';
                              $menu->editMenu($zid);
                              break;
                            }
                            case 'article':
                            {
                              //echo 'edit article';
                              $article->editArticle($zid);
                              break;
                            }
                            case 'gallery':
                            {
                              //echo 'edit gallery';
                              $gallery->editGallery($zid);
                              break;
                            }
                            case 'user':
                            {
                              //echo 'edit user ';
                              $user->editUser($zid);
                              break;
                            }
                            case 'player':
                            {
                              $player->editPlayer($zid);
                              break;
                            }
                            case 'standing':
                            {
                              $standing=new Standing();
                              	$standing->eplTableUpdate();
                                 break;
                            }
                             default:{echo"error";}

                          }
                          break;

                    }
                    case 'delete':
                    {

                       $q=$_GET['q'];
                       switch($q)
                       {
                         case 'menu':
                         {
                           $menu->deleteMenu($zid);
                           break;
                         }
                         case 'article':
                         {
                           $article->deleteArticle($zid);
                           break;
                         }
                         case 'gallery':
                         {
                           $gallery->deleteGallery($zid);
                           break;
                         }
                         case 'user':
                         {
                           $user->deleteUser($zid);
                           break;
                         }
                         case 'comment':
                         {
                           $commenting->deleteComment($zid);
                           break;
                         }
                         case 'player':
                         {
                           $player->deletePlayer($zid);
                           break;
                         }
                         default:{echo"error";}
                       }
                       break;
                    }
                    default:
                    {
                      echo"please choose proper function";
                    }
                  }


              ?>

            </div>
        </div>



    </div>
</div>


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

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
