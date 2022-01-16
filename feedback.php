<?php
// Initialize the session
session_start();

//Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //header("location: login.php");
    //exit;
//}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Feedback</title>
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
            .card {
                height: 100%;
                padding: 20px 40px 20px 40px;
            }
            .card-shadow {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 2px;
            }
            .comment-box {
                width: 100%;
                height: 100px;
                border-width: 2px;
                border-radius: 4px;
                border-color: black;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            .input-box {
                width: 40%;
                height: 35px;
                border-radius: 4px;
                margin-top: 5px;
                margin-bottom: 5px;
            }
            .btn-style {
                width: 10%;
                height: 35px;
                color: white;
                background-color: black;
                border-radius: 4px;
                margin-top: 15px;
            }
        </style>
    </head>
    <body>
        
        <!-- Navbar -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item ms-lg-5">
                        <a href="landing.html" class="navbar-brand">
                            <img src="images/Home.png" width="40px" height="40px" alt="">
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item ms-lg-5 me-lg-5">
                        <a href="/" class="navbar-brand">
                            <img src="images/pomodoro icon.png" width="40px" height="40px" alt="">
                        </a>
                    </li>
                    <li class="nav-item ms-lg-5 me-lg-5">
                        <a href="notion.php" class="navbar-brand">
                            <img src="images/notion icon.png" width="40px" height="40px" alt="">
                        </a>
                    </li>
                    <li class="nav-item ms-lg-5 me-lg-5">
                        <a href="/" class="navbar-brand">
                            <img src="images/music icon.png" width="50px" height="50px" alt="">
                        </a>
                    </li>
                    <li class="nav-item ms-lg-5 me-lg-5">
                        <a href="/" class="navbar-brand">
                            <img src="images/environment icon.png" width="40px" height="40px" alt="">
                        </a>
                    </li>
                    <li class="nav-item ms-lg-5 me-lg-5">
                        <a href="/" class="navbar-brand">
                            <img src="images/techniques icon.png" width="40px" height="40px" alt="">
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ ?>
                    <li class="nav-items me-lg-5">
                        <a href="login.php" class="nav-link"><b>Login</b></a>
                    </li>
                    <?php } ?>

                    <?php if (isset($_SESSION["role"]) && ($_SESSION["role"] == "admin")){ ?> 
                    <li class="nav-item ms-lg-5 me-lg-5">
                        <a href="register.php" class="nav-link"><b>Create Admin</b></a>
                    </li>
                    <li class="nav-items me-lg-5">
                        <a href="logout.php" class="nav-link"><b>Logout</b></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </nav>  
        <!-- Navbar -->

        <div class="row">
            <div class="col-12">
                
                <!-- Register Card -->
                <div class="container mt-3 d-flex justify-content-center">
                    <div class="col-md-11 ">
                        <h1><b>Leave a feedback or comment</b></h1>
                        <p>Help us improve our content!</p>

                        <form class="card card-shadow">
                            <label for="comment"><h4><b>Feedback</b></h4></label>
                            <textarea  class="comment-box" id="comment" name="comment" placeholder="Enter your feedback or comment!"></textarea>

                            <label for="name"><b>Name</b></label>
                            <input  class="input-box" type="text" name="name" placeholder="Enter your name">

                            <label for="email"><b>Email</b></label>
                            <input class="input-box" type="email" name="email" placeholder="Enter your email">

                            <button class="btn-style" type="submit"><b>Submit</b></button>
                        </form>
                        
                    </div>

                </div>
            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Javascript -->
    </body>
</html>