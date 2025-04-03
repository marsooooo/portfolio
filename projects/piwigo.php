<?php
$imageDir = 'piwigo/';
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
            $imagePath = 'projects/piwigo/' . $imageFile;
            echo '<img src="' . $imagePath . '" alt="Project Image" class="project_pop_img">';
        }
        ?>
    </div>
    <div class="project_pop_desc_block">
        <h2>Piwigo Internship</h2>
        <p>6-month remote full-stack development internship focused on enhancing the Piwigo platform.</p>
        <p>Piwigo is an open-source photo management software designed for organizing, sharing, and hosting image galleries. It is ideal for individuals, photographers, and organizations, offering features like batch processing, user management, tagging, and plugin support. Piwigo can be self-hosted or used via Piwigo.com for cloud hosting. Its flexibility, customization options, and strong community support make it a popular choice for managing large photo libraries.</p>
        <p><strong>Duration :</strong> 6 months</p>
        <p>During my internship, I was in charge of multiple tasks including the restructuration of complex existing features, which challenged my knowledge in every aspect of web development.</p>
        <a href="https://github.com/piwigo" class="logoLink"><img src="assets/git_white.png" alt="Piwigo Github"></a>
    </div>
</div>
