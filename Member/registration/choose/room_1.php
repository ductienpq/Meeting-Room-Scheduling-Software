<?php

echo'
    <head>
        <title>TODO supply a title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
       #main_menu{
    background-color: #0c528e;
    font-family:sans-serif;
    list-style-type:none;
    text-align:center;
    float:left;
    width:100%;
  
}
.top_menu {
    float:left;
    position:relative;
    margin:1px;
    
}
#main_menu a,
#main_menu a:hover {
    background-color: #0C5257;
    font-size:150%;
    color:#ffffff;
    display:block;
    padding:10px;
    text-decoration:none;
    width:150px;


}      
#main_menu ul {
    list-style:none;
    position:absolute;
    display:none;
    
}
#main_menu li:hover ul {
    display:block;
}
#main_menu ul li {
    padding-top:1px;
    margin-left:0%;
     
}
/*sub menu list anchors*/
#main_menu ul a,#main_menu ul a:hover {
    color:#ffff00;
    box-shadow: 3px 3px 2px #888888;
    width:135px;
    height:40px;
}

.top_menu.fix {
    left: 0;
    max-width: 100%;
    overflow: visible;
    position: fixed !important;
    top: 0;
    width: 100%;
    z-index: 1000;
}
  #box1{
width:100%;
max-height:200px;
overflow:scroll;

}
#register{
margin:6px;

}
        </style>
    </head>
    <body>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var $filter = $("#main_menu");
            var $filterSpacer = $("<div />", {
                "class": "vnkings-spacer",
                "height": $filter.outerHeight()
            });
            if ($filter.size())
            {
                $(window).scroll(function ()
                {
                    if (!$filter.hasClass("fix") && $(window).scrollTop() > $filter.offset().top)
                    {
                        $filter.before($filterSpacer);
                        $filter.addClass("fix");
                    }
                    else if ($filter.hasClass("fix")  && $(window).scrollTop() < $filterSpacer.offset().top)
                    {
                        $filter.removeClass("fix");
                        $filterSpacer.remove();
                    }
                });
            }
 
        });
    </script>
         <ul id="main_menu"> <li class="top_menu"> ';

