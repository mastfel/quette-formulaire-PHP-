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

   // Vérifie si les champs requis ne sont pas vides
   if (!empty($firstname) && !empty($name) && !empty($email) && !empty($telephone) && !empty($subject) && !empty($message)) {
    echo "<div class='container bg-light border rounded p-5'>";
    echo "<h1 class='text-center'>Merci $firstname $name de nous avoir contacté à propos de \"$subject\".</h1>";
    echo "<p class='text-center'>Un de nos conseillers vous contactera soit à l'adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande :</p>";
    echo "<p class='text-center'>$message</p>";
    echo "</div>";
  
} else {
    echo "<p class='text-center'>Une erreur s'est produite. Veuillez réessayer.</p>";
    
}
} 

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //  validation des données soumises via le formulaire 
    if (!isset($_POST['firstname']) || trim($_POST['firstname']) === '') {
        $errors[] = "Le prénom est obligatoire";
    }

    if (!isset($_POST['name']) || trim($_POST['name']) === '') {
        $errors[] = "Le nom est obligatoire";
    }

    if (!isset($_POST['telephone']) || trim($_POST['telephone']) === '') {
        $errors[] = "Le téléphone est obligatoire";
    }

    if (!isset($_POST['email']) || trim($_POST['email']) === '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'e-mail est obligatoire et doit être une adresse e-mail valide";
    }

    if (!isset($_POST['subject']) || trim($_POST['subject']) === '') {
        $errors[] = "Le sujet est obligatoire";
    }

    if (!isset($_POST['message']) || trim($_POST['message']) === '') {
        $errors[] = "Le message est obligatoire";
    }

   
}




if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($errors)) {
    echo '<div class="alert alert-danger">';
    echo '<ul>';
    foreach ($errors as $error) {
        echo '<li>' . $error . '</li>';
    }
    echo '</ul>';
    echo '</div>';
}
?>





</body>
</html>

