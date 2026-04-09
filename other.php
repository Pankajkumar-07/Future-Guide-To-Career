<?php
// other.php
require_once 'config.php';
require_once 'functions.php'; // For session and logout handling
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Future Guide To Career - Other Activities</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <?php include 'header.html'; // Or copy paste the header HTML content from index.php ?>

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
            <button class="nav-btn" onclick="location.href='index.php'">Home</button>
            <button class="nav-btn" onclick="location.href='study.php'">Study</button>
            <button class="nav-btn" onclick="location.href='jobs.php'">Jobs</button>
            <button class="nav-btn" onclick="location.href='sports.php'">Sports</button>
            <button class="nav-btn" onclick="location.href='culture.php'">Culture</button>
            <button class="nav-btn" onclick="location.href='other.php'">Other Activity</button>
        </nav>

        <div class="right-area">
            <?php if (isset($_SESSION['user'])): ?>
                <div style="font-weight:600">Hi, <?=htmlspecialchars($_SESSION['user']['username'])?></div>
                <a class="small-btn" href="?logout=1">Logout</a>
            <?php else: ?>
                <button class="small-btn" onclick="openModal('loginModal')">Login</button>
                <button class="small-btn" onclick="openModal('registerModal')">Register</button>
            <?php endif; ?>
            <button id="darkToggle" class="small-btn" aria-pressed="false">Dark</button>
        </div>
    </header>

    <main>
        <div class="card" style="width:100%; max-width:1255px; min-height:1000px; margin: 18px auto;">
        <div class="main-diagram-container">
            <img src="career_img/img1.6.png" alt="Career Center Diagram" class="Career-diagram-img">
        </div>
        <div class="slider">
             <p><h3>User:- <?= isset($_SESSION['user']) ? htmlspecialchars($_SESSION['user']['username']) : 'Guest' ?></h3></p>
            <h2> <center>Other Multiple Activity</center></h2>
                  <p>This is the content section for other multiplt activity resources.</p>
            </div>          
    </main>
    
    <div id="modalWrapper" style="position:fixed;inset:0;display:none;align-items:center;justify-content:center;background:rgba(0, 0, 0, 0.4);z-index:20000">
        <div id="modalContent" style="background:var(--card);padding:18px;border-radius:12px;min-width:320px;max-width:420px;box-shadow:0 10px 40px rgba(0, 0, 0, 0.1)"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>