<?php

include '../../database_connect/connect.php';

function test_dangky($date, $room, $tstart, $dura) {

    $result = mysql_query("SELECT ID ,MeetingDate ,MeetingTimeID, MeetingDurationID ,RoomID FROM meetingroom_history_detail where MeetingDate='" . $date . "' and RoomID ='" . $room . "'");
    while ($database = mysql_fetch_array($result)) {
        if ((int) $tstart < (int) $database['MeetingTimeID'] && (int) $database['MeetingTimeID'] < (int) $tstart + (int) $dura) {
            return false;
        }
        if ((int) $tstart >= (int) $database['MeetingTimeID'] && (int) $tstart < (int) $database['MeetingTimeID'] + (int) $database['MeetingDurationID']) {
            return FALSE;
        }
    } return true;
}


function writetodb($date, $room, $userID, $timestart, $duration, $createddate) {
    $sqlcmd = "INSERT INTO `meetingroom_history_detail`( `MeetingDate`, `MeetingTimeID`, `MeetingDurationID`, `RoomID`, `UserID`, `DateCreated` , Statuss) VALUES ('" . $date . "', " . $timestart . ", " . $duration . ", " . $room . ", " . $userID . ", '" . $createddate . "',1)";
    mysql_query($sqlcmd);
}

function check($date, $room, $userID, $timestart, $duration, $createddate) {
    $sqlcmd = "SELECT ID FROM meetingroom_history_detail  WHERE  MeetingDate= '" . $date . "' and  MeetingTimeID=" . $timestart . " and MeetingDurationID=" . $duration . " and RoomID=" . $room . " and UserID=" . $userID . " and DateCreated='" . $createddate . "'";
  
    $result = mysql_query($sqlcmd);
    $row = mysql_fetch_array($result);
    if (!empty($row['ID'])) {
        return true;
    }
    return false;
}

function getuser() {
    $sqlcmd = "SELECT `ID` FROM `meetingroom_user` WHERE username ='" . $_SESSION['username'] . " '";
    $result = mysql_query($sqlcmd);
    $row = mysql_fetch_array($result);
    return $row['ID'];
}

//-----------------------------------------------------------
$date = trim(filter_input(INPUT_GET, 'date'));
$userID = getuser();
$room = filter_input(INPUT_GET, 'room');
$timestart = filter_input(INPUT_GET, 'timestart');
$duration = filter_input(INPUT_GET, 'duration');



if (strlen($date) < 1 || strlen($room) < 1 || strlen($timestart) < 1 || strlen($duration) < 1) {
    $error[] = "You must enter all of infomation!!!";
} else {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $datacreated=  date('Y/m/d H:i:s');
    $today = date('Y/m/d');
    $daypair = split("/", $date);
    $daychuan = $daypair[2] . "-" . $daypair[0] . "-" . $daypair[1];

    if (strtotime($today) > strtotime($daychuan)) {
        $error[] = "You must choose time  of future. ";
    }

    if (test_dangky($daychuan, $room, $timestart, $duration) == true) {
        writetodb($daychuan, $room, $userID, $timestart, $duration, $datacreated);
        if (check($daychuan, $room, $userID, $timestart, $duration, $datacreated) == true) {
            unset($error);
            $error[] = "You have successfully registered";
            
        }
    } else{
        $error[] = "The room was registered!!!";
  
        
    }    
}
echo"<div id='box1'style='height=40px' >";
$dem = count($error);
for ($i = 0; $i < $dem; $i++)
    echo "<p> $error[$i]</p>";
echo"</div ></div>";
