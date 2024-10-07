<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="welcome.php" method="POST">
        <h1>Formulaire de Connexion</h1>
       <label for="nom">Last Name</label>
       <input type="text" name="nom" placeholder="Name"><br><br>
       <label for="password">Password</label>
       <input type="password" name="password" placeholder="Password"><br><br>
       <button type="submit">Login</button>
    </form>
    <?php
        if(isset($_POST['nom']))
        {
            echo "Le nom de l'utilisateur est : ".$_POST['nom'];
            echo"<br>";
            echo "Le prenom de l'utilisateur est : ".$_POST['password'];
            echo"<br>";
            loginBD($_POST['nom'],$_POST['password']);

            
    
        }
        else
        {
            echo "Aucune donnée recue ";
        }
        
        function loginBD($nom,$passwd){
            try
            {
                $connect=mysqli_connect('localhost','root','','COMMERCE2');
                echo "connexion réussie <br>";
                $req=mysqli_query($connect,"SELECT * FROM CLIENT WHERE nom='$nom' AND motdepasse='$passwd'");
                if(mysqli_num_rows($req)>0)
                {
                    echo "vous êtes connecté";
                    header('Location:welcome.php');
                    exit();
                }
                else
                {
                    echo "login ou mot de passe erroné";
                    header('Location:register.php');
                    exit();
                }

            }
            catch(Exception $e)
            {
                echo "login  ou mot de passe incorrect !";
            }
        }
       
    ?>
</body>
</html>