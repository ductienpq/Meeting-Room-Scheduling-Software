<?php

echo "<table border='1'>
 <tr> 
 <th class='menu'><a href='http://localhost/PhpProject1/Admin/calendar_show/calendar.php?content=ID'>ID</a></th>
 <th class='menu'><a href='http://localhost/PhpProject1/Admin/calendar_show/calendar.php?content=MeetingDate'>Meeting Date</a></th> 
 <th class='menu'><a href='http://localhost/PhpProject1/Admin/calendar_show/calendar.php?content=TimeStart'>Meeting Time</a></th>
 <th class='menu'><a href='http://localhost/PhpProject1/Admin/calendar_show/calendar.php?content=NameMD'>Meeting Duration</a></th>
 <th class='menu'><a href='http://localhost/PhpProject1/Admin/calendar_show/calendar.php?content=Namema'>Room's Name</a></th>
  <th class='menu'><a href='http://localhost/PhpProject1/Admin/calendar_show/calendar.php?content=fullName'>Create By Member</a></th>
  <th class='menu'><a href='http://localhost/PhpProject1/Admin/calendar_show/calendar.php?content=DateCreated'>Created Date Time</a></th>
  </tr>"; 
while($row = mysql_fetch_assoc($result))
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
