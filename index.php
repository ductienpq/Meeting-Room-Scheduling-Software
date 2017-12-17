<?php
session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Confence register</title> 
  <link rel="stylesheet" href="css/style.css">
   
  
</head>

<body>
  <?php
if (!empty($_SESSION['username'])) {
    if ($_SESSION['authority'] == 1) {
        header('Location:admin.php', false);
    } else {
        header('Location:member.php', false);
    }
} else {
    if (!empty(filter_input(INPUT_POST, 'username')) and ! empty(filter_input(INPUT_POST, 'password'))) {
        $myusername = filter_input(INPUT_POST, 'username');
        $mypassword = filter_input(INPUT_POST, 'password');
        $myusername = stripslashes($myusername);
        $mypassword = stripslashes($mypassword);
        $myusername = mysql_real_escape_string($myusername);
        $mypassword = mysql_real_escape_string($mypassword);
        $hashpass = md5("#$%".$mypassword);
        include './database_connect/connect.php';
        $tbl_name = 'meetingroom_user';
        
        $sql= "SELECT admin FROM ". $tbl_name ." Where password='". $hashpass  .  " 'and username='". $myusername."'" ;
        $result= mysql_query($sql);
       
        $count = mysql_num_rows($result);
        if ($count == 1) {
            $row = mysql_fetch_array( $result);
            $authority = $row['admin'];
// Register $myusername, $mypassword and redirect to file "login_success.php
            $_SESSION['username'] = $myusername;
            $_SESSION['authority'] = $authority;
            if($authority==1)
            header("location:admin.php");
        else {
             header("location:member.php");
        }
        } else {
            echo "Wrong Username or Password";
        }
    }
}
?>

  <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" method="POST" action="">
    <p><input name="username"type="text" placeholder="Username"></p>
    <p><input name="password"type="password" placeholder="Password"></p>
    <p><input name="btn_submit"type="submit" value="Log in"></p>
  </form>
</div>
    <script src='jquery/min.js'></script>

  
</body>
</html>
