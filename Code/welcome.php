<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Welcome</title>
    <link rel="stylesheet" href="HomeAssets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="HomeAssets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="HomeAssets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="HomeAssets/css/Article-List.css">
    <link rel="stylesheet" href="HomeAssets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="HomeAssets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="HomeAssets/css/Simple-Slider.css">
    <link rel="stylesheet" href="HomeAssets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="index.html">Crochet Mode</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="tips.html">Tips &amp; Tricks</a></li>
                    <li class="nav-item"><a class="nav-link" href="tutorials.html">Tutorials</a></li>
                    <li class="nav-item"><a class="nav-link" href="patterns.html">Patterns</a></li>
                </ul><span class="navbar-text actions"> <a class="login" href="login.php">Log In</a><a class="btn btn-light action-button" role="button" href="register.php">Sign Up</a></span>
            </div>
        </div>
    </nav>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    <div class="article-list">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Check These Out!</h2>
                <p class="text-center">Weekly featured pattern, stitch, and tip!</p>
            </div>
            <div class="row articles">
                <div class="col-sm-6 col-md-4 item"><a href="cocoonsweater.html"><img class="img-fluid" src="HomeAssets/img/Sweater.jpeg"></a>
                    <h3 class="name">Pattern</h3>
                    <p class="description">Make your first sweater with this easy cocoon sweater pattern!</p><a class="action" href="cocoonsweater.html"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="SC.html"><img class="img-fluid" src="HomeAssets/img/crochetstitch.jpeg"></a>
                    <h3 class="name">Single Crochet Stitch</h3>
                    <p class="description">How to make a single crochet stitch!</p><a class="action" href="SC.html"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-sm-6 col-md-4 item"><a href="tiphooksize.html"><img class="img-fluid" src="HomeAssets/img/Hook.jpeg"></a>
                    <h3 class="name">Tip</h3>
                    <p class="description">Crochet hook size guide!</p><a class="action" href="tiphooksize.html"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html">Home</a></li>
                <li class="list-inline-item"><a href="tips.html">Tips &amp; Tricks</a></li>
                <li class="list-inline-item"><a href="tutorials.html">Tutorials</a></li>
                <li class="list-inline-item"><a href="patterns.html">Patterns</a></li>
            </ul>
            <p class="copyright">Crochet Mode © 2021</p>
        </footer>
    </div>
    <script src="HomeAssets/js/jquery.min.js"></script>
    <script src="HomeAssets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="HomeAssets/js/Simple-Slider.js"></script>
</body>
</html>