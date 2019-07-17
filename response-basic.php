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
            $name = $_POST["firstname"] ." ". $_POST["lastname"];
            $phpgender = $_POST["gender"];
            $phpage = $_POST["age"];
            $phpnews = $_POST["news"];
            
            $phpbuzzfeed = $_POST["buzzfeed"];
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
        
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "signup";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error)   {
            die("Connection failed: " . $conn->connect_error);
        }

        $firstname = $_GET["firstname"];
        $lastname = $_GET["lastname"];
        $gender = $_GET["gender"];
        $age = $_GET["age"];
        $newsletter = $_GET["news"];
        $buzzfeed = $_GET["buzzfeed"];
        $sql = "INSERT INTO users (firstname, lastname, gender, age, news, buzzfeed) VALUES ('$firstname', '$lastname', '$gender', '$age', '$newsletter', '$buzzfeed')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created succesfully"
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        ?>
    </div>
</body>
</html>