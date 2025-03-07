<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    $file = 'messages.csv';
    $isNewFile = !file_exists($file);

    $fp = fopen($file, 'a');

    if ($isNewFile) {
        fputcsv($fp, ['First Name', 'Last Name', 'Email', 'Message', 'Date']);
    }

    fputcsv($fp, [$firstName, $lastName, $email, $message, date('Y-m-d H:i:s')]);
    fclose($fp);

    echo "Message envoyé avec succès !";
}
?>
