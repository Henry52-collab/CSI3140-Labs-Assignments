<!--Group 1-->
<!--Group Member:   Shun Hei, Yiu   300247812
                    Rui Heng, Tan   300102229-->
<!--Exercise 19.4-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
            <title>Exercsie 19.4</title>
            <style type = "text/css">
                p{margin:0;}
            </style>
    </head>
    <body>
        <?php
           $search = "Aab1BbB55 Axyzb55 A123BbBbBbbb67 asdfsadfds 141344 A12gBbBbbb89 1231niafds Ad1hBbBbbbBBBB78";
           while(preg_match("/\b(A([[:alpha:][:digit:]]{3})([B|b])+(\d{2}))\b/",$search,$match)){
            print($match[1]." ");
            $search = preg_replace( "/".$match[1]."/","",$search);
           }
        ?>
    </body>
</html>