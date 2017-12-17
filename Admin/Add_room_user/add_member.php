<?php
ob_start();
?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">


       
    </head>


    <body>
        <div class="container">  
            <form id="contact" action="" method="post">

                <fieldset>
                    <input name="fullname" placeholder="Full name" type="text" tabindex="1" required>
                </fieldset>

                <fieldset>
                    <input name="username" placeholder="Username" type="text" tabindex="2" required>
                </fieldset>

                <fieldset>
                    <input name="password" placeholder="Password" type="text" tabindex="3" required>
                </fieldset>

                <fieldset>
                    <input name="authority" placeholder="Admin=1 :: member=2" type="text" tabindex="2" required>
                </fieldset>

                <fieldset>
                    <input name="phonenum" placeholder="Phone numbers" type="text" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input name="email" placeholder="Email" type="text" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <input name="avata" placeholder="Avatar" type="file" tabindex="3" required>
                </fieldset>
                <button name="submit_name" type="submit" id="contact-submit">ADD</button>
                </fieldset>
            </form>
        </div>
    </body>	 

    <?php
   include '../../database_connect/connect.php';
    if (isset($_POST["submit_name"])) {
        //nhap du lieu
        if (filter_input(INPUT_POST, 'fullname') && filter_input(INPUT_POST, 'username') && filter_input(INPUT_POST, 'password') && filter_input(INPUT_POST, 'authority') && filter_input(INPUT_POST, 'phonenum') && filter_input(INPUT_POST, 'email') && filter_input(INPUT_POST, 'avata')) {



            //kiem tra thong tin
            $sql = "SELECT ID FROM `meetingroom_user` where username = '" . filter_input(INPUT_POST, 'username') . "' ";
            echo $sql;
            $result = mysql_query($sql);

            if (mysql_num_rows($result) > 1)
                echo "<script>alert('The username of room was created! please enter again!!! ^_^')</script>";
            else {
                $sqlcmd = "INSERT INTO `meetingroom_user`( `fullName`, `username`, `password`, `admin`, `sodienthoai`, `Email`) VALUES ('" . filter_input(INPUT_POST, 'fullname') . "','" . filter_input(INPUT_POST, 'username') . "','" . md5("#$%" . filter_input(INPUT_POST, 'password')) . "'," . filter_input(INPUT_POST, 'authority') . ",'" . filter_input(INPUT_POST, 'phonenum') . "','" . filter_input(INPUT_POST, 'email') . "')";
                echo $sqlcmd;
                mysql_query($sqlcmd);
                $result = mysql_query($sql);

                if (mysql_num_rows($result) == 1)
                    echo "<script>alert('Add a member Complete ^_^')</script>";
            }
        }else "errr";
    }
     mysql_close($con);
    ?>
</html>


