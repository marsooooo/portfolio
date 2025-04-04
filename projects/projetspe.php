<?php
$imageDir = 'projetspe/';
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

<div class="project_pop" id="gamejam-project">
    <div class="project_pop_img_block">
        <?php
        foreach ($imageFiles as $imageFile) {
            $imagePath = 'projects/projetspe/' . $imageFile;
            echo '<img src="' . $imagePath . '" alt="Project Image" class="project_pop_img" data-i18n="projetspe_project_image_alt">';
        }
        ?>
    </div>
    <div class="project_pop_desc_block">
        <h2 data-i18n="projetspe_project_title">Projet de spécialité</h2>
        <p data-i18n="projetspe_project_desc_1">Developed a restaurant website during my 2nd year at MyDigitalSchool</p>
        <p data-i18n="projetspe_project_desc_2">This fictional website allows the administrator to modify the menu, manage reservations, and set off days</p>
        <p data-i18n="projetspe_project_desc_3">I was responsible for the client-side interface and functionalities, as well as coordinating between frontend and backend development</p>
        <p><strong data-i18n="projetspe_project_duration_label">Duration:</strong> 2 weeks</p>
    </div>
</div>

<script>
applyTranslations();
</script>
