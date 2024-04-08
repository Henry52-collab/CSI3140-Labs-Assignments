<!--Group 1-->
<!--Group Member:   Shun Hei, Yiu   300247812
                    Rui Heng, Tan   300102229-->
<!--Exercise 19.9-->
<!DOCTYPE html>
<html>
    <head>
        <title>URL Submission</title>
    </head>
    <body>
        <?php
             
        ?>
        <h2>Submit a new URL</h2>
        <form method="post">
            <label>URL</label>
            <input type="text" name="url">
            <label>Description</label>
            <input type="text" name="description">
            <p><input type="submit" name="submit" value="submit"></p>
        </form>
        <?php
             $host = "localhost";
             $dbname = "URLs";
             $user = "iw3htp";
             $password = "password";
             //Create connection
             $conn = new mysqli($host, $user, $password, $dbname);
             if ($conn->connect_error) die("<p>Could not connect to database</p>");
             if(isset($_POST["url"]) && isset($_POST["description"])){
                 $url = $_POST["url"];
                 $description = $_POST["description"];
                 $query = "INSERT INTO urltable "."(URL,description) "."VALUES ('$url','$description')";
                 if(!($result = mysqli_query($conn,$query))){
                     die("<p>Could not execute query!</p>"); 
                 } 
                 $select = mysqli_query($conn,"SELECT * FROM urltable");
                 print("<table border='1'>");
                 for($num = 0;$row=mysqli_fetch_row($select);$num++){
                    //build table to display results
                    print("<tr>");
                    foreach($row as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
                print("</table>");
             }
             
            mysqli_close($conn);
        ?>
    </body>
</html>