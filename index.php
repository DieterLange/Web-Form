<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="get" action="response-basic.php">
        <div style="font-family: Arial, Helvetica, sans-serif; padding-top: 20px;">
            <div>
                <h1>Create Your Account</h1>
                <h3>Please enter your details below</h3>
            </div>
                <div>
                    <p>First Name</p>
                    <input type=text placeholder="Enter first name" name="firstname">
                </div>
                    <div>
                        <p>Last Name</p>
                        <input type=text placeholder="Enter last name" name="lastname">
                    </div>
                        <div>
                            <p>Gender</p>
                            <input type="radio" name="gender" value="male"><span>Male</span>
                            <input type="radio" name="gender" value="female"><span>Female</span>
                            <input type="radio" name="gender" value="other"><span>Other</span>
                        </div>
                        <div>
                            <p>Buzzfeed</p>
                            <input type="checkbox" name="buzzfeed"><span>I am subscribed to buzzfeed</span>
                        </div>
                    <div>
                        <p>Age</p>
                        <select name="age">
                        <?php
                        for($a = 1; $a <= 100; $a += 1){
                        echo("<option value='{$a}'>{$a}</option>");
                        }
                        ?>
                        </select>
                    </div>
                <div>
                    <p>News Feed</p>
                    <input type="checkbox" name="news"><span>I want to recive news letters</span>
                </div>
            <div style="padding-top: 10px;">
                <input type="submit" value="JOIN">
            </div>
        </div>
    </form>
</body>
</html>