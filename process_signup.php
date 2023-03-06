<?php if(isset($_POST)) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];// thêm điều kiện khác email
    $pw = $_POST['password'];// thêm điều kiện khác password
    require_once './config_course.php';
    $sql = "insert into user_information(Full_name,Email) 
            values('$name','$email')";
    $id = mysqli_query($conn, $sql);
    $ID_user = mysqli_insert_id($conn);
    $today = date("Y-m-d h-i-s");
    $sql ="insert into login_information(Username,Password,User_information_ID,Created_time) 
            values ('$name','$pw',$ID_user,'$today')";
    if (mysqli_multi_query($conn, $sql) > 0) {
        header("http://localhost/OS/login.php");
    }
    else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>