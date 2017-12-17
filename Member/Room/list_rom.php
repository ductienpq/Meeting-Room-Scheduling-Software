
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Conference registration
        </title>
        <link href="../../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/layout1.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="container">
            <?php include '../Sub/Sub_header.php';?>
            <div id="wrapper" class="clearfix">

                <div id="content">
                
              <?php
              include '../../database_connect/connect.php';
              include './danhSachPhongHop.php';?>
                </div>
                <div id="extra">
                  <?php include '../Sub/Extra.php'; ?>
                    </nav>
                </div>
            </div>
            <div id="footer">
               <?php include '../Sub/Footer.php'; ?>
            </div>
        </div>
    </body>

</html>
