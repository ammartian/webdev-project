<?php

// Initialize the session
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT admin_id FROM admin WHERE admin_username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO admin (admin_username, admin_password) VALUES (?, ?)";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_BCRYPT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: notion.html");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Create Admin</title>
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
            a, a:hover, a:active, a:visited { 
                color: #758BFC; 
                text-decoration: none;
            }
            .card {
                height: 100%;
                padding: 20px 40px 20px 40px;
            }
            .card-shadow {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 0px 2px;
            }
            .input-box {
                width: 100%;
                height: 35px;
                border-style: groove;
                border-radius: 4px;
                border-color: whitesmoke;
                margin-top: 5px;
                /* margin-bottom: 20px; */
            }
            .input-margin{
                margin-top: 20px;
            }
            .btn-style {
                width: 100%;
                height: 35px;
                color: white;
                background-color: black;
                border-radius: 4px;
                margin-top: 30px;
                margin-bottom: 20px;
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
                <div class="container mt-5 d-flex">
                    <div class="col-md-4 offset-1 card card-shadow">
                        <h1><b>Register Admin</b></h1>
                        <p>Only admin can register an admin!</p>

                        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <label class="input-margin" for="username"><b>Username</b></label> <br>
                            <input  class="input-box <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>" type="text" name="username" placeholder="Enter your username" required>
                            <span class="invalid-style"><?php echo $username_err; ?></span> <br>

                            <label class="input-margin" for="password"><b>Password</b></label> <br>
                            <input class="input-box <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>" type="password" name="password" placeholder="Enter your password" required>
                            <span class="invalid-style"><?php echo $password_err; ?></span> <br>

                            <label class="input-margin" for="confirm_password"><b>Confirm Password</b></label> <br>
                            <input class="input-box <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>" type="password" name="confirm_password" placeholder="Confirm your password" required>
                            <span class="invalid-style"><?php echo $confirm_password_err; ?></span> <br>

                            <button class="btn-style" type="submit"><b>REGISTER</b></button>
                        </form>
                        
                    </div>

                    <!-- Images -->
                    <div class="col-md-6 d-flex justify-content-right">
                        <img src="images/register images.png" width="706px" height="555px">
                    </div>

                </div>
            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Javascript -->
    </body>
</html>