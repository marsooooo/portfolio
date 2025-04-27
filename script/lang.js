document.addEventListener("DOMContentLoaded", function() {

    const selectedLanguageDiv = document.getElementById('selected-language');
    const languageOptionsDiv = document.getElementById('language-options');
    const languageOptions = document.querySelectorAll('.language-option');

    function setLanguage(language) {
        localStorage.setItem('language', language);
        applyTranslations();
        updateSelectedLanguage(language);
    }

    function updateSelectedLanguage(language) {
        const selected = document.getElementById('selected-language');
        if (language === 'fr') {
            selected.innerHTML = `
                <img src="content/flagFR.png" alt="Français" />
                <span>Français</span>
            `;
        } else {
            selected.innerHTML = `
                <img src="content/flagEN.png" alt="English" />
                <span>English</span>
            `;
        }
    }

    // Clique pour ouvrir/fermer les options
    selectedLanguageDiv.addEventListener('click', function() {
        languageOptionsDiv.classList.toggle('hidden');
    });

    // Clique sur une langue
    languageOptions.forEach(option => {
        option.addEventListener('click', function() {
            const selectedLang = option.getAttribute('data-lang');
            setLanguage(selectedLang);
            languageOptionsDiv.classList.add('hidden'); // refermer après choix
        });
    });

    // Initialisation au chargement
    const currentLanguage = localStorage.getItem('language') || 'en';
    updateSelectedLanguage(currentLanguage);
    applyTranslations();

    // Si tu veux fermer le menu si clic en dehors
    document.addEventListener('click', function(e) {
        if (!document.querySelector('.custom-language-switcher').contains(e.target)) {
            languageOptionsDiv.classList.add('hidden');
        }
    });

});

// Ta fonction existante
function applyTranslations() {
    const currentLanguage = localStorage.getItem('language') || 'en';

    const elements = document.querySelectorAll('[data-i18n]');

    elements.forEach((element) => {
        const key = element.getAttribute('data-i18n');

        if (translations[currentLanguage] && translations[currentLanguage][key]) {
            element.innerHTML = translations[currentLanguage][key];
        }

        if (element.hasAttribute('title')) {
            element.setAttribute('title', translations[currentLanguage][key] || element.getAttribute('title'));
        }
        if (element.hasAttribute('alt')) {
            element.setAttribute('alt', translations[currentLanguage][key] || element.getAttribute('alt'));
        }
    });
}


const translations = {
    en: {
        title: "Tison Marceau Portfolio",
        welcome: "Welcome to my portfolio !",
        discover: "Discover all my latest projects as well as some information about me and my hobbies",
        about_me_header: "About Me",
        about_text: "My name is Marceau, I'm a student web developer at MyDigitalSchool and currently looking for an apprenticeship for 2025.",
        about_text2: "I thrive on building functional systems that not only look great but also provide real value to users. With every project, I aim to blend aesthetics and usability seamlessly.",
        about_text3: "I always had a strong interest in IT and design, after almost 3 years in college as a computer science student I discovered web development and immediately fell for it and its endless possibilities.",
        about_text4: "Since then I’ve been studying different tools to become a great asset for my teams and work efficiently on my own.",
        projects_header: "My projects",
        contact_header: "Let's get in touch",
        first_name: "First Name",
        last_name: "Last Name",
        email: "Mail",
        message: "Message",
        send: "Send",
        github: "My Github",
        linkedin: "My Linkedin",
        webdev: "Web Developer",
        design: "Design Enthusiast",
        about_me: "About Me",
        my_projects: "My Projects",
        ccdm_project_image_alt: "Project Image",
        ccdm_project_title: "Cat coins du monde",
        ccdm_project_desc_1: "Developed a game during the MyDigitalSchool 2025 Gamejam",
        ccdm_project_desc_2: "This game made with my classmates won the awards for the jury's favorite and student's favorite",
        ccdm_project_desc_3: "I was in charge of a part of the game design as well as the full integration of the game",
        ccdm_project_desc_4: "We had to use Godot 3 for this project, it was a challenge because I never used this language before but in the end we ended up creating something we could all be proud of",
        ccdm_project_duration_label: "Duration :",
        ccdm_project_duration: "1 week",
        ccdm_project_link_text: "Cat Coins Du Monde",
        pwg_internship_title: "Piwigo Internship",
        pwg_internship_duration: "6-month remote full-stack development internship focused on enhancing the Piwigo platform.",
        pwg_internship_description: "Piwigo is an open-source photo management software designed for organizing, sharing, and hosting image galleries. It is ideal for individuals, photographers, and organizations, offering features like batch processing, user management, tagging, and plugin support. Piwigo can be self-hosted or used via Piwigo.com for cloud hosting. Its flexibility, customization options, and strong community support make it a popular choice for managing large photo libraries.",
        pwg_internship_duration_label: "Duration",
        pwg_internship_task_description: "During my internship, I was in charge of multiple tasks including the restructuration of complex existing features, which challenged my knowledge in every aspect of web development.",
        riot_project_title: "Riot Api",
        riot_project_description: "This project is my subject of internship at HUGE Esport, this association born in 2023 manages two esports rosters, a League of Legends team playing in french 3rd division considered one of the best in its category, and a VALORANT team playing in the inclusive european league.",
        riot_project_solution: "Since these rosters need a competent coaching staff I offered them a solution that would help them monitor their players' stats inside the game.",
        riot_project_creation: "I created an app made mostly out of React for the UI and Node.js, Express, MySQL, and the Riot Games API on the Server Side.",
        riot_project_duration_label: "Duration",
        riot_project_access_link: "Access the app",
        pwg_title: "Piwigo Internship",
        pwg_description: "PHP",
        riot_title: "Riot Games API app",
        riot_description: "React & Node.JS",
        gamejam_title: "Cat coins du monde",
        gamejam_description: "Godot 3",
        gamejam_access_link: "Cat coins du monde on Itch.io",
        motion_title: "Motion Design",
        motion_description: "After Effects",
        projetspe_project_title: "Specialization Project",
        projetspe_project_desc_1: "Developed a restaurant website during my 2nd year at MyDigitalSchool",
        projetspe_project_desc_2: "This fictional website allows the administrator to modify the menu, manage reservations, and set off days",
        projetspe_project_desc_3: "I was responsible for the client-side interface and functionalities, as well as coordinating between frontend and backend development",
        projetspe_project_duration_label: "Duration:",
        projetspe_project_image_alt: "Project Image",
        projetspe_title: "Specialization Project",
        projetspe_description: "PHP & JS"
    },
    fr: {
        title: "Portfolio de Tison Marceau",
        welcome: "Bienvenue sur mon portfolio !",
        discover: "Découvrez tous mes derniers projets ainsi que des informations sur moi et mes hobbies.",
        about_me_header: "À propos de moi",
        about_text: "Je m'appelle Marceau, je suis étudiant en développement web à MyDigitalSchool et je suis actuellement à la recherche d'un apprentissage pour 2025.",
        about_text2: "J'aime créer des systèmes fonctionnels qui non seulement sont beaux, mais aussi apportent une véritable valeur aux utilisateurs. À chaque projet, je cherche à allier esthétique et utilité.",
        about_text3: "J'ai toujours eu un fort intérêt pour l'informatique et le design, après presque 3 ans à l'université en informatique, j'ai découvert le développement web et je suis immédiatement tombé sous le charme de ses possibilités infinies.",
        about_text4: "Depuis, j'étudie différents outils pour devenir un atout majeur pour mes équipes et travailler efficacement seul.",
        projects_header: "Mes projets",
        contact_header: "Entrons en contact",
        first_name: "Prénom",
        last_name: "Nom",
        email: "E-mail",
        message: "Message",
        send: "Envoyer",
        github: "Mon Github",
        linkedin: "Mon Linkedin",
        webdev: "Développeur Web",
        design: "Passionné de Design",
        about_me: "À Propos",
        my_projects: "Mes Projets",
        ccdm_project_image_alt: "Image du projet",
        ccdm_project_title: "Cat coins du monde",
        ccdm_project_desc_1: "Développement d'un jeu pendant la Gamejam MyDigitalSchool 2025",
        ccdm_project_desc_2: "Ce jeu réalisé avec mes camarades a remporté les prix du préféré du jury et du préféré des étudiants",
        ccdm_project_desc_3: "J'étais responsable d'une partie du game design ainsi que de l'intégration complète du jeu",
        ccdm_project_desc_4: "Nous avons dû utiliser Godot 3 pour ce projet, ce fut un défi car je n'avais jamais utilisé ce langage auparavant, mais au final, nous avons créé quelque chose dont nous pouvons tous être fiers",
        ccdm_project_duration_label: "Durée :",
        ccdm_project_duration: "1 semaine",
        ccdm_project_link_text: "Cat Coins Du Monde",
        pwg_internship_title: "Stage Piwigo",
        pwg_internship_duration: "Stage de développement full-stack à distance de 6 mois axé sur l'amélioration de la plateforme Piwigo.",
        pwg_internship_description: "Piwigo est un logiciel open-source de gestion de photos conçu pour organiser, partager et héberger des galeries d'images. Il est idéal pour les particuliers, photographes et organisations, offrant des fonctionnalités telles que le traitement par lot, la gestion des utilisateurs, l'ajout de tags et le support de plugins. Piwigo peut être auto-hébergé ou utilisé via Piwigo.com pour un hébergement cloud. Sa flexibilité, ses options de personnalisation et son soutien communautaire en font un choix populaire pour gérer de grandes bibliothèques de photos.",
        pwg_internship_duration_label: "Durée",
        pwg_internship_task_description: "Durant mon stage, j'ai été responsable de plusieurs tâches, y compris la restructuration de fonctionnalités complexes existantes, ce qui a mis au défi mes compétences dans tous les aspects du développement web.",
        riot_project_title: "Riot Api",
        riot_project_description: "Ce projet est mon sujet de stage chez HUGE Esport, une association née en 2023 qui gère deux équipes esports, une équipe League of Legends évoluant en 3e division française, considérée comme l'une des meilleures de sa catégorie, et une équipe VALORANT jouant dans la ligue européenne inclusive.",
        riot_project_solution: "Comme ces équipes avaient besoin d'un staff de coaching compétent, je leur ai proposé une solution qui leur permettrait de suivre les statistiques de leurs joueurs à l'intérieur du jeu.",
        riot_project_creation: "J'ai créé une application principalement réalisée avec React pour l'interface utilisateur, Node.js, Express, MySQL et l'API Riot Games pour le côté serveur.",
        riot_project_duration_label: "Durée",
        riot_project_access_link: "Accéder à l'application",
        pwg_title: "Stage Piwigo",
        pwg_description: "PHP",
        riot_title: "Application Riot Games API",
        riot_description: "React & Node.JS",
        gamejam_title: "Cat coins du monde",
        gamejam_description: "Godot 3",
        gamejam_access_link: "Cat coins du monde sur Itch.io",
        motion_title: "Motion Design",
        motion_description: "After Effects",
        projetspe_project_title: "Projet de spécialité",
        projetspe_project_desc_1: "Développement d'un site web de restauration durant ma 2e année à MyDigitalSchool",
        projetspe_project_desc_2: "Ce site fictif permet à l'administrateur de modifier le menu, gérer les réservations et définir les jours de fermeture",
        projetspe_project_desc_3: "J'étais responsable de l'interface et des fonctionnalités côté client, ainsi que de la coordination entre le développement frontend et backend",
        projetspe_project_duration_label: "Durée :",
        projetspe_project_image_alt: "Image du projet",
        projetspe_title: "Projet de Spécialité",
        projetspe_description: "PHP & JS"
    }
};