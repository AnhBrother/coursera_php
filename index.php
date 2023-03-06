<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course for free | Online Courses &amp; Certificates From Top Institutions</title>
    <link rel="icon" href="./components/icons/image.png">
    <link rel="stylesheet" href="css_index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<link rel="stylesheet" href="./style/index.css">
<link rel="stylesheet" href="./style/indexNavbar.css">
<link rel="stylesheet" href="./style/footer.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./style/slidestyle.css">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" style="">
            <a href="./"><img class="coursera" src="./components/icons/download.svg" alt="" height="30px"
                    weight="50px"></a>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" style=" width: 50px" type="submit">Search</button>
            </form>
            <ul class="nav navbar-nav" style="margin-left: 40%">

                <?php
    if (!isset($_SESSION["name"])) {
?>
                <li><a href="./signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

                <?php
    }
    else {
        $name = $_SESSION["name"];
?>
                <li><a href="./logout_index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                <li>
                    <div id="user_div_data">
                        <img src="./components/icons/profilepage.png" alt="">
                        <p align='center'><?php echo $name;?></p>
                    </div>
                </li>
                <?php 
    } 
?>
            </ul>
        </div>
    </nav>

    <div id="main">
        <div id="first">
            <div id="left">
                <h1>LEARN OVER THE WORLD</h1>
                <p style=" font-size:30px;width:600px; margin:20px 0px">
                    Start, switch, or advance your career with more than 5,000 courses, Professional Certificates, and
                    degrees from world-class universities and companies.
                </p>
                <?php
    if(!$_SESSION) {
?>
                <div>
                    <a href="./signup.php"><button id="join" id="join_for_free">Join for free</button></a>
                </div>
                <?php 
    }
?>
            </div>
            <div id="right">
                <img src="./components/icons/indexx.jpg" alt="" weight="300px" height="300px">
            </div>
        </div>

        <div id="second">
            <h1>We collaborate with 200+ leading universities and companies</h1>
            <div>
                <a href="https://www.arizona.edu/" target="_blank"><img src="./components/university/Arizona.png"
                        alt="Arizoan" height="50px" weight="50px"></a>
                <a href="https://www.emory.edu/home/index.html" target="_blank"><img
                        src="./components/university/Emory.png" alt="Emory" height="50px" weight="50px"></a>
                <a href="https://en.huji.ac.il/en" target="_blank"><img src="./components/university/Hebrew.png"
                        alt="Hebrew" height="50px" weight="50px"></a>
                <a href="https://www.london.ac.uk" target="_blank"><img src="./components/university/London.png"
                        alt="London" height="50px" weight="50px"></a>
                <a href="https://www.mcmaster.ca" target="_blank"><img src="./components/university/McMaster.png"
                        alt="McMaster" height="50px" weight="50px"></a>
                <a href="https://www.nus.edu.sg" target="_blank"><img src="./components/university/Singapore.jpg"
                        alt="Singapore" height="50px" weight="80px"></a>
                <a href="https://www.sydney.edu.au" target="_blank"><img src="./components/university/sydney.png"
                        alt="Sydney" height="50px" weight="50px"></a>
                <a href="https://research.ibm.com/university/" target="_blank"><img src="./components/icons/ibm.png"
                        alt="IBM"></a>
            </div>
        </div>

        <div id="innermainfromthird">
            <div style="margin-top: 50px;padding-left: 180px;" class="third" id="four">
                <table>
                    <tr>
                        <td>
                            <h1 style="font-size: 40pt; font-weight: bold;">FIND YOUR COURSE</h1>
                        </td>
                        <td align='center'>
                            <h4 style="font-size: 30pt; margin-left: 250px"><a href="" target="_blank"> More
                                </a></h4>
                        </td>
                    </tr>
                </table>
                <h4 style="font-size: 30pt">100% free course from top universities in the world</h4>

            </div>
            </br>

            <?php 
if(isset($_POST)) 
{
    $sql = "select * from course";
    require_once "config_course.php";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) 
    {
?>
            <section class="product">
                <button class="pre-btn"><img src="./components/icons/arrow.png" alt=""></button>
                <button class="nxt-btn"><img src="./components/icons/arrow.png" alt=""></button>
                <div class="product-container" id="secondslide">
                    <?php 
        while ($row = mysqli_fetch_assoc($result)) {
?>
                    <div class="product-card">
                        <a href="./coursePage.php?image=<?php echo $row["Image"];?>"><img
                                src='./components/course/<?php echo $row["Image"];?>' height="250px" width="300px"></a>
                        <h3 style="text-align:center; font-size: 20px; max-width:300px;"><?php echo $row["Name"];?></h3>
                    </div>
                    <?php
        }
    }
}
?>
                </div>
            </section>



</body>
<footer>
    <div class="container">
        <!--Bắt Đầu Nội Dung Giới Thiệu-->
        <div class="noi-dungv">
            <h2>ABOUT COUSERA</h2>
            <p>Student results on Coursera 87% of people who learn for professional development </br>
                say it has career benefits,</br>
                such as getting a promotion, a pay raise, or starting a new career
                Coursera Impact Report (2020) </p>
            <ul class="social-icon">

            </ul>
        </div>
        <!--Kết Thúc Nội Dung Giới Thiệu-->
        <!--Bắt Đầu Nội Dung Đường Dẫn-->
        <div class="noi-dung links">
            <h2> Links </h2>
            <ul>
                <li><a href="index.php">Cousera</a></li>
                <li><a href="about.html">About</li>
                <li><a href="contact.html">Contact Information</a></li>
            </ul>
        </div>
        <!--Kết Thúc Nội Dung Đường Dẫn-->
        <!--Bắt Đâu Nội Dung Liên Hệ-->
        <div class="noi-dung contact">
            <h2>Contact Information</h2>
            <ul class="info">
                <li>
                    <span><i class="dc"></i></span>
                    <span> Distric 1, Thành Phố Hồ Chí Minh<br />
                        Việt Nam</span>
                </li>
                <li>
                    <span><i class="phone"></i></span>
                    <p><a href="#">+84 123 456 789</a>
                        <br />
                        <a href="#">+84 987 654 321</a>
                    </p>
                </li>



            </ul>
        </div>
        <!--Kết Thúc Nội Dung Liên Hệ-->
    </div>
</footer>


</html>

<script>
document.getElementById("1dots").style.opacity = 1
const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;
    let count = 1;
    nxtBtn[i].addEventListener('click', () => {

        console.log(count)
        if (count == 1) {
            document.getElementById("1dots").style.opacity = .3
            document.getElementById("2dots").style.opacity = 1
        }

        if (count == 2) {
            document.getElementById("2dots").style.opacity = .3
            document.getElementById("3dots").style.opacity = 1
        }

        count++
        item.scrollLeft += containerWidth;

    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
        count--
        if (count == 1) {
            document.getElementById("2dots").style.opacity = .3
            document.getElementById("1dots").style.opacity = 1
        }

        if (count == 2) {
            document.getElementById("3dots").style.opacity = .3
            document.getElementById("2dots").style.opacity = 1
        }

        console.log(count)
    })
})
</script>