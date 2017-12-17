<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Danh Sach phong hop</title>
        <link href="../css/table.css" rel="stylesheet" type="text/css"/>
        <script>
        
        
        </script>
    </head>
    <body>
<?php 
$result = mysql_query("SELECT * FROM dsphongdadat order by " .filter_input(INPUT_GET, 'content')); 
include '../Sub/mem_table_links.php';
  ?>
    </body>
</html>