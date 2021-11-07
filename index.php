<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="uppercontainer">
   <div class="container">                                              <!--upper container that contain entire thing... -->
        <div class="alpha">                                             <!--ALPHA contains php function that generate a div per each character from A to H...-->
            <?php
                
                 for($i=8; $i>0; $i--)
                 {
                     print("<div class=\"count\">".$i."</div>");
                 }
            ?>
        </div>

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <div class="chess">                                             <!-- actual playable chess tiles are generated into this div ... -->
        <?php

            $lees=array('a','b','c','d','e','f','g','h');
            for($i=8; $i>0; $i--)
            {
                for($x=0; $x<8; $x++)
                {
                
                    if(($x+$i)%2==0)
                    {
                        print("<div class=\"black\">".$i.$lees[0+$x]."</div>");
                    }
                    else
                    {
                        print("<div class=\"gray\">".$i.$lees[0+$x]."</div>");
                    }
                }
            }
        ?>
        </div>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <div style="width:auto; height:100px;"></div>                   <!-- a div that live without any reason in life, people use it just to fill the blanks :)...-->
<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

        <div class="num">                                               <!-- number on the bottom of the chess showed here...-->
            <?php
            $x = array('a','b','c','d','e','f','g','h');
                for($i=0; $i<8; $i++)
                {
                    print("<div class=\"refr\">".$x[$i]."</div>");
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>
