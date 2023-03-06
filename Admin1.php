<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Log In Page</title>
</head>
<body>
    <style>
        div {
            display: grid;
            gap: 20px;
            margin: 0px auto;
            max-width: 396px;
        }
    </style>

    <header><center></br><h1>ADMINISTRATOR</h1></center></header>

    <div class="login-box">
        <div class="Logo">
            <a href="Admin1.php"><img src="./components/icons/indexx.jpg" width="150px"></a>
        </div>

        <div class="Form">
    <form class="loginform" action="process_admin1.php" method="post">
        <div class="a">
            <label for "Username" style="width:180px; height:0px;;"><b>Email</b></label>
            <div class="Username"><input type="text" name="email" id="username" placeholder="name@gmail.com" style=" width:300px; height:30px;"></br></div>
        </div>
        
        <div class="b">
            <label for "password" style="width:180px; height:0px;;"><b>Password</b></label>
            <div class="password"><input type="password" name="password" id="password" placeholder="Enter Password" style=" width:300px; height:30px;"></br></div>
        </div>

        <div class="c">
            <input type="submit" name="login" value="Login" style="width:200px; height:50px; background-color: blue; border: none; font-size: 20px;font-weight: bold; color:azure;">
        </div>
    </form>
        
    </div>

</body>
</html>