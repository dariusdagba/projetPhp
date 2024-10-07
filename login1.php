<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
            <h1>Formulaire d'inscription</h1>
            <label for="Login">Last Name</label>
            <input type="text" name="login" placeholder="Login"><br><br>
            <label for="prenom">First Name</label>
            <input type="password" name="password" placeholder="Password"><br><br>
            <button type="submit">Envoyer</button>
    </form>

    <?php
            
            if(isset($_GET['login'])){
                echo "Le nom de l'utilisateur est : ".$_GET['login'];
                echo"<br>";
                echo "Le prenom de l'utilisateur est : ".$_GET['password'];
                echo"<br>";
                
                insertBDD($_GET['login'],$_GET['password']);
                

                
        
            }
            else
            {
                echo "Aucune donnée recue ";
            }
            
            function insertBDD($login,$passwd){
                try
                {
                    $connect=mysqli_connect('localhost','root','','users');
                    echo "connexion réussie <br>";
                    mysqli_query($connect,"INSERT INTO users(login,passwd) values('$login','$passwd')");

                }
                catch(Exception $e)
                {
                    echo "il n'y a une erreur dans le code de ma connexion";
                }
            }  

?>
</body>
</html>