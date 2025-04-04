<?php
$imageDir = 'riot_api/';
if (is_dir($imageDir)) {
    $images = scandir($imageDir);
    
    $imageFiles = array_filter($images, function($file) {
        return in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'png', 'PNG', 'jpeg']);
    });

    usort($imageFiles, callback: function($a, $b) {
        if ($a === 'main.png') {
            return -1;
        }
        if ($b === 'main.png') {
            return 1;
        }
        return strcmp($a, $b);
    });
} else {
    echo "Le dossier $imageDir n'existe pas ou n'est pas accessible.";
    $imageFiles = [];
}
?>
<div class="project_pop">
    <div class="project_pop_img_block">
        <?php
        foreach ($imageFiles as $imageFile) {
            $imagePath = 'projects/riot_api/' . $imageFile;
            echo '<img src="' . $imagePath . '" alt="Project Image" class="project_pop_img">';
        }
        ?>
    </div>
    <div class="project_pop_desc_block">
        <h2 data-i18n="riot_project_title">Riot Api</h2>
        <p data-i18n="riot_project_description">This project is my subject of internship at HUGE Esport, this association born in 2023 manages two esports rosters, a League of Legends team playing in french 3rd division considered on of the best in its category, and a VALORANT team playing in the inclusive european league.</p>
        <p data-i18n="riot_project_solution">Since these rosters need a competent coaching staff i offered them a solution that would help them monitor their players stats inside of the game</p>
        <p data-i18n="riot_project_creation">I created an app made mostly out of react for the UI and Node.js, Express, MySQL and the Riot Games API on the Server Side.</p>
        <p><strong data-i18n="riot_project_duration_label">Duration :</strong> 2 months Internship (Ongoing)</p>
        <a href="https://marceau-tison.com/riotapp/" class="logoLink" data-i18n="riot_project_access_link">Access the app</a>
    </div>
</div>

<script>
applyTranslations();
</script>
