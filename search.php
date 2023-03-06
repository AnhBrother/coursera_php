<?php session_start(); ?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    </head>
    <body>

    <style>
        {box-sizing: border-box;}
            .topnav {
                overflow: hidden;  background-color: #FFFFFF;
            }
            .topnav a {
                float: left; display: block; color: BLACK; text-align: center; padding: 30px; text-decoration: none; font-size: 21px;
            }
           
            .topnav .search-container {
                float: left; padding-top: 20px; border: 1px;
            }
            .topnav input[type=text] { 
                padding: 5px; margin-top: 10px; font-size: 14px; border: 1px solid black; 
            }
            .topnav .search-container button {
                float: left; padding: 8px ; margin-top: 10px; margin-right: 0px; background: #2196F3; font-size: 15px; border: 1px solid black; cursor: pointer;
            }
            .topnav .search-container button:hover {
                background: #ccc;
            }
            
            th, td {
                border: 1px ;
                padding: 5px;
            }
            table {
                border-spacing: 50px;
            }
      
            

        @media screen and (max-width: 600px) {
            .topnav .search-container {
            float: none;
        }
            .topnav a, .topnav input[type=text], .topnav .btn, .topnav .search-container button  {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
            }
            .topnav input[type=text] {
            border: 0px solid #ccc;  
            }
        }

        
</style>
                    <div class="topnav" >  
                    <div class="container-fluid" style='padding:0px'>
                    <a class="navbar-brand" href="index.php" style='margin-left:15px;'>
                    <img class="coursera" src="./components/icons/download.svg" alt="" height="30px"
                    weight="50px">
                    </a>
                    </div>
                    <div class="search-container">
                        <form action="search.php" method="get">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                                              
                </div>
                
    <center>
    <div style='padding-top:20px'>
    
    
    <?php /* sửa code lại nha, này bài cũ nhóm t
    require_once "config1.php";
    if(isset($_GET["search"]) && !empty($_GET["search"]))
    {
        $key = $_GET["search"];           
    $sql = "SELECT count(*) as sl FROM product 
                WHERE name LIKE '%$key%' OR material LIKE '%$key%' OR price LIKE '%$key%' OR category LIKE '%$key%' OR collection LIKE '%$key%'";
    }
    $result = mysqli_query($conn, $sql);
    $pageNum = 0;
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pageNum = ceil($row["sl"]/20);
    }
    for($i = 1; $i<=$pageNum;$i++)
    {
?>
   
<?php
    }
    $page = 1;
    if(isset($_GET["page"]))
    {
        $page = $_GET["page"];
    }
?>
<?php
    $sql = "SELECT * FROM product
                WHERE name LIKE '%$key%' OR material LIKE '%$key%' OR price LIKE '%$key%' OR category LIKE '%$key%' OR collection LIKE '%$key%' 
                limit ".(($page-1)*20).",20";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table> 
    <?php
        $dem = 0;
        while($row = mysqli_fetch_assoc($result)) {
            if($dem==0)
                echo "<tr>";
        ?>
                <td align='left', style = 'margin:50px;', width='250px'>   khúc này fix tạm ròi nè                
                    <img src="<?php echo $row["image"];?>" width='250px'/><br/>
                    <b><?php echo $row["Name"];?></b><br/>
                    <?php echo $row["Short_des"]."$";?><br/>
                    <?php echo "⭐".$row["Average_star_review"];?><br/>
                    <?php echo $row["For_level"]." • ".$row["Duration"];?>
                    
                </td>
            <?php
            $dem++;
            if($dem==5)
            {
                echo "</tr>";
                $dem=0;
            }
        }
        ?>
        </table>
        <?php
        }
        else {
            echo "0 results";
        }
        mysqli_close($conn);
   
   
    ?>
    
        for($i=1; $i<=$pagenum; $i++)
        {
        ?>
        <a href="courses.php?search=<?php echo $key;?>&page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
        }  
            ?>

                
    </div>
   
    </center>*/ 
    </body>
</html>
                   