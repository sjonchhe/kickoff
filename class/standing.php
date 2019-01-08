<?php
require_once('dbconfig.php');

class Standing extends dbConnect
{

//League table on homepage
Public function displayltable()
{
    $sql3="SELECT * FROM epl_table  ORDER BY epts DESC LIMIT 0,6"  ;
    $result=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result))
    {
        echo "
        <tr>

            <td><img src='gallery/logo/epl/".$row['ephoto']."' style='height:30px;width:30px; alt='logo'></td>

            <td>".$row['ename']."</td>
            <td>".$row['emp']."</td>

            <td>".$row['egf']."</td>
            <td>".$row['ega']."</td>
            <td>".$row['egd']."</td>
            <td>".$row['epts']."</td>



        </tr>

          ";
    }
  }
  Public function displayltablelaliga()
  {
      $sql3="SELECT * FROM laliga_table  ORDER BY lpts DESC LIMIT 0,6"  ;
      $result=mysqli_query($this->db,$sql3);


      while($row=mysqli_fetch_array($result))
      {
          echo "
          <tr>

              <td><img src='gallery/logo/laliga/".$row['lphoto']."' style='height:30px;width:30px; alt='logo'></td>

              <td>".$row['lname']."</td>
              <td>".$row['lmp']."</td>

              <td>".$row['lgf']."</td>
              <td>".$row['lga']."</td>
              <td>".$row['lgd']."</td>
              <td>".$row['lpts']."</td>



          </tr>



          ";
      }

    }

    /*FOR DISPLAYING FULL EPL TABLE*/
    Public function getEplTable()
    {
        $sql3="SELECT * FROM epl_table  ORDER BY epts DESC LIMIT 0,20"  ;
        $result=mysqli_query($this->db,$sql3);

        echo "

        <div class='col-md-8'>
          <div class='articles'>
           <div class='articles sports'>
                <header>
                  <h3 class='title-head btn btn-info'>EPL Table</h3>
                  <a href='pages.php?id=35' class='btn btn-inverse'>Laliga</a>
                </header>
          <div class='articles'>

            <table class='table  table-hover table-striped'>
            <tr><th></th>
                <th>Team</th>
                <th>Matches Played</th>
                <th>Won</th>
                <th>Draw</th>
                <th>Loss</th>
                <th>Goal For</th>
                <th>Goal against</th>
                <th>Goal Difference</th>
                <th>Points</th>

            </tr>

        ";
        while($row=mysqli_fetch_array($result))
        {
            echo "


            <tr>

                <td><img src='gallery/logo/epl/".$row['ephoto']."' style='height:30px;width:30px; alt='logo'></td>

                <td>".$row['ename']."</td>
                <td>".$row['emp']."</td>
                <td>".$row['ew']."</td>
                <td>".$row['ed']."</td>
                <td>".$row['el']."</td>
                <td>".$row['egf']."</td>
                <td>".$row['ega']."</td>
                <td>".$row['egd']."</td>
                <td>".$row['epts']."</td>
            </tr>


            </tr>



            ";

        }
        echo "</table></div>";

      }
      /*FOR DISPLAYING FULL LALIGA TABLE*/
      Public function getLaligaTable()
      {
          $sql3="SELECT * FROM laliga_table  ORDER BY lpts DESC LIMIT 0,20"  ;
          $result=mysqli_query($this->db,$sql3);

          echo "
          <div class='col-md-8'>
            <div class='articles'>
             <div class='articles sports'>
                  <header>
                    <h3 class='title-head btn btn-info'>Laliga Table</h3>
                     <a href='pages.php?id=34' class='btn btn-inverse'>EPL</a>
                  </header>
            <div class='articles'>

              <table class='table  table-hover table-striped'>
              <tr><th></th>
                  <th>Team</th>
                  <th>Matches Played</th>
                  <th>Won</th>
                  <th>Draw</th>
                  <th>Loss</th>
                  <th>Goal For</th>
                  <th>Goal against</th>
                  <th>Goal Difference</th>
                  <th>Points</th>

              </tr>

          ";
          while($row=mysqli_fetch_array($result))
          {
              echo "


              <tr>

                  <td><img src='gallery/logo/laliga/".$row['lphoto']."' style='height:30px;width:30px; alt='logo'></td>

                  <td>".$row['lname']."</td>
                  <td>".$row['lmp']."</td>
                  <td>".$row['lw']."</td>
                  <td>".$row['ld']."</td>
                  <td>".$row['ll']."</td>
                  <td>".$row['lgf']."</td>
                  <td>".$row['lga']."</td>
                  <td>".$row['lgd']."</td>
                  <td>".$row['lpts']."</td>
              </tr>


              </tr>



              ";

          }
          echo "</table></div>";

        }

}
?>
