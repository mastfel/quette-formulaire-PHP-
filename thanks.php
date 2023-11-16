<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname= $_POST["firstname"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    echo "<div class='container bg-light border rounded p-5'>";
    echo "<h1 class='text-center'>Merci $firstname $name de nous avoir contacté à propos de \"$subject\".</h1>";
    echo "<p class='text-center'>Un de nos conseillers vous contactera soit à l'adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande :</p>";
    echo "<p class='text-center'>$message</p>";
    echo "</div>";
} else {
    echo "<p>Une erreur s'est produite. Veuillez réessayer.</p>";
}
?>

</body>
</html>

