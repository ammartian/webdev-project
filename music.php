<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Music</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FONT AWESOME MIN CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- LOCAL CSS -->
        <link href="style.css" rel="stylesheet">

        <style>
        .minibar {
            overflow: auto;
            margin-top: 20px;
        }
        
        /* Navbar links */
        .minibar a {
            float: left;
            text-align: center;
            padding: 12px;
            color: black;
            text-decoration: none;
            font-size: 17px;
        }
        
        /* Navbar links on mouse-over */
        .minibar a:hover {
            opacity: 0.9;
        }

        .music-box {
            margin-top: 20px;
            height: 100%;

        }
        .discover {
            margin-top: 40px;
            width: 55%;
        }
        .btn-float {
            float: right;
        }
        .margin-top-header {
            margin-top: 40px;
        }

        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include "navbar.php"; ?>
        <!-- Navbar -->  

        <div class="d-flex justify-content-center">
            <div class="minibar">
                <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a>
                <a href="#discover"><i class="fa fa-fw fa-search"></i> Discover Weekly</a>
                <a href="#why-music"><i class="fa fa-music"></i> Why Music?</a>
                <a href="#exam"><i class="fa fa-book"></i> Exam Vibing'</a>
            </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <div>
                <h1>Comfort Your Study Time with Some Music</h1>
                <div class="music-box">
                    <iframe 
                        src="https://open.spotify.com/embed/playlist/471N195f5jAVs086lzYglw?utm_source=generator" width="100%" height="300px" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture">
                    </iframe>
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <div class="discover">
                <h1 id="discover" >Discover Weekly</h1>
                <ul class="list-group">
                    <li class="list-group-item">
                        <i class="fa fa-music"></i> 
                            ID by Kygo 
                        <button type="button" class=" btn-float btn btn-dark btn-sm">
                            <a href="https://www.youtube.com/watch?v=BZBL2UamV_w" style="color: white; text-decoration: none;">Listen</a>
                        </button>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-music"></i> 
                        Oceans Away (Sam Feldt Remix) by ARIZONA 
                        <button type="button" class="btn-float btn btn-dark btn-sm">
                            <a href="https://www.youtube.com/watch?v=Bh7kKBcUlE4" style="color: white; text-decoration: none;">Listen</a>
                        </button>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-music"></i> 
                        Drive by Emmit Fenn 
                        <button type="button" class="btn-float btn btn-dark btn-sm">
                            <a href="https://www.youtube.com/watch?v=qWVhqn7VKXQ" style="color: white; text-decoration: none;">Listen</a>
                        </button>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-music"></i> 
                        Money by Jerry Folk 
                        <button type="button" class="btn-float btn btn-dark btn-sm">
                            <a href="https://www.youtube.com/watch?v=c1NVVJr9UhY" style="color: white; text-decoration: none;">Listen</a>
                        </button>
                    </li>
                    <li class="list-group-item">
                        <i class="fa fa-music"></i> 
                        Sincere by Moods 
                        <button type="button" class="btn-float btn btn-dark btn-sm">
                            <a href="https://www.youtube.com/watch?v=xi9iH7MtgaM" style="color: white; text-decoration: none;">Listen</a>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <div class="why margin-top-header">
                <h1 id="why-music" >
                    Why Music?
                </h1>
                <!-- ARTICLE #1 -->
                <div class="card mb-3" style="max-width: 900px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/example.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">The Benefits of Studying with Music</h5>
                                <p class="card-text">
                                    To better your study habits, you can employ good studying strategies to stay on track and use learning style to study better.
                                </p>
                                <button type="button" class="btn btn-dark"><a style="text-decoration: none; color: white;"href="article2.html">Read More</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div class="discover">
                <h1 id="exam" >Exam Vibin'</h1>
                <iframe width="850" height="620"
                    src="https://www.youtube.com/embed/5qap5aO4i9A">
                </iframe>
            </div>
        </div>

        <!-- footer -->
        <?php include "footer.php"; ?>
    </body>