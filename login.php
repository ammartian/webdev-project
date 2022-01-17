<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to home page
// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: Home.php");
//     exit;
// }

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$role="";
$fullName = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    }elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    //

    // Validate credentials for admin
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $role= trim ($_POST["role"]);
        if ($role == "admin"){
        $sql = "SELECT admin_id, admin_username, admin_name, admin_password FROM admin WHERE admin_username = ?";   
        }
        // else if ($role == "customer"){
        //     $sql = "SELECT customer_id, customer_username, customer_fullname, customer_password FROM customer WHERE customer_username = ?";  
        //}
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $fullName, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["fullName"] = $fullName;
                            $_SESSION["username"] = $username;
                            $_SESSION["role"] = $role;                             
                            
                            // Redirect user to welcome page
                            header("location: notion.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
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
        <title>Login</title>
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
            .input-box {
                width: 100%;
                height: 35px;
                border-style: groove;
                border-radius: 4px;
                border-color: whitesmoke;
                margin-top: 5px;
                margin-bottom: 20px;
            }
            .btn-style {
                width: 100%;
                height: 35px;
                color: white;
                background-color: black;
                border-radius: 4px;
                margin-top: 10px;
                margin-bottom: 20px;
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
                <div class="container mt-5 d-flex">
                    <div class="col-md-4 offset-1 card card-shadow">
                        <h3>Welcome!</h3>
                        <h1><b>Sign In</b></h1>
                        <p>Note: Only admin can sign in</p>

                        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <label for="username"><b>Username</b></label> <br>
                            <input  class="input-box <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" type="text" name="username" placeholder="Enter your username" required> <br>

                            <label for="password"><b>Password</b></label> <br>
                            <input class="input-box <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" type="password" name="password" placeholder="Enter your password" required> <br>

                            <span class="invalid-style"><?php echo $login_err; ?></span>

                            <button class="btn-style" type="submit" name="role" value="admin"><b>LOGIN</b></button>
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