<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Admin Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="./Admin2.php"><i class="fa fa-user-circle" aria-hidden="true"></i>COURSE MANAGEMENT</a>
            
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="./logout_admin.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                </ul>
        </div>
    </nav>

<!--KHÓA HỌC-->
<center>
    <div class="container-fluid al">
        <Br>
        <p class="timkiemkhoahoc" style="font-size:25px"><b>SEARCH THE COURSES:</b></p>
        <form action="./Admin2.php" method="POST">
            <input type="text" id="myInput"  name = "search" placeholder="Enter the name of course...">
            <i class="fa fa-search" aria-hidden="true"></i>
        </form>
</br>
        <p style="font-size:25px"><b>MAIN FUNCTION:</b></p>
        <form action="./add.php" method="post">
            <button class="nv btn add-new" name="add" type="submit" data-toggle="tooltip" data-placement="top"
                    title="Insert"><i class="fas fa-user-plus"></i></button>
       </form>

        <div class="table-title">
            <div class="row"></div>
        </div>

<?php 
    if(isset($_POST)) 
    {
        $sql = "select * from course";
        if (isset($_POST['search'])) {
            $key = $_POST['search'];
            $sql .= " where Name like '%$key%'";
        }
        require_once "config_course.php";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) 
        {
?>
        <table class="table table-bordered" id="myTable">
        <thead>
            <tr class="ex">
                <th width = "5%">ID</th>
                <th width="20%">Name</th>
                <th width="25%">General Information</th>
                <th width = "10%">Start Date</th>
                <th width = "10%">Duration</th>
                <th width = "20%">Image</th>
                <th width = "5%">Edit</th>
                <th width = "5%">Delete</th>
            </tr>
        </thead>
<?php
        $stt = 1;
        while ($row = mysqli_fetch_assoc($result)){
?>
            <tr>
                <td style = "text-align:center"><?php  echo $stt++ ?></td>
                <td width="auto"><?php echo $row['Name']?></td>
                <td width="auto"><?php echo $row['Short_des']?></td>
                <td style = "text-align:center"><?php echo $row['Created_date']?></td>
                <td style = "text-align:center"><?php echo $row['Duration']?></td>
                <td style = "text-align:center"><img src = './components/course/<?php echo $row["Image"];?>' width = "250px"/></td>
                
                <td>
                <a href="./update.php?id=<?php echo $row['ID']?>">
                    <span class = 'fas fa-edit' style = "font-size:20px; color:#1461C5; padding-left:12px;"></span>
                </a>
                </td>

                <td style = "text-align:center">
                    <form action="./process_admin2.php" method="post">
                        <button name="id_del" type="submit" value="<?php echo $row['ID']?>" title="Delete">
                            <i class="fas fa-trash" style="width: 30px; color:#1461C5;"></i>
                        </button>   
                    </form>
                </td>
                
            </tr>
          
<?php
        }
?>
        </table>
<?php
        }
    }
?>
    </div>
</center>
</body>
</html>