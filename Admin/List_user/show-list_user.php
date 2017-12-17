<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>, 
        <title>
            ADMIN CONTROLPANEL
        </title>
        <link href="../../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/layout1.css" rel="stylesheet" type="text/css"/>
        <link href="../../css/table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="container">            
            <?php include '../Sub/Sub_header.php';
            ;?>
            <div id="wrapper" class="clearfix">

                <div id="content">
                    <?php include './List_user.php';?>
                </div>
                <div id="extra">
                  <?php include '../Sub/Extra.php'; ?>
             
                </div>
            </div>
            <div id="footer">
               <?php include '../Sub/Footer.php'; ?>
            </div>
        </div>
    </body>

</html>
