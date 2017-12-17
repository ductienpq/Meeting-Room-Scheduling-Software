<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>, 
        <title>
            ADMIN CONTROLPANEL
        </title>
        <link href="../../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/layout1.css" rel="stylesheet" type="text/css"/> 
        <link href="../../css/table.css" rel="stylesheet" type="text/css"/> 
         
    </head>
    <body>
        <div id="container">            
            <?php include '../Sub/Sub_header.php';
          
        echo '    <div id="wrapper" class="clearfix">

                <div id="content">';
                    include '../../database_connect/connect.php';

             $query= "SELECT
                       *
                        FROM
                        list_room
                         ";
           
             $result = mysql_query($query);
             if (!$result) { // add this check.
             die('Invalid query: ' . mysql_error());}
             ?>
        <table border='1'> 
            <tr> 
                <th rowspan="2" class="bground">ID</th> 
                <th rowspan="2"class="bground">Room's name</th>
                <th colspan="5"class="bground">Numbers</th>
                <th rowspan="2"class="bground">Sound system</th> 
            </tr>
            <tr>
                <th>Seats</th>
                <th>Screen</th>
                <th>Television</th>
                <th> Board </th>
                <th>Air Conditioner</th>
               
            </tr>
            <?php
            while($row = mysql_fetch_array($result))   {
                echo "<tr>";   
                echo "<td>" . $row['ID'] . "</td>";   
                echo "<td>" . $row['nameRoom'] . "</td>";  
                echo "<td>" . $row['numOfSeats'] . "</td>";   
                echo "<td>" . $row['numOfScreen'] . "</td>";  
                echo "<td>" . $row['numOfTV'] . "</td>";   
                echo "<td>" . $row['numOfBoard'] . "</td>";  
                echo "<td>" . $row['airConditioner'] . "</td>";   
                echo "<td>" . $row['soundSystem'] . "</td>";  
                echo "</tr>";   } 
                echo "</table>"; 
 
            mysql_close($con);
        ?>
                </div>
                <div id="extra">
                  <?php include '../Sub/Extra.php'; ?>
              <?php include './add_room.php';?>
                </div>
            </div>
            <div id="footer">
               <?php include '../Sub/Footer.php'; ?>
            </div>
        </div>
    </body>

</html>
