<?php

function create_list_room() {
    $listIDrom;


    $result = mysql_query("SELECT ID FROM meetingroom_available WHERE Issue=1 ");
    while ($row = mysql_fetch_array($result)) {

        $listIDrom[] = $row['ID'];
    }
    return $listIDrom;
}

function create_listIDTimestart() {
    $listtime;
    for ($i = 1; $i < 24; $i++) {
        $listIDtime[] = $i;
    }
    return $listIDtime;
}

function create_listdate($num) {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $today = date('Y/m/d');
    $days = 1;
    $Listdate;
    $Listdate[] = $today;
    for ($i = 0; $i < $num; $i++) {



        $Listdate[] = date("Y-m-d ", strtotime("$today +$days day"));
        $today = date("Y-m-d ", strtotime("$today +$days day"));
    }
    return $Listdate;
}

function checker($date, $room, $tstart, $dura) {

    if (strlen($date) < 1) {
        $Listdate = create_listdate(15);
    }
    if (strlen($room) < 1) {
        $listIDrom = create_list_room();
    }
    if (strlen($tstart) < 1) {
        $listtime = create_listIDTimestart();
    }
    $c = count($listIDrom);
    $b = count($listtime);
    $a = count($Listdate);
    if (strlen($date) < 1 && strlen($room) < 1 && strlen($tstart) < 1) {
        for ($i = 0; $i < $a; $i++) {
            for ($j = 0; $j < $b; $j++) {

                for ($k = 0; $k < $c; $k++) {
                    
                }
            }
        }
    }
}

    echo '<li class="top_menu">
            <a href="#">Choose Duration</a>';
    echo "<ul><div id='box1'>";
    $result = mysql_query("SELECT * FROM meetingroom_duration WHERE  Issue = 1 ORDER BY ID");
    while ($row = mysql_fetch_array($result)) {
        echo "<li><a href='http://localhost/PhpProject1/member.php?date=" . filter_input(INPUT_GET, 'date') . "&room=" . filter_input(INPUT_GET, 'room') . "&timestart=" . filter_input(INPUT_GET, 'timestart') . "&duration=" . $row['ID'] . "'> " . $row['NameMD'] . "</a></li>";
    }
    echo "</div></ul> </li> ";
    

    