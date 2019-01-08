<?php
  session_start();

  $q=$_GET['q'];

    $a=$_SESSION['uid'];
    $db=new mysqli("localhost","root","","project") or die ('I cannot connect to the database  because: ' . mysql_error());
        $sql11="UPDATE user SET ustatus='1' WHERE userid='$a'";
          $result11=mysqli_query($db,$sql11);
  $_SESSION['login']=FALSE;

    session_destroy();


    header('location: loginoout.php');

 ?>
