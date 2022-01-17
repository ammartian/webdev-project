<?php
// Initialize the session
session_start();


?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Environment</title>
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
        
        .learn-btn {
            background-color: #FFA4A2;
            color: white;
            border: none;
            border-radius: 12px;
            width: 135px;
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
        .footer-card {
            background-color: #758BFC;
            color: white;
        }
        .music-link {
            color: #758BFC;
            font-weight: bold;
        }
        .music-link:hover {
            color: #758BFC;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
        <?php include "navbar.php"; ?>
    <!-- Navbar -->
<div class="container">
    <!-- Environment landing start-->
    <div class="row">
                <div class="col-6 d-flex justify-content-lg-center ">
                    <img src="images/envvon_1.png" width="440" height="440" alt="">
                </div>

                <div class="col-6 my-auto">
                    <h1><b>Study with Better Environment</b></h1>
                    <br>

                    <h4><b>Why do we need Good Environment to Study?</b></h4>
                    <p>An organised environment is a not a time saver, but it can help you get more done by ensuring that you know where everything is. You are not distracted by visual distractions, and can concentrate on the task at hand. Furthermore, having a well-organized environment will help you generate positive mental energy, which can expand to your enthusiasm for your daily duties.</p>
                    
                    <br>

                    <h4><b>How to Prepare a Good Environment?</b></h4>
                    <p>Through this page, we has prepared you some tips how to get a comfortable environment to study. </p>
                    
                    
                </div>
    </div>

    <!-- Stationeries start -->
    <div class="row">

                <div class="col-6 my-auto">
                    <h3><b>Organize your Stationeries</b></h3>
                    <p>According to studies, there is a link between clutter and decreased productivity. You can reduce distractions and get more done by eliminating clutter. Any student's life would be incomplete without stationery products. </p>
                    
                </div>
                    <div class="col-6 d-flex justify-content-lg-center">
                        <img src="images/envvon_2.png" width="440" height="440" alt="">
                    </div>
    </div>
    <!-- Stationeries end -->
    <!-- Checklist start-->
    <div class="row">
                <div class="col-6 d-flex justify-content-lg-center">
                    <img src="images/envvon_3.png" width="440" height="440" alt="">
                </div>

                <div class="col-6 my-auto">
                    <h3><b>Plan your Study Sessions</b></h3>
                    <p>A study plan is an organized schedule outlining study times and learning goals. Just like with work or school schedules, college students should develop a schedule that sets aside dedicated time each week for studying. </p>
                    <br>
                    <p>How to plan the study sessions:</p>
                    <ul>
                        <li>Break your studies into a list</li>
                        <li>See what tasks are urgent or have short deadlines.</li>
                        <li>Always, prioritize your studies based on ‘Time it Takes’, ‘Difficulty Level’ and ‘Duration you will need’</li>
                    </ul>
                </div>
    </div>
    <!-- Checklist end-->

    <!-- Notes -->
    <div class="row">

                <div class="col-6 my-auto">
                    <h3><b>Do the Study Notes</b></h3>
                    <p>It keeps you awake. Note taking forces you to pay attention and helps you focus in class (or while reading a textbook). It helps you learn. Studies on learning have shown that actively engaging with the topic by listening and then summarizing what you hear helps you understand and remember the information later</p>
                    <ul>
                        <li>Make clear and accurate notes</li>
                        <li>Come to class prepared</li>
                        <li>Organize your notes</li>
                        <li>Use abbreviations and symbols</li>
                    </ul>
                </div>

                <div class="col-6">
                    <div class="col-6 d-flex justify-content-lg-center">
                        <img src="images/envvon_4.png" width="440" height="440" alt="">
                    </div>
                </div>
    </div>
    <!-- Notes -->
    <!-- Auromatic -->
    <div class="row">

                <div class="col-6 d-flex justify-content-lg-center">
                    <img src="images/envvon_5.png" width="440" height="440" alt="">
                </div>

                <div class="col-6 my-auto">
                    <h3><b>Get your room an Aroma Therapy</b></h3>
                    <p>Numerous studies have been done on essential oils to improve memory and focus, especially for people with ADD and ADHD. Rosemary, sage, peppermint, and eucalyptus are great choices for improving concentration</p>
                </div>
    </div>
    <!-- Auromatic -->
    <!-- Air Humidifier -->
    <div class="row">

                <div class="col-6 my-auto">
                    <h3><b>Put an Air Humidifier</b></h3>
                    <p>Indoor air quality is a crucial factor in the educational environment. 
                        Humidifiers can help students concentrate while studying.  humidifier 
                        will help students function better in class. This is because pupils will 
                        be more focused on the content they are learning if they are breathing 
                        cleaner, fresher air. Children are often distracted, therefore an unpleasant 
                        learning environment will encourage them to distract from the task in hand.</p>
                    
                </div>

                    <div class="col-6 d-flex justify-content-lg-center">
                        <img src="images/envvon_6.png" width="440" height="440" alt="">
                    </div>
    </div>
    <!-- Air Humidifier -->
    <!-- Coffee -->
    <div class="row">
                <div class="col-6 d-flex justify-content-lg-center ">
                    <img src="images/envvon_7.png" width="440" height="440" alt="">
                </div>

                <div class="col-6 my-auto">
                    <h3><b>Prepare a Cup of Coffee</b></h3>
                    <p>Coffee not only helps you to focus, there are a nice range of boosts that add up to a nice little “turbo-charge” when you're studying: Higher levels of alertness. Improved mood. Faster reaction times.</p>
                </div>
    </div>
    <!-- Coffee -->
    <!-- Cookies -->
    <div class="row">
                <div class="col-6 my-auto">
                    <h3><b>Have Snack during the Break Time</b></h3>
                    <p>Nutritious snacks are an important component of a balanced diet. That is especially true during the long hours spent studying. Snacks help as a bridge between meals and can prevent excessive hunger while helping with portion control and mindful food choices.</p>
                    <p> Brain Food Snacks for Studying examples:</p>
                    <ul>
                        <li>Almonds</li>
                        <li>Dark chocolate</li>
                        <li>Air-popped popcorn</li>
                        <li>Fruit salad</li>
                    </ul>
                </div>
                    <div class="col-6 d-flex justify-content-lg-center">
                        <img src="images/envvon_8.png" width="440" height="440" alt="">
                    </div>
    </div>
    <!-- Cookies -->
    <!-- Drinking Bottle -->
    <div class="row">
                <div class="col-6 d-flex justify-content-lg-center">
                    <img src="images/envvon_9.png" width="440" height="440" alt="">
                </div>

                <div class="col-6 my-auto">
                    <h3><b>Stay hydrated with Plain Water</b></h3>
                    <p>Drinking enough water each day is crucial for many reasons: to regulate body temperature, keep joints lubricated, prevent infections, deliver nutrients to cells, and keep organs functioning properly. Being well-hydrated also improves sleep quality, cognition, and mood</p>
                </div>
    </div>
    <!-- Drinking Bottle -->
    <!-- Inspiration -->
    <div class="row">
                <div class="col-6 my-auto">
                    <h3><b>Put Inspiration Near Study Place</b></h3>
                    <p> Inspiration is a motivational resource that has been under-appreciated by psychologists. Inspiration gives us both the means and the motivation to rise above, be creative, grow closer to our goals, learn from others, and achieve enhanced well-being.</p>
                    <p>Some Inspiration examples:</p>
                    <ul>
                        <li>Life qoutes</li>
                        <li>Motivational qoutes</li>
                        <li>Polaroid or Family Picture</li>
                        <li>Person who you love</li>
                    </ul>
                </div>
                    <div class="col-6 d-flex justify-content-lg-center">
                        <img src="images/envvon_10.png" width="440" height="440" alt="">
                    </div>
    </div>
    <!-- Inspiration -->
    <!-- Greener -->
    <div class="row">
                <div class="col-6 d-flex justify-content-lg-center">
                    <img src="images/envvon_11.png" width="440" height="440" alt="">
                </div>

                <div class="col-6 my-auto">
                    <h3><b>Put a Green Plant in your Room</b></h3>
                    <p>Green is believed to relieve stress. Besides, indoor plants can improve indoor air quality such photosynthesis, plants absorb carbon dioxide and release oxygen. It may provide a fresh and calm environment at the study place.</p>
                </div>
    </div>
    <!-- Greener -->
    <!-- Lamp -->
    <div class="row">

                <div class="col-6 my-auto">
                    <h3><b>Have enough Light</b></h3>
                    <p>Lighting in your study is important for more than just lowering eye strain. The lighting in your study space is important since it has a significant impact on your productivity. The amount of time you can spend there and how productive you are will be determined by how tired your eyes are, and your eyes will tired faster in low light. As a result, make sure to use multiple layers of lighting to ensure that you can study for numerous hours.</p>
                </div>

                <div class="col-6 d-flex justify-content-lg-center">
                    <img src="images/envvon_12.png" width="440" height="440" alt="">
                </div>
    </div>
    <!-- Lamp -->
    <!-- Music -->
    <div class="row">
                <div class="col-6 d-flex justify-content-lg-center ">
                    <img src="images/envvon_13.png" width="440" height="440" alt="">
                </div>

                <div class="col-6 my-auto">
                    <h3><b>Listen to Music</b></h3>
                    <p>Background music can help you focus on a task by motivating you and elevating your mood. Music might help you stay awake throughout longer study sessions. Students have discovered that music enhances memorization in some situations, most likely through generating a happy mood, which enhances memory formation indirectly. Music has been demonstrated to have a number of beneficial impacts on the human body and brain in studies. Music affects both the left and right hemispheres of the brain at the same time, which can help you learn more and remember more.</p>
                    
                    <p>Some of Music or Environment sounds you may consider:</p>
                    <ul>
                        <li>
                            <a href="music.html" class= "music-link"> Music Page </a>
                        </li>
                        <li> 
                            <a href="https://www.imissmylibrary.com/" class= "music-link"> Library Environment </a>
                        </li>
                        <li>
                            <a href="https://imissmycafe.com/" class= "music-link">Cafe Environment  </a>
                        </li>
                    </ul>
                </div>
    </div>
    <!-- Music -->
</div>
<!-- footer -->
<?php include "footer.php"; ?>
</body>
</html>