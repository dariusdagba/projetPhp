<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

            echo"Bienvenue vous êtes connecté";
            echo"<br>";
            echo "Le nom de l'utilisateur est : ".$_POST['nom'];
            echo"<br>";
            echo "Le prenom de l'utilisateur est : ".$_POST['password'];
            
    ?>
</body>
</html>