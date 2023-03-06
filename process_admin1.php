<?php 
if(isset($_POST)) 
{
    SESSION_START();
    $email = $_POST['email'];
    $pw = $_POST['password'];
    
    require_once './config_course.php';
    $sql = "select Role_ID from login_role inner join login_information
            on  login_role.Login_information_ID = login_information.User_information_ID inner join user_information on user_information.ID = login_information.User_information_ID
            where login_information.Password = '$pw' and user_information.Email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        $role = $row["Role_ID"];
        if ($role == 3) {
            header("Location: http://localhost/OS/admin2.php");
        }
    }
    else {
?>
<script type="text/JavaScript">
    alert("You don't have permission to log in this page!") ;
    </script>

<?php
    echo "<a href='Admin1.php'>Back to log in page!!!</a>";
    mysqli_close($conn);   
    }
}
?>