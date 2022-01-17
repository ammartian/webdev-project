<?php
// Initialize the session
session_start();

//Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: login.php");
//     exit;
// }

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$comment = $name = $email = "";
$comment_err = $name_err = $email_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate comment
    if(empty(trim($_POST["comment"]))){
        $comment_err = "Please enter a comment or feedback.";
    } else{
        // Prepare a select statement
        $sql = "SELECT comment_ID FROM comment WHERE comment_comment = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_comment);
            
            // Set parameters
            $param_comment = trim($_POST["comment"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                $comment = trim($_POST["comment"]);
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }

    // Validate name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter your name.";     
    } else{
        $name = trim($_POST["name"]);
    }


    // Validate email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email.";     
    } else{
        $email = trim($_POST["email"]);
    }


    // Check input errors before inserting in database
    if(empty($comment_err) && empty($name_err) && empty($email_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO comment (comment_comment, comment_name, comment_mail) VALUES (?, ?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_comment, $param_name, $param_email);
            
            // Set parameters
            $param_comment = $comment;
            $param_name = $name;
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: feedback.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    function getComments($link) {
        $sql = "SELECT * FROM comment";
        $result = $link->query($sql);
        $row = $result->fetch_assoc();
        $row['comment_comment'];
    }

            
}

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
            .feedback-margin {
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        
        <!-- Navbar -->
        <?php include "navbar.php"; ?>
        <!-- Navbar -->

        <div class="row">
            <div class="col-12">
                
                <!-- Register Card -->
                <div class="container mt-3 d-flex justify-content-center">
                    <div class="col-md-11 ">
                        <h1><b>Leave a feedback or comment</b></h1>
                        <p>Help us improve our content!</p>

                        <div class="card card-shadow">

                        <!-- Input -->
                            <div>
                                <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <label for="comment"><h4><b>Feedback</b></h4></label>
                                    <textarea  class="comment-box" value="<?php echo $comment; ?>" id="comment" name="comment" placeholder="Enter your feedback or comment!"></textarea>

                                    <label for="name"><b>Name</b></label> <br>
                                    <input  class="input-box" value="<?php echo $name; ?>" type="text"  name="name" placeholder="Enter your name" required> <br>

                                    <label for="email"><b>Email</b></label> <br>
                                    <input class="input-box" value="<?php echo $email; ?>" type="email" name="email" placeholder="Enter your email" required> <br>

                                    <button class="btn-style" type="submit"><b>Submit</b></button>
                                </form>
                            </div>
                            
                        <!-- Outpu -->
                            <div class="feedback-margin">
                                <h4><b> Previous Feedbacks</b></h4>
                                <hr>
                                    <div class="group">
                                        <?php
                                            $sql = "SELECT * FROM comment";
                                            $result = $link->query($sql);
                                            
                                            if($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
                                                        echo "<b>". $row["comment_name"]. "</b> <br> <b>". $row["comment_mail"]. "</b> <br>". $row["comment_comment"] . "<br><hr>";
                                                    }
                                                    if (isset($_SESSION["role"]) && ($_SESSION["role"] == "admin")){
                                                        echo "<b>". $row["comment_name"]. "</b> <br> <b>". $row["comment_mail"]. "</b> <br>". $row["comment_comment"] . "<br><a href='delete.php?comment_ID=". $row["comment_ID"]."'><button type='button' class='btn btn-danger'>Delete</button></a><hr>";
                                                    }
                                                }
                                            } else {
                                                echo "0 Results";
                                            }
                                        ?>
                                    </div> 
                                
                            </div>

                        </div>
                        
                    </div>

                </div>
            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Javascript -->
    </body>
</html>