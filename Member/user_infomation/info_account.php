<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        $sqlcmd="SELECT * FROM `meetingroom_user` WHERE username= '".$_SESSION['username']."'";
        $result = mysql_query($sqlcmd);
        $row = mysql_fetch_array($result);
        echo'<table boder="1">';
        echo'<tr>';
        echo "<td>Name</td>
             <td>".$row['fullName']."</td>";     
        echo'</tr>';
        echo'<tr>';
        echo "<td>Username</td>
             <td>".$row['username']."</td>";     
        echo'</tr>';
        echo'<tr>';
        echo "<td>Authority</td>
             <td>";if($row['admin']==1) echo"Admin</td>";     
             echo"Member</td>";     
        echo'</tr>';
        echo'<tr>';
        echo "<td>Phone number</td>
             <td>".$row['sodienthoai']."</td>";     
        echo'</tr>';
        echo'<tr>';
        echo "<td>Email</td>
             <td>".$row['Email']."</td>";     
        echo'</tr>';
  echo    ' </body>'  ?>
   

