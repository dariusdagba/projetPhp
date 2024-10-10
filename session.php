<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" name="connexion" method="POST">
        Entrez votre nom : <input type="text" name="nom"><br>
        Entrez votre passwd : <input type="text" name="passwd"><br>
        <input type="submit" name="valider" value="ok">
    </form>

    <?php
    session_start();

    if(($_POST['nom']=="Admin")&&($_POST['passwd']=="Admin"))
    {
        $_SESSION['nom']=$_POST['nom'];
        $_SESSION['passwd']=$_POST['passwd'];

        header('Location:info.php');
    }
    else
    {
        echo"mot de passe ou login incorrect";
    }
   
    ?>
</body>
</html>