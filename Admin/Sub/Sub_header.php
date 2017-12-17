        <?php
        session_start();
        if(empty($_SESSION['username']) or $_SESSION['authority'] != 1 ){
            
        header('Location:index.php', false);}
      echo'    
        <div id="header">
                <h1>ADMIN CONTROLPANEL</h1>
                
                <nav id="nav-1">
                    <a class="link-1" href="http://localhost/PhpProject1/Admin/calendar_show/calendar.php?content=ID">Calendar</a>
                    <a class="link-1" href="http://localhost/PhpProject1/Admin/list_room.php">Room</a>
                    <a class="link-1" href="http://localhost/PhpProject1/Admin/List_user/show-list_user.php">Member</a>
                    <a class="link-1" href="http://localhost/PhpProject1/admin.php">Home</a>
                </nav>


            </div>';
        
