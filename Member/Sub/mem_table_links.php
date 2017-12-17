<?php

echo "<table border='1'>
 <tr> 
 <th class='menu'>ID</th>
 <th class='menu'>Meeting Date</th> 
 <th class='menu'>Meeting Time</th>
 <th class='menu'>Meeting Duration</th>
 <th class='menu'>Room's Name</th>
  <th class='menu'>Create By Member</th>
  <th class='menu'>Created Date Time</th>
  </tr>"; 
while($row = mysql_fetch_array($result))
   {    echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['MeetingDate'] . "</td>";
             echo "<td>" . $row['TimeStart'] . "</td>";  
             echo "<td>" . $row['NameMD'] . "</td>";
            echo "<td>" . $row['Namema'] . "</td>";
             echo "<td>" . $row['fullName'] . "</td>"; 
             echo "<td>" . $row['DateCreated'] . "</td>"; 
             echo "</tr>";
} echo "</table>"; 
 
mysql_close($con);
