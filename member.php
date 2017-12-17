
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Conference registration
        </title>
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout1.css" rel="stylesheet" type="text/css"/>
        <link href="css/table.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/smoothness.css">
        <script src="jquery/min.js"></script>
        <script src="jquery/j_UI_min.js"></script>
    </head>
    <body>
        <div id="container">
            <?php include './Member/Sub/Sub_header.php';?>
            <div id="wrapper" class="clearfix">

                <div id="content">
                   <?php include './Member/registration/choose/room_1.php';
                   include './Member/registration/choose/date.php';
                   include './database_connect/connect.php';
                   include './Member/registration/choose/room_2.php';
                   include './Member/registration/choose/time.php';
                   include './Member/registration/choose/duration.php';                   
                   include './Member/registration/choose/room_end.php';
                   include './Member/registration/table_help/table_help_on_choose.php';?>
                   
                </div>
                <div id="extra">
                  <?php include './Member/Sub/Extra.php'; ?>
                  
                </div>
            </div>
            <div id="footer">
               <?php include './Member/Sub/Footer.php'; ?>
            </div>
        </div>
    </body>

</html>
