<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Coursera | Log In Page</title>
     <link rel="icon" href="./components/icons/image.png">
     <link rel="stylesheet" href="./style/log_in.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
     <div id="main_div">
          <div id="block">
               <div id="flex">
                    <div id="text">
                         <h1>Welcome Back</h1>
                    </div>
                    <div>
                         <a href="signup.php"><svg class="cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"></svg></a> 
                    </div>
               </div>
               <div class="form_div">
                    <form action="./process_login.php" method="POST">
                         <div class="broder">
                              <h4> <strong>EMAIL</strong> </h4>
                              <input type="email" id="email" name ="email" class="control" placeholder="name@gmail.com">
                         </div>

                         <div class="broder">
                              <h5> <strong>PASSWORD</strong> </h5>
                              <input type="password" id="password" name="password" class="control" placeholder="Enter Password">
                              <br>
                              <button class="btn">Login</button>
                         </div>
                         
                    </form>
          
                    <p class="para">Having trouble logging in? <a href="">Learner help center</a> </p>
                    <p class="para">This site is protected by reCAPTCHA Enterprise and the Google <a href="">Privacy Policy</a>  and <a href="">Terms of Service</a>  apply.</p>
                    </div>
                  </div>
               </div>
          </div>
     </div>
</body>
</html>











