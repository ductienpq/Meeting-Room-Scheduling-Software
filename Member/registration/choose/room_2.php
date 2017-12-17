<?php
function getarr()
{
    $str = "?date=".trim(filter_input(INPUT_GET,'date'))."&room=".filter_input(INPUT_GET,'room')."&timestart=".filter_input(INPUT_GET,'timestart')."&duration=".filter_input(INPUT_GET,'duration');
    return $str;
}
echo'
            </li>
            <li class="top_menu">
            <a href="#">Choose a room</a>';
            
   
     echo "<ul>";
      $result = mysql_query("SELECT ID ,Namema FROM meetingroom_available WHERE meetingroom_available.Issue = 1 order by Namema"); 
   echo  ' <div id="box1"';
while($row = mysql_fetch_array($result)) 
  { 
    echo "<li><a href='http://localhost/PhpProject1/member.php?date=".filter_input(INPUT_GET,'date')."&room=".$row['ID']."&timestart=".filter_input(INPUT_GET,'timestart')."&duration=".filter_input(INPUT_GET,'duration')."'> " . $row['Namema'] ."</a></li>";  
  }
  
 echo "</div></ul> </li> ";
echo "<input id='register' type='button' name='dangky' value='Register' onClick=\"parent.location='Member/checkData/dangky.php".getarr()."'\">";
echo "<input id='register' type='button' name='Reset' value='Reset' onClick=\"parent.location=Member/checkData/dangky.php\" >";
               
                    
                 


