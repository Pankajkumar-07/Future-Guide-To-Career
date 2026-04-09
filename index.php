<?php
// index.php
// Removed require_once statements to make the file static for GitHub Pages compatibility.
// If config.php and functions.php contain necessary PHP logic, consider converting to static or using alternatives.
// require_once 'config.php';
// require_once 'functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Future Guide To Career</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="topbar">
        <div class="left-area">
  <div class="logo-circle" title="Logo">
    <img src="career_img/logo3.png" alt="Future Guide Logo" class="logo-img">
  </div>
  <div>
                <div class="title">Future Guide To Career</div>
                <div style="font-size:12px;color:var(--muted)">· Plan · Learn · Grow</div>
            </div>
        </div>

        <nav class="center-area" aria-label="Main navigation">
            <button class="nav-btn" onclick="location.href='study.php'">Study</button>
            <button class="nav-btn" onclick="location.href='jobs.php'">Jobs</button>
            <button class="nav-btn" onclick="location.href='sports.php'">Sports</button>
            <button class="nav-btn" onclick="location.href='culture.php'">Culture</button>
            <button class="nav-btn" onclick="location.href='other.php'">Other Activity</button>


           

<nav class="center-area" aria-label="Main navigation">
    <form class="search-form" action="/search.php" method="GET">
        <input type="search" name="q" placeholder="Search for careers, studies..." required class="search-input">
        <button type="submit" class="search-btn">🔍</button>
    </form>
</nav>
        </nav>

        <div class="right-area">
            <!-- Removed PHP session logic for static compatibility. Replace with static content if needed. -->
            <button class="small-btn" onclick="openModal('loginModal')">Login</button>
            <button class="small-btn" onclick="openModal('registerModal')">Register</button>
            <button id="darkToggle" class="small-btn" aria-pressed="false">Dark</button>
        </div>
    </header>

<main>
        <!-- Removed PHP error/success messages for static compatibility. -->
        <section class="hero">
    <div class="card" style="width:100%; max-width:1255px; min-height:550px; margin: 18px auto;"> 
        <div class="slider">

                <div class="slider">
                    <div class="slides" id="slideBox">
                        <img src="career_img/img1.1.png" alt="Slide 1">
                        <img src="career_img/img1.3.png" alt="Slide 3">
                        <img src="career_img/img1.4.png" alt="Slide 4">
                        <img src="career_img/img1.22.png" alt="Slide 2">
                        <img src="career_img/img1.5.png" alt="Slide 5">
                        <img src="career_img/img1.6.png" alt="Slide 6">
                    </div>

                    <div class="dots">
                        <span class="dot active" onclick="goToSlide(0)"></span>
                        <span class="dot" onclick="goToSlide(1)"></span>
                        <span class="dot" onclick="goToSlide(2)"></span>
                        <span class="dot" onclick="goToSlide(3)"></span>
                        <span class="dot" onclick="goToSlide(4)"></span>
                        <span class="dot" onclick="goToSlide(5)"></span>
                    </div>
                </div>
                </div>
        </section>
    </main>

    <div id="modalWrapper" style="position:fixed;inset:0;display:none;align-items:center;justify-content:center;background:rgba(0, 0, 0, 0.4);z-index:20000">
        <div id="modalContent" style="background:var(--card);padding:18px;border-radius:12px;min-width:320px;max-width:420px;box-shadow:0 10px 40px rgba(0, 0, 0, 0.1)"></div>
    </div>


     <!-- social icons -->
    <ul class="sci">
        <li>
            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
        </li>
        <li>
            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
        </li>
        <li>
            <a href="#"><ion-icon name="logo-youtube"></ion-icon></a>
        </li>
    </ul>

    
    <script src="script.js"></script>

</body>
</html>