<!--Group 1-->
<!--Group Member:   Shun Hei, Yiu   300247812
                    Rui Heng, Tan   300102229-->
<!--Exercise 19.7-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <title>Exercsie 19.7</title>
            <style type = "text/css">
                p{margin:0;}
            </style>
    </head>
    <body>
        <?php
            $states = "Mississippi Alabama Texas Massachusetts Kansas";
            $statesArray = new SplFixedArray(5);
            if(preg_match("/\b\w*?xas\b/i", $states, $temp)){
                $statesArray[0] = $temp[0];
            }
            
            if(preg_match("/\bk\w*?s\b/i", $states, $temp)){
                $statesArray[1] = $temp[0];
            }
           
            if(preg_match("/\bM\w*?s\b/i", $states, $temp)){
                $statesArray[2] = $temp[0];
            }
            
            if(preg_match("/\b\w*?a\b/i", $states, $temp)){
                $statesArray[3] = $temp[0];
            }
            
            if(preg_match("/\bm\w*?\b/i", $states, $temp)){
                $statesArray[4] = $temp[0];
            }
            print_r($statesArray);
        ?>
    </body>
</html>