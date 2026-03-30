<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css'])
        <title>About</title>
</head>
<body>
@include('header')
<section id="about">
    <div class="hero_container">
        <h2> WHO I AM</h2>
        <h1>About Me</h1>
    </div>
    <main>
        <div class="page_content">
            <div class="about_grid">
                <p class="section_label">MY BACKGROUND</p>
                <h2 class="section_title">A Little About Me</h2>
                <p>
                    "I am Joshua Rosario, a 3rd year BSIT student with a passion 
                    for Full-Stack Development. I am currently mastering Java,                       
                    C++, and the Web Stack (HTML/CSS/JS). By combining the power 
                    of MySQL with frameworks like Laravel and Flutter, 
                    I aim to build high-performance applications that work 
                    seamlessly across web and mobile."
                </p>
                <div class="content_block">
                    <p class="section_label">WHAT I CAN DO</p>
                    <h2 class="section_title">Skills</h2>
                    <div class="skills_grid">                            
                        <div class="skills_item">
                            <div class="skill_name">Web Development</div>
                            <div class="skill_desc">
                                Building responsive and functional websites using <strong>HTML, CSS,
                                and JavaScript</strong>.Developing robust back-end systems with the
                                <strong>Laravel</strong> framework.
                            </div>
                        </div>
                        <div class="skills_item">
                            <div class="skill_name">Mobile Development</div>
                            <div class="skill_desc">
                                Creating cross-platform mobile applications for                                
                                Android and iOS using <strong> Lua, Java, Flutter and Dart.</strong>
                            </div>
                        </div>
                        <div class="skills_item">
                            <div class="skill_name">Mobile Development</div>
                            <div class="skill_desc">
                                Creating cross-platform mobile applications for
                                Android and iOS using <strong> Java, Flutter and Dart.</strong> 
                            </div>
                        </div> 
                    </div>
                </div>

                <div class="content_block">
                    <p class="section_label">MY JOURNEY</p>
                    <h2 class="section_title">Background</h2>
                    <div class="timeline">
                        <div class="timeline_item">
                            <div class="timeline_year">2023 - 2024</div>
                            <div class="timeline_title">1st year BSIT</div>
                            <div class="timeline_desc">
                                My first year of engagement with Information Technology.
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_year">2024- 2025</div>
                            <div class="timeline_title">2nd year BSIT</div>
                            <div class="timeline_desc">
                                My second year of engagement with Information Technology.
                            </div>
                        </div>
                        <div class="timeline_item">
                            <div class="timeline_year">2025 - now</div>
                            <div class="timeline_title">3rd year BSIT</div>
                            <div class="timeline_desc">
                                My third year of engagement with Information Technology.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</section>
</body>
</html>