<?php
// computer_engineering.php
require_once 'config.php';
require_once 'functions.php'; 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Computer Engineering</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        .page-content { padding: 0 18px; }

        /* Banner Styling (Explore Computer Engineering) */
        .engineering-banner {
            background: linear-gradient(90deg, #111827 0%, #1e3a8a 100%);
            /* Placeholder for image from screenshot */
            background-image: url('career_img/engineering_banner_bg.jpg'); /* आपको यह इमेज जोड़नी होगी */
            background-size: cover;
            background-position: center;
            padding: 50px 20px; 
            color: #fff; 
            margin: -18px -18px 0 -18px; /* Card के पैडिंग को ओवरराइड करने के लिए */
            border-radius: 12px 12px 0 0;
        }
        .engineering-banner h1 { margin-top: 0; font-size: 2.2em; }
        .engineering-banner a { color: #ccc; text-decoration: none; font-size: 0.9em; }

        /* Tab Navigation (Subtopics, Courses, etc.) */
        .tab-navigation { 
            display: flex; 
            border-bottom: 2px solid var(--bg); 
            margin-bottom: 20px;
            overflow-x: auto; /* छोटे स्क्रीन के लिए स्क्रॉलिंग */
            padding: 10px 0;
            background: var(--card); /* स्टिकी टैब के लिए पृष्ठभूमि */
        }
        .tab-navigation a {
            padding: 10px 20px;
            text-decoration: none;
            color: var(--muted);
            font-weight: 600;
            border-bottom: 3px solid transparent;
            margin-right: 15px;
            white-space: nowrap;
            transition: color 0.2s, border-bottom-color 0.2s;
        }
        .tab-navigation a:hover, .tab-navigation a.active {
            color: var(--text);
            border-bottom-color: #60a5fa; /* Blue highlight */
        }

        /* Subtopic Grid Styling (जैसा इमेज में है) */
        .subtopic-grid, .course-grid, .lesson-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .subtopic-card, .grid-item {
            min-height: 150px;
            background: var(--bg);
            border-radius: 10px;
            padding: 20px;
            font-weight: 700;
            font-size: 1.1em;
            background-size: cover;
            background-position: center;
            position: relative;
            color: #fff;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .subtopic-card:hover, .grid-item:hover { transform: translateY(-3px); }

        /* Overlay for Subtopic Cards */
        .subtopic-card::after {
            content: attr(data-title); /* data-title से टेक्स्ट लें */
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4); /* Dark overlay */
            padding: 20px;
            display: flex;
            align-items: flex-end;
            font-size: 1.2em;
        }
        .lesson-grid .grid-item, .course-grid .grid-item {
             background: var(--card);
             color: var(--text);
             box-shadow: none;
             border: 1px solid var(--muted);
             min-height: auto;
        }
        .lesson-grid .grid-item img, .course-grid .grid-item img {
            width: 100%; height: auto; border-radius: 8px; margin-bottom: 10px;
        }
        .lesson-grid .grid-item p, .course-grid .grid-item p {
            font-size: 0.9em; color: var(--muted);
        }
        
        .section-title { margin-top: 40px; margin-bottom: 20px; border-bottom: 1px solid var(--bg); padding-bottom: 10px; }
        
    </style>
</head>
<body class="dark">
    <header class="topbar">
        </header>

    <main>
        <div class="card" style="width:100%; max-width:1255px; min-height:1000px; margin: 18px auto;">
            
            <div class="engineering-banner">
                <a href="study.php">← Computer Science</a>
                <h1>Explore Computer Engineering</h1>
            </div>

            <div class="page-content">
                <div class="tab-navigation">
                    <a href="#subtopics" class="active">Subtopics</a>
                    <a href="#courses">Courses</a>
                    <a href="#lessons">Related Lessons</a>
                    <a href="#overview">Overview</a>
                </div>
            
                <h2 id="subtopics" class="section-title">Computer Engineering Subtopics</h2>
                
                <div class="subtopic-grid">
                    <div class="subtopic-card" data-title="Computer Hardware" style="background-image: url('career_img/sub_hardware.jpg');"></div>
                    <div class="subtopic-card" data-title="Computer Architecture" style="background-image: url('career_img/sub_architecture.jpg');"></div>
                    <div class="subtopic-card" data-title="Computer Networks" style="background-image: url('career_img/sub_networks.jpg');"></div>
                    <div class="subtopic-card" data-title="Embedded Systems" style="background-image: url('career_img/sub_embedded.jpg');"></div>
                    <div class="subtopic-card" data-title="Data Communications" style="background-image: url('career_img/sub_data_comm.jpg');"></div>
                    <div class="subtopic-card" data-title="Digital Systems Design" style="background-image: url('career_img/sub_digital.jpg');"></div>
                </div>
                
                <h3 style="margin-top: 30px;">More Computer Engineering Subtopics</h3>
                <ul class="more-subtopics" style="columns: 2;">
                    <li>High-Performance Computing</li>
                    <li>Human-Computer Interaction (Computer Engineering)</li>
                    <li>Microprocessors</li>
                    <li>VLSI Design (Very-Large-Scale Integration)</li>
                </ul>

                <h2 id="courses" class="section-title">Popular Computer Engineering Courses</h2>

                <div class="course-grid">
                    <div class="grid-item">
                        <img src="career_img/course_project.jpg" alt="Project Management">
                        <strong>Project Management for Engineers</strong>
                    </div>
                    <div class="grid-item">
                        <img src="career_img/course_comm.jpg" alt="Communication Skills">
                        <strong>Communication Skills for Engineers</strong>
                    </div>
                    <div class="grid-item">
                        <img src="career_img/course_c.jpg" alt="Programming in C">
                        <strong>Computer Science 111: Programming in C</strong>
                    </div>
                    <div class="grid-item">
                        <img src="career_img/course_java.jpg" alt="Programming in Java">
                        <strong>Computer Science 115: Programming in Java</strong>
                    </div>
                </div>

                <h3 style="margin-top: 30px;">Explore our full library of computer engineering courses</h3>
                <ul class="more-subtopics" style="columns: 2;">
                    <li>Computer Science 306: Computer Architecture</li>
                    <li>Computer Science 307: Software Engineering</li>
                    <li>Soft Skills for Engineers</li>
                    <li>See All Computer Engineering Courses</li>
                </ul>
                
                <h2 id="lessons" class="section-title">Related Lessons</h2>

                <div class="lesson-grid">
                    <div class="grid-item">
                        <img src="career_img/lesson_pattern.jpg" alt="Pattern Recognition">
                        <strong>Pattern Recognition | Definition, Types & Examples</strong>
                        <p style="margin-top: 10px;">• How Computers Work: Lesson for Kids</p>
                        <p>• What is Quantum Computing? - Definition & Examples</p>
                    </div>
                    <div class="grid-item">
                        <img src="career_img/lesson_image_proc.jpg" alt="Image Processing">
                        <strong>Image Processing | Definition, Principles & Examples</strong>
                        <p style="margin-top: 10px;">• Principles of Computer-integrated Technologies</p>
                    </div>
                    <div class="grid-item">
                        <img src="career_img/lesson_kids.jpg" alt="Lesson for Kids">
                        <strong>Computer Engineering: Lesson for Kids</strong>
                        <p style="margin-top: 10px;">• Programming Articulated Robots: Design, Planning & Control</p>
                    </div>
                    <div class="grid-item">
                        <img src="career_img/lesson_quantum.jpg" alt="Quantum Computing">
                        <strong>Gate Types in Quantum Computing: Hadamard, T & CNOT</strong>
                        <p style="margin-top: 10px;">• Reverse Engineering APK Files in Android Apps</p>
                    </div>
                </div>

                <h2 id="overview" class="section-title">What is Computer Engineering?</h2>
                <div style="padding-bottom: 50px;">
                    <p>Sometimes shortened to 'comp eng,' computer engineering is the field where computer science and electronic engineering come together. Computer engineering includes the hardware and software of computers and other technical devices, such as printers, smartphones, and wireless routers. As technology continues to evolve, the field of computer engineering has constantly been expanding. Subfields within computer engineering include computer software engineering, computer hardware engineering, and computer systems engineering.</p>
                    <p>Components of computer engineering include operating systems, the architecture of computers, artificial intelligence, algorithms, networks, and so much more. Computer engineers and related professionals complete a variety of tasks, depending on their specific positions. Some of the responsibilities associated with computer engineering positions are designing applications for phones and computers, assessing security programs, identifying software problems, and implementing changes. A computer engineer may be involved in the creation, implementation, and revision of countless programs and processes for computers and related devices.</p>
                    <p>Just as technology is becoming integrated with more day-to-day business operations, the areas within computer engineering are deeply interconnected. Computer science as a whole is made up of interrelated parts, and computer engineering is no exception. For example, a computer engineering course that focuses on programming languages will be useful when an individual is learning how to create an operating system. There are multiple programming languages as well as several different operating systems, and the number of each is likely to increase as more time passes. Both aspiring and current computer engineers and other computer science professionals need to be familiar with computer engineering topics.</p>
                </div>
                
            </div> </div>
    </main>
    
    <div id="modalWrapper" style="position:fixed;inset:0;display:none;align-items:center;justify-content:center;background:rgba(0, 0, 0, 0.4);z-index:20000">
        <div id="modalContent" style="background:var(--card);padding:18px;border-radius:12px;min-width:320px;max-width:420px;box-shadow:0 10px 40px rgba(0, 0, 0, 0.1)"></div>
    </div>
    <script src="script.js"></script>
    <script>
        // Smooth scrolling for internal links (optional)
        document.querySelectorAll('.tab-navigation a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>