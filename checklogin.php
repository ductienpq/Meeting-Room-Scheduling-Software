<?php

session_start();
if (!empty($_SESSION['username'])) {
    if ($_SESSION['admin'] == 1) {
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
        include './database_connect/connect.php';
        $tbl_name = 'meetingroom_user';
        $sql = "SELECT  *  FROM  ".$tbl_name."  WHERE username=" .$myusername ." and password=".$mypassword;
        $count = mysql_num_rows( mysql_query($sql));
        if ($count == 1) {
            $row = mysql_fetch_array( mysql_query($sql));
            $authority = $row['admin'];
// Register $myusername, $mypassword and redirect to file "login_success.php"
          
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
