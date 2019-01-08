
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <a href="index.php?id=1" class="dropdown-toggle" data-toggle="dropdown">
                        <p style="color:#25B610;">
                  <?php
                  /*  $a=$_SESSION['uid'];
                    $db=new mysqli("localhost","root","","project") or die ('I cannot connect to the database  because: ' . mysql_error());
                    $sql="SELECT * FROM user WHERE userid='$a'";
                    $result3=mysqli_query($db,$sql);


                    while($row=mysqli_fetch_array($result3))
                    {
                      echo $row['username'];
                      echo $row['upath'];

                    }*/
                  include_once('class/classdashboard.php');
                    $dashboard=new Dashboard();
                    @$dashboard->loggedinAdmin();



                         ?>
                       </p>
                </a>
            </li>
                    </ul>

        <ul class="nav navbar-nav navbar-right">
            <li>
               <a href="index.php?id=1">
                   <p>Account</p>
                </a>
            </li>

            <li>
                <a href="logout.php?q=logout">
                    <p>Log out</p>
                </a>
            </li>
<li class="separator hidden-lg hidden-md"></li>
        </ul>
    </div>
</div>
