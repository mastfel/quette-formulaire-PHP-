<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>Contact</title>
</head>
<body>
<form action="thanks.php" method="post" class="container bg-light border rounded p-5">
        <h1 class="text-center">Contact</h1>

        <p class="row">
            <label for="name" class="form-label">Nom : </label>
            <input type="text" name="name" id="name"  class="form-control">
        </p>

        <p class="row">
            <label for="firstname" class="form-label">Prénom : </label>
            <input type="text" name="firstname" id="firstname"  class="form-control">
        </p>

        <p class="row">
            <label for="email" class="form-label">E-mail : </label>
            <input type="email" name="email" id="email"  class="form-control">
        </p>
        <p class="row">
            <label for="telephone" class="form-label">Téléphone : </label>
            <input type="tel" name="telephone" id="telephone"  class="form-control">
        </p>
        <p class="row">
            <label for="subject" class="form-label">Sujet : </label>
           <select id="subject" name="subject" >
            <option value=""></option>
            <option value="Question générale">Question générale</option>
            <option value="Support technique">Support technique</option>
            <option value="Demande commerciale">Demande commerciale</option>
            <option value="autre">Autre</option>
             </select>
        
        </p>

        <p class="row">
            <label for="message" class="form-label"> Votre message : </label>
            <textarea name="message" id="message"   class="form-control" rows="15" cols="80" ></textarea>
        </p>
        <p class="text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </p>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>