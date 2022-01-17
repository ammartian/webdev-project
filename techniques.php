<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Techniques</title>
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

        <!-- LOCAL CSS -->
        <link href="style.css" rel="stylesheet">

        <style>
            .article-width {
                max-width: 55%;
            }
        </style>
        
    </head>
    <body>
        
        <!-- Navbar -->
        <?php include "navbar.php"; ?>
        <!-- Navbar -->

        <!-- Blog landing -->        
        <section class="title container">
            <div class="row text-center">
                <div class="col-md-12">
                <h1>Reform Your Study Techniques</h1>
                <div class="seperator"></div>
                <!-- Quotes -->
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>A student who has no study skills is like a person with a driving license but can't drive</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Respicius Rwehumbiza
                    </figcaption>
                </figure>
                </div>
            </div>
        </section>

        <div class="overall">

            <div class="d-flex flex-column">

                <div class="d-flex justify-content-center">
                    <!-- ARTICLE #1 -->
                    <div class="card mb-3 article-width">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/article1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Create Good Study Habits for Exams</h5>
                                    <p class="card-text">
                                        To better your study habits, you can employ good studying strategies to stay on track and use learning style to study better.
                                    </p>
                                    <button type="button" class="btn btn-dark"><a style="text-decoration: none; color: white;"href="article1.php">Read More</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="d-flex justify-content-center">
                    <!-- ARTICLE #2 -->
                    <div class="card mb-3 article-width p-2">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/article2.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">The Benefits of Studying with Music</h5>
                                    <p class="card-text">You have likely heard before that music helps you study. Music activates both the left and right brain at the same time.</p>
                                    <button type="button" class="btn btn-dark"><a style="text-decoration: none; color: white;"href="article2.php">Read More</a></button>
                                </div>
                            </div>
                        </div>
                    </div>     
                </div> 
                

                <div class="d-flex justify-content-center">
                    <!-- ARTICLE #3 -->
                    <div class="card mb-3 article-width">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/article3.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">How to Study for Multiple Choice Exams</h5>
                                    <p class="card-text">Multiple-choice exams are designed to test your memory and recall. You’ll have to select the right answer from a choice of 3 to 5 options, so it can be tricky.</p>
                                    <button type="button" class="btn btn-dark"><a style="text-decoration: none; color: white;"href="article3.php">Read More</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex justify-content-center">
                    <!-- ARTICLE #4 -->
                    <div class="card mb-3 article-width">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/article4.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">How to Work and Study at the Same Time</h5>
                                    <p class="card-text">There are some definitive benefits of working while you’re getting a degree. Among the most obvious, you’ll be earning a paycheck. </p>
                                    <button type="button" class="btn btn-dark"><a style="text-decoration: none; color: white;"href="article4.php">Read More</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            

            <!-- footer -->
                <?php include "footer.php"; ?>  
        </div>
    </body>
</html>