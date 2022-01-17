<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Notion</title>
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
            h3 {
                font-size: 54px;
            }
            p {
                font-size: 18px;
            }
            .text-justify {
                text-align: justify;
                text-justify: inter-word;
            }
            .video-shadow {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
            .dwnld-btn {
                background-color: #E16259;
                color: white;
                border: none;
                border-radius: 12px;
                width: 270px;
                height: 40px;
            }
        </style>
    </head>
    <body>
        

        <!-- Navbar -->
        <?php include "navbar.php"; ?>
        
        <!-- Notion landing -->
        <div class="row">
            <div class="col-12">

                <div class="container-fluid d-flex mt-5">
                    <div class="col-md-6 d-flex justify-content-lg-center mt-5  mb-5">
                        <img src="images/notion logo.png" width="440" height="440" alt="">
                    </div>
    
                    <div class="col-md-6">
                        <h1><b>Get Organized With Notion!</b></h1>
                        <br>

                        <h4><b>What is Notion?</b></h4>
                        <p>Notion is a "all-in-one workspace for your notes, tasks, wikis, and databases.". <br>Basically, it's a tool you can use to organize your thoughts, projects, and information.</p>
                        <br>

                        <h4><b>Why Notion?</b></h4>
                        <p>Notion is super flexible! Design and organize your notion to your own unique style. <br>Also, you can copy any templates and add your own touch to it.</p>
                        <br>
                        <a href="https://www.notion.so/" target="_blank"><button class="dwnld-btn" style="font-size: 18px;" type="button"><b>DOWNLOAD NOTION NOW</b></button></a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Organize your life -->
        <div class="row">
            <div class="col-12">

                <div class="container-fluid d-flex mt-5">
                    <div class="col-md-4 offset-1 mt-auto mb-auto">
                        <h3><b>Organize your life</b></h3>
                        <p>With Notion’s flexibility, you may:</p>
                        <ul>
                            <li>Organize your tasks</li>
                            <li>Create a to-do list</li>
                            <li>Customize your timetable</li>
                            <li>Many more!</li>
                        </ul>
                    </div>
    
                    <div class="col-md-7 mb-5">
                        <video class="video-shadow" width="800" height="500" autoplay loop muted>
                            <source src="https://www.notion.so/front-static/pages/product/value-props/team-up-emoji-tile-v2.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>

            </div>
        </div>

        <!-- The limit is your creativity -->
        <div class="row">
            <div class="col-12">

                <div class="container-fluid d-flex">
                    <div class="col-md-4 offset-1 mt-5">
                        <h3><b>The limit is your creativity!</b></h3>
                        <p>Design anything that is relevant to you. <br>There's no wrong or right with notion. <br> Drag and drop, table, checklist, ultilize it all!</p>
                    </div>
    
                    <div class="col-md-7 mt-5 mb-5">
                        <video class="video-shadow" width="800" height="500" autoplay loop muted>
                            <source src="https://www.notion.so/front-static/pages/product/value-props/workflow-tile-v2.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>

            </div>
        </div>

        <!-- Youtube reviews -->
        <div class="row">
            <div class="col-12">

                <div class="container-fluid mt-5">

                    <div class="col-md-12 d-flex justify-content-center mb-3">
                        <h3><b>YouTube Reviews</b></h3>
                    </div>
                    
                    <div class="col-md-12 d-flex justify-content-center mb-5">
                        <div id="carouselReviews" class="carousel slide video-shadow" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <iframe width="900" height="506" src="https://www.youtube.com/embed/uJgv0XQOehs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe width="900" height="506" src="https://www.youtube.com/embed/5Vl2mP0Ita4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item active">
                                    <iframe width="900" height="506" src="https://www.youtube.com/embed/m9S5I3pWz94" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe width="900" height="506" src="https://www.youtube.com/embed/aA7si7AmPkY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselReviews" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselReviews" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Templates -->
        <div class="row">
            <div class="col-12">
                <div class="container-fluid d-flex mt-5">

                    <div class="col-md-4 offset-1 mt-5">
                        <h3><b>Discover Notion's Templates</b></h3>
                        <p>Find a pre-built template on Notion's website <a href="https://www.notion.so/templates" target="_blank">here</a> <br> or use these beautiful templates created by these amazing YouTubers!</p>
                    </div>

                    <div class="col-md-7 d-flex justify-content-center mt-5 mb-5">
                        <div id="carouselTemplates" class="carousel slide video-shadow" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <iframe width="720" height="405" src="https://www.youtube.com/embed/8T_qrsTWnyk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe width="720" height="405" src="https://www.youtube.com/embed/rO8HKR6KsuY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item">
                                    <iframe width="720" height="405" src="https://www.youtube.com/embed/-7zW8KOgbEQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="carousel-item active">
                                    <iframe width="720" height="405" src="https://www.youtube.com/embed/dcqnLhQy5UM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTemplates" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselTemplates" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

        <?php include "footer.php"; ?>
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Javascript -->
    </body>
</html>