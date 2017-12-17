

<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Conference registration
        </title>
        <link href="../../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/layout1.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/table.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/smoothness.css">
        <script src="../../jquery/min.js"></script>
        <script src="../../jquery/j_UI_min.js"></script>
    </head>
    <body>
        <div id="container">
            <?php include '../Sub/Sub_header.php';?>
            <div id="wrapper" class="clearfix">

                <div id="content">
                   <?php include '../registration/choose/room_1.php';
                   include '../registration/choose/date.php';
                   include '../../database_connect/connect.php';
                   include '../registration/choose/room_2.php';
                   include '../registration/choose/time.php';
                   include '../registration/choose/duration.php';                   
                   include '../registration/choose/room_end.php';
                   include '../registration/table_help/table_help_on_choose.php';?>
                   
                </div>
                <div id="extra">
                  <?php include '../../database_connect/connect.php';
                  include '../Sub/Extra.php';
                        include './chk_date.php';
                  ?>
                  
                </div>
            </div>
            <div id="footer">
               <?php include '../Sub/Footer.php'; ?>
            </div>
        </div>
    </body>

</html>
