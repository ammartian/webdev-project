<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Benefits of Music while Studying</title>
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
                <h1>The Benefits of Studying with Music</h1>
                <h6>by Ammar Hakimi | 16 Jan 2022</h6>
                <div class="seperator"></div>
                </div>
            </div>
        </section>

        <div class="blog">
            <div class="d-flex justify-content-center">
            <img src="images/article2.jpg" alt="image">
            </div>
            
            <div class="container-fluid text-box">
            <p>
            You have likely heard before that music helps you study.
            But, do you know why parents and professors alike are urging you to tune to iTunes?
            Studies have shown that music produces several positive effects on a human’s body and brain.
            Music activates both the left and right brain at the same time, and the activation of both hemispheres can maximize learning and improve memory.
            Find out music’s effect on your body and brain, and see how to enhance your studying with songs!
            </p>
            </div>
            
            <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Proven to Ease Student Stress
                </button>
                </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>It is proven to help reduce stress</strong> 
                        The University of Maryland Medical Center reveals that students should “listen to music.
                        Music is an effective stress reducer in both healthy individuals and people with health problems. Research finds that listening to soothing music can decrease blood pressure, heart rate, and anxiety levels in heart patients” (UMD Medical Center).
                        This statement reveals the powerful effect songs alone can have on the human body.
                        So, power on the radio to help combat stress before heading to a study session.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Reduce Test Anxiety
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Anxiety can become a crippling blockade between students and their textbooks.</strong> 
                        Believe it or not, USA Today reveals, “one study found that music’s effect on anxiety levels is similar to the effect of getting a massage” (Christ). 
                        It is official; your favorite tunes can reduce anxiety as much as a massage!
                        Anxiety-stricken students should pop in the earbuds before heading to the library. 
                        They will feel relaxed, at ease, and ready to conquer chapter after chapter.
                        If you’re like many students suffering from anxiety and stress, try listening to rap music while studying.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Improve Your Performance
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Take a break about halfway through your study sessions.Music is found to help people perform better in high-pressure situations,</strong>
                        such as the bi-annual high-pressure event that is finals week.
                        Studies have shown that music can help students transform from coal to diamonds, shining under pressure.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        It can even cure pain!
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>Have you tried studying with music?</strong>
                        According to USA Today, music is so powerful to the body that it can actually help ease the pain. Studies show that music can meaningfully reduce the perceived intensity of pain, especially in geriatric care, intensive care, or palliative medicine.
                        Listening to music can also help you relax as by lowering your blood pressure, easing muscle tension and increasing your attention span.
                        </div>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Proven to improve brain functions
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>Perhaps one of the most compelling reasons to listen to music during a study session is because music is proven to help improve cognitive performance.</strong>
                        Basically, music helps your brain function! “Background music may enhance performance on cognitive tasks. 
                        One older study found that listening to music allowed test takers to complete more questions in the time allotted and get more answers right. 
                        If you want to improve brain performance while studying, evidence now shows that you must first improve your emotional state by listening to music that you enjoy!
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar -->
            <?php include "footer.php"; ?>
    </body>
</html>