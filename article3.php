<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Good Study Habits</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <!-- Bootstrap JS -->        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
        <!-- Google Font -->

        <!-- LOCAL CSS -->
        <link href="style.css" rel="stylesheet">

        <style>
            .text-box {
            width: 70%;
            height: 50%;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <?php include "navbar.php"; ?>

        <!-- Blog landing -->        
        <section class="title container text-center">
            <div class="row">
                <div class="col-md-12">
                <h1>Create Good Study Habits for Exams</h1>
                <h6>by Arwind Tharumadurai | 15 Jan 2022</h6>
                <div class="seperator"></div>
                </div>
            </div>
        </section>

        <div class="blog">
            <div class="d-flex justify-content-center">
            <img src="images/article3.jpg" alt="image">
            </div>
            
            <div class="container-fluid text-box">
            <p>
                With good study habits, you'll be able to reduce your stress and take tests and exams with confidence. 
                While building lasting study habits might seem hard at first, soon your new good habits will be part of your routine. 
                You can create good study habits for exams by first setting up a study routine and learning your course material. 
                To better your study habits, you can employ good studying strategies to stay on track and use your learning style to study better.
            </p>
            </div>
            
            <div class="accordion" id="accordionExample">
            <!-- POINT #1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Memorizing Key Information
                </button>
                </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Start by rereading or rewriting your notes over and over again.</strong> 
                        Refresh the information in your head as many times as you can.
                        You can read aloud to yourself or rewrite your notes in your own words.
                        Go slow and don’t rush through it—skimming will only waste precious study time.
                        <ul>
                            <li>If you prefer to rewrite your notes, jot them down in a different format—outlines, charts, and idea-maps will help you categorize information and draw valuable links between bits of material.</li>
                        </ul>
                    </div>
                    </div>
                </div>

                <!-- POINT #2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Creating Good Study Habits
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Start studying at least a few days to a week before the test.</strong> 
                        Start studying at least a few days to a week before the exam so the information has time to percolate in your mind. 
                        Gauge how early you should start based on how much information is on the test.
                        <ul>
                            <li>For instance, start studying 2 weeks before final exams that cover an entire semester of material.</li>
                            <li>For midterms or quarter-exams, starting a few days to a week ahead of the test date should be enough time.</li>
                            <li>Getting a head start will also lower your stress levels and give you adequate time to rest your brain between study sessions.</li>
                        </ul>
                    </div>
                    </div>
                </div>
                </div>
        </div>

        <!-- Navbar -->
            <?php include "footer.php"; ?>
    </body>
</html>