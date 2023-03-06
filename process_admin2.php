<?php
    require_once "config_course.php";
    if(isset($_POST['id_del']))
    {
        $delete = $_POST['id_del'];
        $sql="delete from tag_course where course_ID = '$delete'";
        mysqli_query($conn, $sql);
        $sql="delete from register where course_ID = '$delete'";
        mysqli_query($conn, $sql);
        $sql="delete from course where ID = '$delete';";
        mysqli_query($conn, $sql);
        if (mysqli_query($conn, $sql) > 0) {
            echo "Delete data successfully!!!"."<br/>";
            echo "<a href='Admin2.php'>Về trang chính</a>";
        }
        else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_query($conn, $sql);
    }
?>

<?php
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $short_des = $_POST['short_des'];
        $date = $_POST['date'];
        $duration = $_POST['duration'];
        $image= $_POST['image'];
        $sql="update course set Name='$name', Short_des='$short_des',
                Created_date='$date', Duration='$duration',Image='$image'
                where ID='$id'";
        if (mysqli_query($conn, $sql) > 0) {
            echo "Cập nhật dữ liệu thành công"."<br/>";
            echo "<a href='Admin2.php'>Go to Admin2</a>";
        }
        else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_query($conn, $sql);
    }
?>

<?php 
    if(isset($_POST['name'])) 
    {
        $name = $_POST['name'];
        $short_des = $_POST['information'];
        $created_date = $_POST['start_date'];
        $duration = $_POST['duration'];
        $image = $_POST['image'];
        require_once './config_course.php';
        $sql = "insert into course (Name,Short_des,Created_date,Duration,Image) 
                values('$name','$short_des', '$created_date','$duration','$image')";
        $id = mysqli_query($conn, $sql); 
        $course_ID = mysqli_insert_id($conn);
        $sql ="insert into tag_course(Course_ID) 
                values ('$course_ID')";
        mysqli_query($conn, $sql);
        $sql ="insert into register(Course_ID) 
                values ('$course_ID')";
        mysqli_query($conn, $sql);
        header ("Location: http://localhost/OS/admin2.php" );
    }
?>