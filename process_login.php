<?php if(isset($_POST)) 
{
     SESSION_START();
     $email = $_POST['email'];
     $pw = $_POST['password'];
    
     require_once './config_course.php';
     $sql = "select * from login_information, user_information 
               where login_information.User_information_ID= user_information.ID 
               and user_information.Email='$email' 
               and login_information.Password='$pw'  LIMIT 1";
     $_SESSION["email"] = $email;
     $_SESSION["password"] = $pw;
     
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     
	if (mysqli_num_rows($result) > 0) {
	    $_SESSION["name"] = $row['Username'];
        header("Location: http://localhost/OS/index.php");
     }
     else {
?>
<script type="text/JavaScript">
    alert("You don't have an account!!!") ;
     </script>
<?php
     echo "<a href='signup.php'>Back to sign up page!!!</a>";
     mysqli_close($conn);
     }  
}
?>