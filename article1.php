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
            <img src="images/article1.jpg" alt="image">
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
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Setting Up Your Routine
                </button>
                </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Designate a daily study time.</strong> 
                        Studying for a test begins well  before your reach exam day. You should set aside time every day to study so that you can learn the material you're expected to know. 
                        Daily study sessions are needed to keep the material fresh in your mind and to give yourself time to make connections between concepts.
                        If you have other homework, you may decide to do it during your designated study time since it will help you better grasp the material.
                        By reserving a specific time each day for studying, it can be easier to focus, because you won't have to worry about any other priorities competing for your attention.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Learning the Material
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Read the course materials and texts.</strong> 
                        You should have a textbook for each course, and your instructor could also assign other books or articles for you to read.
                        Don't skim the texts or read a summary.
                        Good study habits require that you read all of the assigned texts. 
                        If you can, highlight the important parts of the texts.
                        Research anything you don't understand and look up confusing vocabulary. Make yourself a flashcard on the spot so that you'll have it for later.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Helping Yourself Study Better
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Take a break about halfway through your study sessions.</strong>
                        Get up and walk around, stepping away from your study space.
                        You can grab a snack, go for a short walk, or do some stretches.
                        Try to clear your mind so that you can start fresh when you go back to your study space.
                        You break should last for 5-15 minutes, depending on how long you're studying.
                        <ul>
                        <li>Some people benefit from shorter, more frequent breaks.</li>
                        <li>You should also take a break when you're feeling frustrated.</li>
                        <li>If you were studying using a computer or other electronic device, don't use devices during your breaks. Your eyes will thank you.</li>
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