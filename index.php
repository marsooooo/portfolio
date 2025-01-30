<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title>Tison Marceau Portfolio</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <video class="background-video" autoplay muted loop>
        <source src="content/wb_background.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <div class="language-switcher">
      <img id="lang-en" src="content/flagEN.png" alt="English" title="English" class="flag" />
      <img id="lang-fr" src="content/flagFR.png" alt="Français" title="Français" class="flag" />
    </div>
    <div class="border-container">
        <div class="main-info">
            <h1>Tison Marceau</h1>
            <h2>Web Developer</h2>
            <h5>& Design Enthusiast</h5>
        </div>
        <nav class="navigation">
            <ul>
              <li><a href="#" class="nav-link" data-section="section1">About me</a></li>
              <li><a href="#" class="nav-link" data-section="section2">My Projects</a></li>
              <li><a href="#" class="nav-link" data-section="section3">Contact</a></li>
            </ul>
          </nav>
          <div class="home">
            <a href="#" class="nav-link" data-section="home">
            <svg width="54" height="57" viewBox="0 0 54 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.75 22.5V56.25H19.5V41.25C19.5 37.1079 22.8579 33.75 27 33.75C31.1421 33.75 34.5 37.1079 34.5 41.25V56.25H53.25V22.5L27 0L0.75 22.5Z" fill="#D6D6D6"/>
                </svg>
            </a>
          </div>
        </div>
          <div id="sections-container">
            <div id="home" class="section homeblock">
              <h1>Welcome to my portfolio !</h1>
              <p class="home_p">Discover all my latest projects as well as some informations about me and my hobbies</p>

            </div>
            <div id="section1" class="section about">
                <h1>About Me</h1>
                <div>
                <p class="main_p">My name is Marceau, I'm a student web developer at MyDigitalSchool and currently looking for an apprenticeship for 2025.</p>
                <p class="thin_p">I thrive on building functional systems that not only look great but also provide real value to users. With every project, I aim to blend aesthetics and usability seamlessly.</p>
                <p class="classic_p">I always had a strong interest in IT and design, after almost 3 years in college as a computer science student I discovered web development and immediately fell for it and its endless possibilities.</p>
                <p class="thin_p">Since then I’ve been studying different tools to become a great asset for my teams and work efficiently on my own.</p>
                </div>
                </div>
            <div id="section2" class="section project">
                <div>
                <h1>My projects</h1>
                <div class="projects_container">
                <div class="project_block" id="stinger">
                    <img src="content/projects/stinger/main.png" alt="main">
                    <div class="project_info">
                    <h2>Stinger Transition</h2>
                    <p>After Effects</p>
                    <p class="project_subinfo">
                        4 hours
                    </p>
                    </div>
                </div>
                <div class="project_block" id="piwigo">
                    <img src="content/projects/piwigo/main.png" alt="main">
                    <div class="project_info">
                    <h2>Piwigo Internship</h2>
                    <p>Remote Fullstack</p>
                    <p class="project_subinfo">
                        6 months
                    </p>
                    </div>
                </div>
                <div class="project_block" id="riot_api">
                    <img src="content/projects/riot_api/main.png" alt="main">
                    <div class="project_info">
                    <h2>Riot Games API app</h2>
                    <p>React & Tailwind</p>
                    <p class="project_subinfo">
                        Ongoing
                    </p>
                    </div>
                </div>
                </div>
                </div>
            </div>
            <div id="section3" class="section contact">
                <h1>Let's get in touch</h1>
                <div>
                <form action="#" method="POST" class="contact-form">
                    <input type="text" name="first-name" placeholder="First Name" required>
                    <input type="text" name="last-name" placeholder="Last Name" required>
                    <input type="email" name="email" placeholder="Mail" required>
                    <textarea name="message" placeholder="Message" rows="5" required></textarea>
                    <button type="submit" class="submit-btn">Send</button>
                </div>
                <div class="directLinks">
                    <a href="https://github.com/marsooooo" class="logoLink"><img src="assets/git_white.png" alt="My Github"></a>
                    <a href="https://www.linkedin.com/in/marceau-tison-0bbb612a8/" class="logoLink"><img src="assets/linkedin_white.webp" alt="My Linkedin"></a>
                </div>
            </div>
        </div>
        
    
    <script src="script/script.js"></script>
    <script src="script/popin.js"></script>

</body>
</html>