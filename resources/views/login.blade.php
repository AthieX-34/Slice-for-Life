<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
    body{
    background-color: rgb(68, 0, 255);
    margin: 50px;
    background-image: url(pic/Pizza.PNG);
    background-repeat: no-repeat;/*the pic doesnt repeat over and over*/
    background-position: bottom;
    background-attachment: fixed ;/*Keeps it on spot*/
    background-size: cover;/*allows us to scroll*/
    }
    main{
        background-color:  rgba(107, 96, 96, 0.336); 
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

    #email{
        font-size: 25px; 
        background-color: white; 
        border-radius: 15px; 
        border-color: lightsalmon
    }

    #password{
        font-size: 25px; 
        background-color: white; 
        border-radius: 15px; 
        border-color: lightsalmon;
    }
    #submit{
        font-size: 25px; 
        background-color: white; 
        border-radius: 15px; 
        border-color:  lightsalmon; 
        margin: auto; 
        display: inline-block; 
    }
    #submit:hover{
        background-color: lightsalmon;
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
        <form action="Login.php" method="POST"><!--the action sends the info to the php page which is this coz i didn't want to make a extra file-->
            <label id="t" for="email">Email Address: </label>
            <br>
            <input type="email" id="email" name="email" placeholder="sbsp@gmail.com" required>
            <br>
            <br>
            <label id="t" password">Password: </label>
            <br>
            <input type="password" id="password" name="password" minlength="6" maxlength="16" required>
            <br>
            <br>
            <div style="text-align: center;">
                <input type="submit" id="submit" value="Login">
            </div>
        </form>
<a href="SignUp.php" id="sign">Sign Up</a>
        <br>
        <br>
        <a href="mailto:test@fake.com" title="info@nsfas.org.za" id="sign" >Forgot Password</a>

    </main>

</body>

</html>