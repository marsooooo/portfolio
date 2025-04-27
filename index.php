<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <title data-i18n="title">Tison Marceau Portfolio</title>
    <link rel="icon" type="image/vnd.icon" href="favicon.ico">
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <video class="background-video" autoplay muted loop>
        <source src="content/wb_background.mp4" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <div class="custom-language-switcher">
      <div id="selected-language">
        <img src="content/flagEN.png" alt="English" />
        <span>English</span>
      </div>
      <div id="language-options" class="hidden">
        <div class="language-option" data-lang="en">
          <img src="content/flagEN.png" alt="English" />
          <span>English</span>
        </div>
        <div class="language-option" data-lang="fr">
          <img src="content/flagFR.png" alt="Français" />
          <span>Français</span>
        </div>
      </div>
    </div>
    <div class="border-container">
        <div class="main-info">
            <h1 data-i18n="name">Tison Marceau</h1>
            <h2 data-i18n="webdev">Web Developer</h2>
            <h5 data-i18n="design">Design Enthusiast</h5>
        </div>
        <nav class="navigation">
            <ul>
              <li><a href="#" class="nav-link" data-section="section1" data-i18n="about_me">About me</a></li>
              <li><a href="#" class="nav-link" data-section="section2" data-i18n="my_projects">My Projects</a></li>
              <li><a href="#" class="nav-link" data-section="section3" data-i18n="contact">Contact</a></li>
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
              <h1 data-i18n="welcome">Welcome to my portfolio !</h1>
              <p class="home_p" data-i18n="discover">Discover all my latest projects as well as some informations about me and my hobbies. Site is still under development and may lead to some issues on certain devices.</p>

            </div>
            <div id="section1" class="section about">
                <h1 data-i18n="about_me_header">About Me</h1>
                <div class="section_container">
                <p class="main_p" data-i18n="about_text">My name is Marceau, I'm a student web developer at MyDigitalSchool and currently looking for an apprenticeship for 2025.</p>
                <p class="thin_p" data-i18n="about_text2">I thrive on building functional systems that not only look great but also provide real value to users. With every project, I aim to blend aesthetics and usability seamlessly.</p>
                <p class="classic_p" data-i18n="about_text3">I always had a strong interest in IT and design, after almost 3 years in college as a computer science student I discovered web development and immediately fell for it and its endless possibilities.</p>
                <p class="thin_p" data-i18n="about_text4">Since then I’ve been studying different tools to become a great asset for my teams and work efficiently on my own.</p>
                </div>
                </div>
            <div id="section2" class="section project">
                <div>
                <h1 data-i18n="projects_header">My projects</h1>
                <div class="projects_container section_container">
                <?php include 'projects/projects.php'; ?>
                </div>
                </div>
            </div>
            <div id="section3" class="section contact">
                <h1 data-i18n="contact_header">Let's get in touch</h1>
                <div class="section_container">
                <form id="contact-form" method="POST" class="contact-form">
                    <input type="text" name="first-name" placeholder="First Name" required data-i18n="first_name">
                    <input type="text" name="last-name" placeholder="Last Name" required data-i18n="last_name">
                    <input type="email" name="email" placeholder="Mail" required data-i18n="email">
                    <textarea name="message" placeholder="Message" rows="5" required data-i18n="message"></textarea>
                    <div class="sendConfirm">
                    <div id="form-message" class="form-message"></div>
                    <div style="display: flex; flex-direction: row; align-items: center; gap: 15px;">
                    <button type="submit" class="submit-btn" data-i18n="send">Send</button>
                    <div class="directLinks">
                    <a href="https://github.com/marsooooo" class="logoLink"><img src="assets/git_white.png" alt="My Github" data-i18n="github"></a>
                    <a href="https://www.linkedin.com/in/marceau-tison-0bbb612a8/" class="logoLink"><img src="assets/linkedin_white.webp" alt="My Linkedin" data-i18n="linkedin"></a>
                    </div>
                    </div>
                    </div>
                </form>
                </div>
                
            </div>
        </div>
        
    
    <script src="script/script.js"></script>
    <script src="script/popin.js"></script>
    <script src="script/mailConfirm.js"></script>
    <script src="script/lang.js"></script>


</body>
</html>
