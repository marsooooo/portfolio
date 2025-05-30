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
        <a href="https://inesaoufi.itch.io/cat-coins-du-monde" class="logoLink" data-i18n="gamejam_access_link">Cat coins du monde on Itch.io</a>   
    </div>
</div>

<script>
applyTranslations();
</script>
