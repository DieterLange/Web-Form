<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $name = $_GET["firstname"] ." ". $_GET["lastname"];
            $phpgender = $_GET["gender"];
            
            $phpnews = $_GET["news"];
            if ($phpnews == "yes") { 
            echo "You will recive news letters";
            }

            $phpbuzzfeed = $_GET["buzzfeed"];
            if ($phpbuzzfeed == "yes") { 
            exit('NO U GAE');
            }

            elseif ($phpgender == "male") {
            echo "<div style='color: blue';> Welcome! $name <br> <br> </div>";
            }
            
            elseif ($phpgender == "female") {
            echo "<div style='color: pink';> Welcome! $name <br> <br> </div>";   
            }
            
            elseif ($phpgender == "other") {
            echo "<div style='color: red';> Welcome! $name <br> <br> </div>";   
            }
            
            $phpage = $_GET["age"];
            echo "Age: $phpage";

            
        ?>
    </div>
</body>
</html>