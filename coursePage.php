<?php
    require_once "config_course.php";
    if(isset($_GET['image']))
    {
        $image=$_GET['image'];
        $sql="select * from course where Image='$image'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) 
        {
            while ($row = mysqli_fetch_assoc($result)) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./components/icons/image.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="./style/coursePage.css" />
    <link rel="stylesheet" href="style/navbarForNayan.css" />
    <link rel="stylesheet" href="style/footer.css" />
    <title>Course</title>
    <style></style>
</head>

<body>
    <!-- navbar -->

    <!-- banner part start  -->


    <table>
        <tr>
            <td align='center' , style='background-color: #E6E6FA; width: 80%'>
                <b style='font-size:70px;'>
                    <?php echo $row['Name']?> </b>
            </td>
            <td align='center'>
                <img src="https://websitehoctructuyen.com/wp-content/uploads/2019/05/ed-tech1553237040995.png"
                    width='900px'>
            </td>
        </tr>
    </table>



    <!-- cousre overview -->

    <div class="overview" id="overview">
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#review">Review</a></li>
            <li><a href="#certificate">Certificate</a></li>
        </ul>
    </div>

    <div class="about" id="about">
        <div class="about-course" id="about-course">
            <h2>
                <center>DESCRIPTION</center>
            </h2>
            <p style="font-size: 20px"><?php echo $row['Detail_des']?></p>
            <img src="./components/course/<?php echo $row['Name']?>" alt="<?php echo $row['Name']?>" srcset="">

        </div>


        <div class="side-about">
            <div class="side-item">
                <div class="icon">
                    <i class="material-icons">language</i>
                </div>
                <div class="icon-info">
                    <h2>100% online courses</h2>
                    <p>Start instantly and learn at your own schedule.</p>
                </div>
            </div>
            <div class="side-item">
                <div class="icon">
                    <i class="material-icons">calendar_month </i>
                </div>
                <div class="icon-info">
                    <h2>Flexible Schedule</h2>
                    <p>Set and maintain flexible deadlines.</p>
                </div>
            </div>
            <div class="side-item">
                <div class="icon">
                    <i class="material-icons">sms </i>
                </div>
                <div class="icon-info">
                    <h2>English</h2>
                    <p>
                        Subtitles: English, Arabic, French, Portuguese (European),
                        Italian, Vietnamese, German, Russian, Turkish, Spanish, Persian,
                        Korean
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- how it works  -->

    <div class="review" id="review">
        <h2>
            <center>REVIEW</center>
        </h2>
    </div>
    <div class="certificate-content">
        <div class="certificate-info">
            <p align='center' , style='font-size: 20px; margin: 250px 30px'>
                <?php echo $row['Review']?>
            </p>
        </div>
        <div class="certificate-imgDiv">
            <img src="./components/icons/Course.jpg" alt="" />
        </div>
    </div>

    <!-- Enrollment options -->
    <div class="certificate" id="certificate">
        <h2 font-size: 29px>
            <center>CERTIFICATE</center>
        </h2>
        <div id="enrollment-opt">
            <div>
                <h2>Start Date</h2>
                <p><b style="font-size: 20px"><?php echo $row['Created_date']?></b></p><br>
                <b style="font-size:25px" ;>Level: </b> <span style="font-size:20px" ;><?php echo $row['For_level']?>
                </span>
                </br>
                </br>
                <b style="font-size:25px" ;>Rate: </b> <span style="font-size:20px"
                    ;><?php echo $row['Average_star_review']?> </span>
                </br>
                </br>

                <button>Start up for free</button>
            </div>
            <div>
                <p>
                    Shareable on
                    <img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/growth/xdp/linkedin-logo.svg?auto=format%2Ccompress&dpr=1&w=128&h=30&q=40"
                        alt="" />
                </p>
                <div class="rc-CertificateBlock" style="
            background-image: url('https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/growth/xdp/certificateSDP.jpg?auto=format%2Ccompress&amp;dpr=1&amp;w=900');
            background-size: contain;
            height: 250px;
            width: auto;
            background-repeat: no-repeat;
            margin: 1rem;
          "></div>
                <p>
                    Shareable on LinkedIn You can share your Certificate in the
                    Certifications section of your LinkedIn profile, on printed resumes,
                    CVs, or other documents.
                </p>
            </div>
        </div>
    </div>
    <!-- footer part -->

    <div class="footer" id="footer_div"></div>
</body>

</html>

<?php
    }
        }
    } 
?>