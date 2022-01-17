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
            <img src="images/article4.jpg" alt="image">
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
                    Keeping A Routine to Enhance Productivity
                </button>
                </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Keep a detailed schedule.</strong> 
                        Get in the habit of keeping a weekly plan for yourself and ensure that you set aside time for your studies every day. This can be written in a tangible calendar, or electronically with one of various electronic scheduling programs. Vary the study times to fit in with other commitments, including your job as well as exercise and social engagements.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Staying On Top of Your Studies
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Commit to several study sessions per week.</strong> 
                        It may be tempting to get all of your school work done in one or two marathon sessions each week. However, your memory and focus will work better in one or two hour sessions. Accordingly, avoid trying to get all of your schoolwork done in one sitting.
                        <ul>
                            <li>To keep sessions consistent, get in the habit of studying at the same time four or five days a week.</li>
                            <li>The regularity that results from a consistent study schedule will also make your study sessions more productive. Your mental focus will be improved, as your brain will anticipate focusing on schoolwork for that part of the day.</li>
                            <li>Having regularly scheduled study sessions also means you can occasionally miss a study session as long as you get back into the routine as quickly as you’re able.</li>
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Maintaining Mental and Physical Health
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Take time to decompress.</strong>
                        In other words, schedule time for casual play as well. Even if it feels like you don’t have the time to spare, it’s important to take a break to let your mind recuperate. You can’t always work and study! Ideally, plan social activities with friends – the more physically active, the better.
                        <ul>
                        <li>Even on especially busy days, take breaks. Go for a walk around the block, and leave your phone at home. Try not to think about what you’re working on. Instead, appreciate the way the sun and air feel on your skin, the color of the leaves, the angles of a building you’ve never noticed before.</li>
                        <li>Try working for about 50 minutes, and taking a 10 or 15 minute break before hunkering down for another 50 minute session of focused studying or working.</li>
                        <li>Plan a trip – whether to Vegas, or a campsite just out of town – to follow an especially busy period of time. Not only will the trip allow you to decompress, it will provide something for you to look forward to in the meantime.</li>
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