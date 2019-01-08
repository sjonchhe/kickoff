<div class="row">
    <div class="col-md-12"  >
        <div class="card" >
                    <div class="col-md-4 col-sm-4">
                          <div class="card-container" >
                            <?php  include_once('class/classdashboard.php');
                                    $dashboard=new Dashboard();
                                    $dashboard->adminDetail(); ?>
                         </div> <!-- end card-container -->
                     </div> <!-- end col sm 3 -->
                    <!--         <div class="col-sm-1"></div> -->

        </div>


<!-- START -For number stats -->
        <div class="col-md-4 col-sm-4">
            <div class="card-container" style="margin-top:-10px;" >
               <div class="card">
                   <div class="front" >
                       <div class='cover'>
                         <h3 class="name">Users List</h3>
                         <p class="profession">Total number of users</p><br>
                       </div>
                       <div class='user'>
                       </div>
                       <div class="content">
                           <div class="main">

                              <center>

                                <h1 class="title" style="font-size:90px;"><?php $dashboard->userCount();?></h1></center>
                           </div>
                           <div class="footer" >
                               <i class="fa fa-mail-forward"></i> LIST
                           </div>
                       </div>
                   </div> <!-- end front panel -->
                   <div class="back" style="padding:0px;">
                       <div class="header">
                           <h5 class="motto">"Recently Registered"</h5>
                       </div>
                       <div class="content" style="margin-top:-15px;">
                           <div class="main" >
                                  <p class='text-center'>
                                    <table class="table table-condensed table-hover" >
                                      <tr><th>Username</th>
                                      <th>User status</th>
                                      <th>User Type</th>
                                    </tr>
                                      <?php $dashboard->getAllUsers();?>
                                  </table></p>
                               </div><br>
                                <center>  <a href="index.php?id=2"><button class="btn btn-info btn-lg">View full detail</button></a>
                           </div>
                       </div>
                       <div class="footer">
                           <div class="social-links text-center">

                           </div>
                       </div>
                   </div> <!-- end back panel -->
               </div> <!-- end card -->
           </div> <!-- end card-container -->
       <!-- end col sm 3 -->
      <!--         <div class="col-sm-1"></div> -->


        <!-- START -For number stats -->
                <div class="col-md-4 col-sm-4">
                    <div class="card-container" style="margin-top:-10px;">
                       <div class="card">
                           <div class="front">
                             <div class='cover'>
                               <h3 class="name">Comment Counter</h3>
                               <p class="profession">Total number of comments</p><br>
                             </div>
                             <div class='user'>

                             </div>

                               <div class="content">
                                   <div class="main">

                                      <center><h1 class="title" style="font-size:90px;"><?php $dashboard->commentCount();?></h1></center>
                                   </div>
                                   <div class="footer" >
                                       <i class="fa fa-mail-forward"></i> LIST
                                   </div>
                               </div>
                           </div> <!-- end front panel -->
                           <div class="back" style="padding:0px;">
                               <div class="header">
                                   <h5 class="motto">"Article with highest comments"</h5>
                               </div>
                               <div class="content"  style="margin-top:-15px;">
                                   <div class="main" >
                                          <p class='text-center'>

                                              <?php $dashboard->highestCommentArticle();?>

                                       </div><br>
                                        <center>  <button class="btn btn-info btn-lg">View full detail</button>
                                   </div>
                               </div>
                               <div class="footer">
                                   <div class="social-links text-center">

                                   </div>
                               </div>
                           </div> <!-- end back panel -->
                       </div> <!-- end card -->
                   </div> <!-- end card-container -->
      <!--         <div class="col-sm-1"></div> -->
</div>
</div></div>
<!--START - ALL MENU DEATAILS IN ONE TABLE-->
<div class="row">
  <div><center>
  <div class="col-md-8" style="background:white;box-shadow:0px 1px 5px gray;border-radius:3px;overflow:scroll;">

          <table class="table table-hover table-striped text-center">
              <thead>
                  <tr>
                      <th class="text-center"><h3>List</h3></th>
                      <th class="text-center"><h3>Description</h3></th>
                      <th class="text-center"><h3>Total Count</h3></th>

                      <th class="text-right"><h3></h3></th>


                  </tr>

                  <tr><td>Users</td><td>Users/admins lists</td><td><?php $dashboard->userCount(); ?></td><td><a href="index.php?id=2"><button class="btn btn-info">View</button></a></td></tr>

                  <tr><td>Competition</td><td>All the competitions list</td><td><?php $dashboard->competitionCount(); ?></td><td><a href="index.php?id=4"><button class="btn btn-info">View</button></a></td></tr>
                  <tr><td>Teams</td><td>All the teams in thei respective competition</td><td><?php $dashboard->teamCount(); ?></td><td><a href="index.php?id=9"><button class="btn btn-info">View</button></a></td></tr>
                  <tr><td>Players</td><td>All the players in the respective teams</td><td><?php $dashboard->playerCount(); ?></td><td><a href="index.php?id=5"><button class="btn btn-info">View</button></a></td></tr>
                  <tr><td>Article</td><td>All the articles to be displayed in the front end</td><td><?php $dashboard->articleCount(); ?></td><td><a href="index.php?id=6"><button class="btn btn-info">View</button></a></td></tr>
                  <tr><td>Gallery</td><td>Photos and videos</td><td><?php $dashboard->galleryCount(); ?></td><td><a href="index.php?id=7"><button class="btn btn-info">View</button></a></td></tr>
                  <tr><td>Comments</td><td>Total number of comments</td><td><?php $dashboard->commentCount(); ?></td><td><a href="index.php?id=10"><button class="btn btn-info">View</button></a></td></tr>
              </thead>
              <tbody>
                <?php

                ?>

              </tbody>
          </table>
</div>

<!-- START -For article with maximum views -->
        <div class="col-md-4 col-sm-4">
            <div class="card-container" >
               <div class="card">
                   <div class="front">
                     <div class='cover'>
                       <h3 class="name">Article Counter</h3>
                       <p class="profession">Total number of articles</p><br>
                     </div>
                     <div class='user'>

                     </div>

                       <div class="content">
                           <div class="main">

                              <center><h1 class="title" style="font-size:90px;"><?php $dashboard->articleCount();?></h1></center>
                           </div>
                           <div class="footer" >
                               <i class="fa fa-mail-forward"></i> LIST
                           </div>
                       </div>
                   </div> <!-- end front panel -->
                   <div class="back" style="padding:0px;">
                       <div class="header">
                           <h5 class="motto">"Highest views"</h5>
                       </div>
                       <div class="content"  style="margin-top:-15px;">
                           <div class="main" >
                                  <p class='text-center'>
                                    <table class="table table-condensed table-hover">
                                      <tr><th>Article Id</th>
                                      <th>Published Date</th>
                                      <th>Counter</th>
                                    </tr>
                                      <?php $dashboard->articlecounter();?>
                                  </table></p>
                               </div><br>
                                <center>  <button class="btn btn-info btn-lg">View full detail</button>
                           </div>
                       </div>
                       <div class="footer">
                           <div class="social-links text-center">

                           </div>
                       </div>
                   </div> <!-- end back panel -->
               </div> <!-- end card -->
           </div> <!-- end card-container -->

</div>
  </div>
<div class="row">
  <div class="col-md-8" style="background:white;box-shadow:0px 1px 5px gray;border-radius:3px;margin-top:20px;padding-top:10px;">
    <table id="dtable" class="table table-hover table-striped text-center" style="padding-top:">
        <thead>
          <tr><th colspan="3" >Recent Comments(Last 10)  <a href="index.php?id=10"><button class="btn btn-info btn-sm ">  View all</button></a></th></tr>
            <tr>
                <th class="text-center"><h4>Comment By</h4></th>
                <th class="text-center"><h4>Comment</h4></th>
                <th class="text-center"><h4>Date</h4></th>
                <th class="text-center"><h4>Article Id</h4></th>


            </tr></thead>
            <tbody>
            <?php $dashboard->recentComments(); ?>
          </tbody>
    </table>
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
<!-- END OF TABLE -->
