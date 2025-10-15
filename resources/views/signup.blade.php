<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="SignUp.css">
    <style>body{
    background-color: lightsalmon;
    margin: 50px;
    background-image: url(pic/Pizza11.PNG);
    background-repeat: no-repeat;/*the pic doesnt repeat over and over*/
    background-position: bottom;
    background-attachment: fixed ;/*Keeps it on spot*/
    background-size: cover;/*allows us to scroll*/
        }
        main{
            background-color: rgba(107, 96, 96, 0.336); 
            border-radius: 15px; 
            width: 330px; 
            border: 3px solid lightsalmon;
            padding: 50px;
            margin: auto;
        }
        #t{
            color: white;
            
        }
        #img{
            height: 150px;
            width: 150px;
            border: 3px solid lightsalmon;
        }
        #box1{
            font-size: 30px;
            background-color: white; 
            border-radius: 15px; 
            border: 3px solid lightsalmon;
            padding: 10px;
            margin: auto;
            text-align: center;
            width:175px;
        }
        #name{
            font-size: 25px; 
            background-color: white; 
            border-radius: 15px; 
            border-color: lightsalmon;
        }
        #email{
            font-size: 25px; 
            background-color: white; 
            border-radius: 15px; 
            border-color: lightsalmon;

        }
        #address{
            font-size: 25px; 
            background-color: white; 
            border-radius: 15px; 
            border-color:lightsalmon;
        }
        #phone{
            font-size: 25px; 
            background-color: white; 
            border-radius: 15px; 
            border-color:lightsalmon;
        }
        #password{
            font-size: 25px; 
            background-color: white; 
            border-radius: 15px; 
            border-color:lightsalmon;
        }
        #confirmPassword{
            font-size: 25px; 
            background-color: white; 
            border-radius: 15px; 
            border-color: lightsalmon;
        }
        #submit{
            font-size: 25px; 
            background-color: white; 
            border-radius: 15px; 
            border-color:lightsalmon; 
            margin: auto; 
            display: inline-block; 
        }
        #submit:hover{
            background-color:lightsalmon;
            display: inline-block;
        }
        #id{
            color: aliceblue;
        }
</style>
</head>

<body>

    <main>

        <div style="text-align: center;">
            <img src="pic/Logo2.1.jpg" alt="img" id="img">
        </div>

        <br>
        <div id="box1">Sign Up</div>
        <br>
        <!--// (htmlspecialchars) is a filter becoz ($_SERVER["PHP_SELF"]) id vulnerable cross-site scripts-->
        <form action="" method="POST">

            <br>
            <label id="t" for="name">Name And Surname: </label>
            <br>
            <input type="text" id="name" name="name" placeholder="SpongeBob SquarePants" required>
            <br>

            <br>
            <label id="t" for="email">Email Address: </label>
            <br>
            <input type="email" id="email" name="email" placeholder="sbsp@gmail.com" required>
            <br>

            <br>
            <label id="t" for="phone">Phone Number: </label>
            <br>
            <input type="tel" id="phone" name="phone" placeholder="1234567890"  minlength="10" maxlength="10" required>
            <br>
            
            <br>
            <label id="t" for="address">Address: </label>
            <br>
            <input type="text"" id="address" name="address" placeholder="124 Conch Street, Bikini Bottom" required>
            <br>

            <br>
            <label id="t" for="password">Password: </label>
            <br>
            <input type="password" id="password" name="password" minlength="6" maxlength="16" required>
            <br>

            <br>
            <div style="text-align: center;">
                <input type="reset" id="submit">
            </div>

            <br>
            <div style="text-align: center;">
                <input type="submit" id="submit" name="submit">
            </div>

            </div>
            <a href="Login.php" id="sign">Log In</a>
        </form>

        <br>

    </main>

</body>

</html>

