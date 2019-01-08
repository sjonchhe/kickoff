<?php
require_once('dbconfig.php');

/*FOR THE LEAGUE TABLE PAGE*/
class StandingD extends dbConnect
{
Public function displayLeagueTable()
{
    $sql3="SELECT * FROM epl_table  ORDER BY epts DESC LIMIT 0,30"  ;
    $result=mysqli_query($this->db,$sql3);


    while($row=mysqli_fetch_array($result))
    {
        echo "
        <tr>
            <td>".$row['eid']."</td>
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



        ";
    }

  }


    /**FOR LALIGA**/
    Public function getAllteamlaliga()
    {
        $sql3="SELECT * FROM laliga_table  ORDER BY lpts DESC LIMIT 0,30"  ;
        $result=mysqli_query($this->db,$sql3);


        while($row=mysqli_fetch_array($result))
        {
            echo "
            <tr>
                <td>".$row['lid']."</td>
                <td><img src='../gallery/logo/laliga/".$row['lphoto']."' style='height:30px;width:30px; alt='logo'></td>

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



            ";
        }

      }

}
