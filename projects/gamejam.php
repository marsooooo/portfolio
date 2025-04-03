<?php
$imageDir = 'gamejam/';
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
            $imagePath = 'projects/gamejam/' . $imageFile;
            echo '<img src="' . $imagePath . '" alt="Project Image" class="project_pop_img">';
        }
        ?>
    </div>
    <div class="project_pop_desc_block">
        <h2>Cat coins du monde</h2>
        <p>Developed a game during the MyDigitalSchool 2025 Gamejam</p>
        <p>This game made with my classmates won the awards for the jury's favorite and student's favorite</p>
        <p>I was in charge of a part of the game design as well as the full integration of the game</p>
        <p>We had to use Godot 3 for this project, it was a challenge because I never used this langage before but in the end we ended up creating something we could all be proud of</p>   
        <p><strong>Duration :</strong> 1 week</p>
        <iframe width="552" height="167" frameborder="0" scrolling="no" src="https://itch.io/embed/3308227" ><a href="https://inesaoufi.itch.io/cat-coins-du-monde">Cat Coins Du Monde</a></iframe>    </div>
</div>
