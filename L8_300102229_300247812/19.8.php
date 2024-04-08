<!--Group 1-->
<!--Group Member:   Shun Hei, Yiu   300247812
                    Rui Heng, Tan   300102229-->
<!--Exercise 19.8-->

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
            function isValidEmail($email) {
                // Define the regular expression pattern for validating email addresses
                $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
            
                // Perform the regular expression match
                if (preg_match($pattern, $email)) {
                    return true; // Valid email address
                } else {
                    return false; // Invalid email address
                }
            }
            
            $email1 = "john.doe@example.com";
            $email2 = "invalid.email@";
            $email3 = "another@example";
            $email4 = "test@example.";

            echo "Email '$email1' is " . (isValidEmail($email1) ? "valid" : "invalid") . "<br>";
            echo "Email '$email2' is " . (isValidEmail($email2) ? "valid" : "invalid") . "<br>";
            echo "Email '$email3' is " . (isValidEmail($email3) ? "valid" : "invalid") . "<br>";
            echo "Email '$email4' is " . (isValidEmail($email4) ? "valid" : "invalid") . "<br>";

        ?>
    </body>
</html>