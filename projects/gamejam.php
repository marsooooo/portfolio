<?php
$imageDir = 'gamejam/';
if (is_dir($imageDir)) {
    $images = scandir($imageDir);
    
    $imageFiles = array_filter($images, function($file) {
        return in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'png', 'PNG', 'jpeg']);
    });

    usort($imageFiles, callback: function($a, $b) {
        if ($a === 'main.PNG') {
            return -1;
        }
        if ($b === 'main.PNG') {
            return 1;
        }
        return strcmp($a, $b);
    });
} else {
    echo "Le dossier $imageDir n'existe pas ou n'est pas accessible.";
    $imageFiles = [];
}
?>

<div class="project_pop" id="gamejam-project">
    <div class="project_pop_img_block">
        <?php
        foreach ($imageFiles as $imageFile) {
            $imagePath = 'projects/gamejam/' . $imageFile;
            echo '<img src="' . $imagePath . '" alt="Project Image" class="project_pop_img" data-i18n="ccdm_project_image_alt">';
        }
        ?>
    </div>
    <div class="project_pop_desc_block">
        <h2 data-i18n="ccdm_project_title">Cat coins du monde</h2>
        <p data-i18n="ccdm_project_desc_1">Developed a game during the MyDigitalSchool 2025 Gamejam</p>
        <p data-i18n="ccdm_project_desc_2">This game made with my classmates won the awards for the jury's favorite and student's favorite</p>
        <p data-i18n="ccdm_project_desc_3">I was in charge of a part of the game design...</p>
        <p><strong data-i18n="ccdm_project_duration_label">Duration:</strong> 1 week</p>
        <iframe width="552" height="167" frameborder="0" scrolling="no" src="https://itch.io/embed/3308227" ><a href="https://inesaoufi.itch.io/cat-coins-du-monde" data-i18n="ccdm_project_link_text">Cat Coins Du Monde</a></iframe>   
    </div>
</div>

<script>
applyTranslations();
</script>
