<?php
// Initialize the session
session_start();

include ('qrcode.php');

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pomodoro Timer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap -->

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <!-- Google Font -->

    <link rel="stylesheet" href="style.css">
    <style>
        h1 {
            font-size: 74px;
        }
        .header-btm {
            display: flex;
            align-items:flex-end;
            margin-top: 50px;
        }
        a, a:hover, a:active, a:visited { 
            color: white; 
            text-decoration: none;
        }
        
        .usenow-btn {
                background-color: #E16259;
                color: white;
                border: none;
                border-radius: 12px;
                width: 150px;
                height: 40px;
        }
        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        } 
        .content-to-right {
            display: flex;
            justify-content: right;
        }
        .content-to-left {
            display: flex;
            justify-content: left;
        }
        .content-margin-top {
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include "navbar.php"; ?>
    <!-- Navbar -->

    <!----Content-->
        <div class="row">
            <!---Pomodoro-->
            <div class="container">
                <div id="go-pomodoro"class ="col-12">
                    <div class="d-flex justify-content-center" > 
                    <iframe class= "rounded-pill" width="90%" height="800px" src="https://pomofocus.io/app" title="Pomodoro Timer" frameborder="0"></iframe> 
                    <div>
                </div>
            </div>

            
            <!---Pomodoro-->
        </div>

        <!-- Pomodoro info -->
        <div class="row">
            <div class="col-12">

                <div class="container-fluid d-flex mt-5">
                    <div class="col-md-6 d-flex justify-content-lg-center mt-5  mb-5">
                        <img src="images/pomodoro_1.png" width="440" height="440" alt="">
                    </div>

                    <div class="col-md-6">
                        <h1><b>Pomodoro Timer!</b></h1>
                        <br>

                        <h4><b>What is Pomodoro?</b></h4>
                        <p>The Pomodoro Technique is created by Francesco Cirillo for a more productive way to work and study. The technique uses a timer to break down work into intervals, traditionally 25 minutes in length, separated by short breaks. Each interval is known as a pomodoro, from the Italian word for 'tomato', after the tomato-shaped kitchen timer that Cirillo used as a university student. - Wikipedia</p>
                        <br>

                        <h4><b>How to use the Pomodoro Timer?</b></h4>
                        <ul>
                            <li>Add tasks to work on today</li>
                            <li>Set estimate pomodoros (1 = 25min of work) for each tasks</li>
                            <li>Select a task to work on</li>
                            <li>Start timer and focus on the task for 25 minutes</li>
                            <li>Take a break for 5 minutes when the alarm ring</li>
                            <li>Iterate 3-5 until you finish the tasks</li>
                        </ul>
                        <br>
                        <a href="#go-pomodoro"><button class="usenow-btn" style="font-size: 18px;" type="button"><b>USE NOW</b></button></a>

                        <?php qrcode(400,"qrcode");
                        echo "<img src='images/qr/qrcode.png' class='img-fluid rounded mx-auto d-block' > ";
                        ?>
                        
                        <div class="d-flex justify-content-center">
                            <div class="col-xs-12">
                                <a class="appstore-link iOSDownload hidden wow animated fadeIn mobile-store iOS animated" href="https://apps.apple.com/app/apple-store/id866450515?pt=690486&amp;ct=official_website&amp;mt=8" style="visibility: visible; animation-name: fadeIn;">
                                    <img width=200px src="images/appstore.png" alt="AppStore">
                                </a>
                                <a class="appstore-link androidDownload hidden wow animated fadeIn mobile-store android animated" href="https://play.google.com/store/apps/details?id=cc.forestapp&amp;referrer=utm_source%3Dofficalwebsite%26utm_medium%3Dbutton" style="visibility: visible; animation-name: fadeIn;">
                                    <img width=200px class="googleplay-badge" src="images/googleplay.png" alt="Google Play">
                                </a>
                            </div>
                        </div>
                        


                    </div>
                </div>
                
            </div>
        </div>
    <!--footer-->
    <?php include "footer.php"; ?>

</body>
</html>