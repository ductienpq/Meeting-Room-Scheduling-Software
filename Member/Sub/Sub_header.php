        <?php session_start();
        if(empty($_SESSION['username']) or $_SESSION['authority'] != 2 ){
            
        header('Location:index.php', false);}
      echo'    
        <div id="header">
                <h1>Conference registration website</h1>
                
                <nav id="nav-1">
                    <a class="link-1" href="http://localhost/PhpProject1/Member/user_infomation/show_info.php">Account</a>
                    <a class="link-1" href="http://localhost/PhpProject1/Member/calendar/calendar.php?content=ID">Calendar</a>
                    <a class="link-1" href="http://localhost/PhpProject1/Member/Room/list_rom.php">Room</a>                    
                    <a class="link-1" href="http://localhost/PhpProject1/member.php">Home</a>
                </nav>


            </div>';
        
