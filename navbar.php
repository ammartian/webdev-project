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
                    <a href="pomodoro.php" class="navbar-brand">
                        <img src="images/pomodoro icon.png" width="40px" height="40px" alt="">
                    </a>
                </li>
                <li class="nav-item ms-lg-5 me-lg-5">
                    <a href="notion.php" class="navbar-brand">
                        <img src="images/notion icon.png" width="40px" height="40px" alt="">
                    </a>
                </li>
                <li class="nav-item ms-lg-5 me-lg-5">
                    <a href="music.php" class="navbar-brand">
                        <img src="images/music icon.png" width="50px" height="50px" alt="">
                    </a>
                </li>
                <li class="nav-item ms-lg-5 me-lg-5">
                    <a href="environment.php" class="navbar-brand">
                        <img src="images/environment icon.png" width="40px" height="40px" alt="">
                    </a>
                </li>
                <li class="nav-item ms-lg-5 me-lg-5">
                    <a href="techniques.php" class="navbar-brand">
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