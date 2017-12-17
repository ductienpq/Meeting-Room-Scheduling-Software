<?php
ob_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Thêm phòng</title>
  
     <link rel="stylesheet" href="css/style.css">
     <style>
       
         
     </style>
	 </head>


<body>
  <div class="container">  
  <form id="contact"  action="" method="post">
   
    <fieldset>
      <input name="room_name" placeholder="Room's name" type="text" tabindex="1" required>
    </fieldset>
	
    <fieldset>
      <input name="numofseat" placeholder="Number of  seats" type="text" tabindex="2" required>
    </fieldset>
	
    <fieldset>
      <input name="numofscreens" placeholder="Number of  screens " type="text" tabindex="3" required>
    </fieldset>
	
    <fieldset>
      <input name="numoftv" placeholder="Number of  TV" type="text" tabindex="2" required>
    </fieldset>
	
    <fieldset>
      <input name="numofboard" placeholder="Number of Boards" type="text" tabindex="3" required>
    </fieldset>
      <fieldset>
      <input name="aircnditioner" placeholder="Number of air conditioner" type="text" tabindex="3" required>
    </fieldset>
      <fieldset>
      <input name="soundsys" placeholder="Kind of sound system" type="text" tabindex="3" required>
    </fieldset>
      <button name="submit_name" type="submit" id="contact-submit">ADD</button>
    </fieldset>
  </form>
</div>
</body>	 

<?php
include '../../database_connect/connect.php';
if (isset($_POST["submit_name"])){
		//nhap du lieu
		if(filter_input(INPUT_POST,'room_name') && filter_input(INPUT_POST,'numofseat') && filter_input(INPUT_POST,'numofscreens')&& filter_input(INPUT_POST,'numoftv')&& filter_input(INPUT_POST,'numofboard') && filter_input(INPUT_POST,'aircnditioner')&& filter_input(INPUT_POST,'soundsys')){
		
	
                
		//kiem tra thong tin
		$sql="SELECT ID FROM list_room WHERE  nameRoom = '".filter_input(INPUT_POST,'room_name')."' ";
		
                $result = mysql_query($sql); 
		
		if(mysql_num_rows($result) >1) echo "<script>alert('The name of room was created ^_^')</script>";
		else {
                $sqlcmd="INSERT INTO `list_room`( `nameRoom`, `numOfSeats`, `numOfScreen`, `numOfTV`, `numOfBoard`, `airConditioner`, `soundSystem`) VALUES ('".filter_input(INPUT_POST,'room_name') ."',".filter_input(INPUT_POST,'numofseat').",".filter_input(INPUT_POST,'numofscreens').",".filter_input(INPUT_POST,'numoftv').",".filter_input(INPUT_POST,'numofboard').",".filter_input(INPUT_POST,'aircnditioner').",'".filter_input(INPUT_POST,'soundsys')."')";	

                   mysql_query($sqlcmd); 
                    $result = mysql_query($sql); 
		
		if(mysql_num_rows($result) ==1) echo "<script>alert('Add a room Complete ^_^')</script>";
                }
	}
}

?>
</html>


