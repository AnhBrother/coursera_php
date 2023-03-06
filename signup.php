
     <!DOCTYPE html>
     <html lang="en">
     <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Coursera | Sign Up Page</title>
     <link rel="icon" href="./components/icons/image.png">
     <link rel="stylesheet" href="./style/signUp.css">
     </head>
     <body>
     <div id="main_div">
          <div id="block">
               <div id="flex">
                    <div id="text">
                         <h1>Sign Up</h1>
                         <div id="p_tag">
                              <p>Learn on your own time from top</p>
                              <p>universities and businesses.</p>
                         </div>
                    </div>
                    <div>
                         <a href="./index.php"><svg class="cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg></a> 
                    </div>
               </div>
               
               <div class="form_div">
                    <form action="./process_signup.php" method="POST">
                         <div class="broder">
                              <h4> <strong>FULL NAME</strong></h4>
                              <input type="text" id="name" name="name" class="control" placeholder="Enter your full name">

                         </div>

                         <div class="broder">

                              <h4> <strong>EMAIL</strong> </h4>
                              <input type="email" id="email" name="email" class="control" placeholder="name@gmail.com">

                         </div>

                         <div class="broder">
                              <h5> <strong>PASSWORD</strong> </h5>
                              <input type="password" id="password" name="password" class="control" placeholder="Create Password">
                              <p>Between 8 and 72 characters</p>
                              <br>
                              <button class="join_btn">Join for Free</button>   
                         </div>
                    </form>

                         <div class="text_para">
                         <p class="para">I accept Coursera's <a href="">Terms of Use</a>  and <a href="">Privacy Notice</a> . Having trouble logging in? <a href="">Learner help center</a> </p>
                         <p class="para">This site is protected by reCAPTCHA Enterprise and the Google <a href="">Privacy Policy</a>  and <a href="">Terms of Service</a>  apply.</p>
                         </div>
               </div>
          </div>
     </div>
     </body>
     </html>
