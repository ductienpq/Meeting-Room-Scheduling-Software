<?php
$query ="SELECT
list_room.ID,
list_room.nameRoom,
list_room.numOfSeats,
list_room.numOfScreen,
list_room.numOfTV,
list_room.numOfBoard,
list_room.airConditioner,
list_room.soundSystem
FROM
list_room
INNER JOIN meetingroom_available ON meetingroom_available.ID = list_room.ID
WHERE
meetingroom_available.Issue = 1 "; 

          
             $result = mysql_query($query);
             if (!$result) { // add this check.
             die('Invalid query: ' . mysql_error());}
            
    echo '    <table border="1"> 
            <tr> 
                <th rowspan="2" class="bground">ID</th> 
                <th rowspan="2"class="bground">Room\'s name</th>
                <th colspan="5"class="bground">Numbers</th>
                <th rowspan="2"class="bground">Sound system</th> 
            </tr>
            <tr>
                <th>Seats</th>
                <th>Screen</th>
                <th>Television</th>
                <th> Board </th>
                <th>Air Conditioner</th>
               
            </tr>';
           
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
