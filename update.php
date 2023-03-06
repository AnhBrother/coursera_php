<?php
    if(isset($_POST['id']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $short_des = $_POST['short_des'];
        $date = $_POST['date'];
        $duration = $_POST['duration'];
        $image= $_POST['image'];
        require_once "./config_course.php";
        $sql="update course set Name='$name', Short_des='$short_des',
                Created_date='$date', Duration='$duration',Image='$image'
                where ID='$id'";
        if (mysqli_query($conn, $sql) > 0) {
            echo "Update data successfully!!!"."<br/>";
            echo "<a href='Admin2.php'>Go to Admin2</a>";
        }
        else {
            echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_query($conn, $sql);
    }
    else
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid al">
<center><p style="font-size:25px"><b>EDIT THE COURSE:</b></p></center>
<form action="./update.php" method="post">
    <table class="table table-bordered" id="myTable">
        <thead>
            <tr class="ex">
                <th width = "5%">ID</th>
                <th width = "20%">Name</th>
                <th width = "30%">General Information</th>
                <th width = "10%">Start Date</th>
                <th width = "10%">Duration</th>
                <th width = "25%">Image</th>
            </tr>
<?php 
if(isset($_GET['id'])) 
    {
        $id =$_GET['id'];
        $sql = "select * from course where ID = '$id'";
        require_once "./config_course.php";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) {
?>
            <tr>
                <td style = "text-align:center"><input type="" name="id" value="<?php echo $_GET['id']; ?>"></td>
                <td><input type="text" name="name" value="<?php echo $row['Name'];?>"></td>
                <td><input type="text" name="short_des"value="<?php echo $row['Short_des'];?>"></td>
                <td><input type="text" name="date" value="<?php echo $row['Created_date'];?>"></td>
                <td><input type="text" name="duration" value="<?php echo $row['Duration'];?>"></td>
                <td><input type="file" name="image" value="<?php echo $row['Image'];?>"></td>         
            </tr>
        </thead>
        </table>

        <div style="text-align:right">
            <button class="nv btn save" name="save" type="submit" title="Lưu"><i class="fas fa-floppy-o"></i></button> 
            <a href="Admin2.php" class='nv btn' style='background-color:#1461C5;'><i class="fa fa-sign-out"> Thoát</i></a>
        </div>

<?php
            }
        }
    }
?>
</form>
</div>
</body>
</html>

<?php
    }
?>