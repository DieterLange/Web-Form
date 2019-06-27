<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: navy;">
    <form method="post" action="response-basic.php">
        <div style="font-family: Arial, Helvetica, sans-serif; margin-left: 25%; margin-top: 5%; padding-bottom: 2%; display: flex; justify-content: center; flex-direction: column; text-align: center; 
                    border: clear; border-radius: 20px; background-color: white; width: 50%;">
            <div>
                <h1>Create Your Account</h1>
                <h3>Please enter your details below</h3>
            </div>
                <div>
                    <h4>First Name</h4>
                    <input type=text placeholder="Enter first name" name="firstname" style="height: 40px; font-size: 15px;">
                </div>
                    <div>
                        <h4>Last Name</h4>
                        <input type="text" placeholder="Enter last name" name="lastname" style="height: 40px; font-size: 15px;">
                    </div>
                        <div>
                            <h4>Gender</h4>
                            <input type="radio" name="gender" value="male"><span>Male</span>
                            <input type="radio" name="gender" value="female"><span>Female</span>
                            <input type="radio" name="gender" value="other"><span>Other</span>
                        </div>
                        <div>
                            <h4>Buzzfeed</h4>
                            <input type="checkbox" name="buzzfeed" value="yes"><span>I am subscribed to buzzfeed</span>
                        </div>
                    <div>
                        <h4>Age</h4>
                        <select name="age" style="width: 20%; border-radius: 10px; font-size: 20px;">
                        <?php
                        for($a = 1; $a <= 100; $a += 1){
                        echo("<option value='{$a}'>{$a}</option>");
                        }
                        ?>
                        </select>
                    </div>
                <div>
                    <h4>News letters</h4>
                    <input type="checkbox" name="news" value="yes"><span>I want to recive news letters</span>
                </div>
            <div style="padding-top: 10px;">
            <input type="submit" value="JOIN" style="width: 115px; height: 35px; border-radius: 10px; background-color: navy; color: white; border-color: white;"></input>
            </div>
        </div>
    </form>
</body>
</html>