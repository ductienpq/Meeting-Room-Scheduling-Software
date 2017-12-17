
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            ADMIN CONTROLPANEL
        </title>
        <link href="css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="css/layout1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="container">
            <?php include '../PhpProject1/Admin/Sub/Sub_header.php';?>
            <div id="wrapper" class="clearfix">

                <div id="content">
                    Content
                </div>
                <div id="extra">
                  <?php include './Admin/Sub/Extra.php'; ?>
                    
                </div>
            </div>
            <div id="footer">
               <?php include './Admin/Sub/Footer.php'; ?>
            </div>
        </div>
    </body>

</html>
