<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo '<li class="top_menu" ">
            <a href="#">Choose time start</a>';
     echo "<ul><div id='box1'>";
     
     $result = mysql_query("SELECT * FROM meetingroom_time_start order by ID");
while($row = mysql_fetch_array($result)) 
  { 
    echo "<li><a href='http://localhost/PhpProject1/member.php?date=".filter_input(INPUT_GET,'date')."&room=".filter_input(INPUT_GET,'room')."&timestart=".$row['ID']."&duaration=".filter_input(INPUT_GET,'duration')."'> " . $row['TimeStart'] ."</a></li>";  
  }
  
 echo "</div></ul> </li> ";