<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: navy;"> 
    <div style="font-family: Arial, Helvetica, sans-serif; margin-left: 38%; margin-top: 15%; padding-bottom: 1%; padding-top: 1%; display: flex; justify-content: center; flex-direction: column; text-align: center; 
                    border: clear; border-radius: 20px; background-color: white; width: 25%;">
        <?php
            $name = $_GET["firstname"] ." ". $_GET["lastname"];
            $phpgender = $_GET["gender"];
            $phpage = $_GET["age"];
            $phpnews = $_GET["news"];
            
            $phpbuzzfeed = $_GET["buzzfeed"];
            if ($phpbuzzfeed == "yes") { 
            exit('ERROR');
            }
 
            if ($phpgender == "male") {
            echo "<div style='color: blue';> Welcome! $name <br> <br> </div>";
            }
            
            elseif ($phpgender == "female") {
            echo "<div style='color: pink';> Welcome! $name <br> <br> </div>";   
            }
            
            elseif ($phpgender == "other") {
            echo "<div style='color: red';> Welcome! $name <br> <br> </div>";   
            }
            
            echo "Age: $phpage <br> <br>";

            if ($phpnews == "yes") { 
            echo "You will recive news letters";
            }
            
        ?>
    </div>
</body>
</html>