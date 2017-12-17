<?php
ob_start();
//session_start();
if($_SESSION["username"]){
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Thay đổi thông tin</title>
  
     <link rel="stylesheet" type="text/css" href="css/style.css">
	 
</head>

<body>
  <div class="container">  
  <form id="contact" action="" method="post">
    <h3><center>Thay đổi thông tin</h3></center>
    <fieldset>
      <input name="password" placeholder="Thay đổi mật khẩu" type="text" tabindex="1">
    </fieldset>
    <fieldset>
      <input name="mail" placeholder="Thay đổi Email" type="email" tabindex="2">
    </fieldset>
      <button name="submit" type="submit" id="contact-submit">Thay đổi</button>
    </fieldset>
  </form>
</div>
</body>	 


<?php

if (isset($_POST["submit"])){
	$username=$_SESSION["username"];
		
	if($_POST["mail"]){
		$mail = $_POST["mail"];	
		$select_db= mysqli_connect("localhost", "root", "","quanlyphonghop");
		$set_lang = mysqli_query($select_db,"SET NAMES 'utf8'");
		//update value
		$sql="UPDATE user SET mail = '$mail' WHERE username = '$username';";
		$query=mysqli_query($select_db,$sql);
		
		//query data
		$sql="select mail from user WHERE username = '$username';";
		$query=mysqli_query($select_db,$sql);
		
		//index
		$query=mysqli_fetch_array($query,MYSQLI_ASSOC);
		$mail_query=$query["mail"];	
		//mail_query@gmail.com
		
		if ($mail_query==$mail) echo '<script type="text/javascript">alert("Đã thay đổi Email!!!");</script>';
		else{echo '<script type="text/javascript">alert("Có lỗi!!!");</script>';}

	}
	
	if($_POST["password"]){
		$password = $_POST["password"];	
		$select_db= mysqli_connect("localhost", "root", "","quanlyphonghop");
		
		//update value
		$sql="UPDATE user SET password = '$password' WHERE username = '$username';";
		$query=mysqli_query($select_db,$sql);
		
		//query data
		$sql="select password from user WHERE username = '$username';";
		$query=mysqli_query($select_db,$sql);
		
		//index
		$query=mysqli_fetch_array($query,MYSQLI_ASSOC);
		$password_query=$query["password"];	
		//mail_query@gmail.com
		
		if ($password_query==$password)echo '<script type="text/javascript">alert("Đã thay đổi Mật khẩu!!!");</script>';
		else {echo '<script type="text/javascript">alert("Có lỗi!!!");</script>';}
		
		}
}
	
?>
</html>

<?php
}
else{
	header("location:/../phong/index.php");
}
?>