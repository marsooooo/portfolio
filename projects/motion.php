<?php
$imageDir = 'motion/';

if (is_dir($imageDir)) {
    $images = scandir($imageDir);
    
    $imageFiles = array_filter($images, function($file) use ($imageDir) {
        return in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'png', 'jpeg']);
    });
} else {
    echo "Le dossier $imageDir n'existe pas ou n'est pas accessible.";
    $imageFiles = []; 
}
?>

<div style="display: flex; align-items: flex-start; height: 100%;">
    <img src="content/projects/motion/main.png" alt="Stinger Transition" style="width: 40%; height: auto; margin-right: 20px; border-radius: 8px;">
    <div style="flex: 1; overflow-y: auto;">
        <h2>Motion Design</h2>
        <p>Short animations made on Adobe After Effects. Mostly used in content creation to create a smooth transition between two scenes. This is something I like to do on my free time, I learned animation and graphic design at a young age and even though I am more into programming now i still like to add some in my web projects</p>
    </div>
</div>
