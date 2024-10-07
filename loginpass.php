<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="GET">
       <h1>Formulaire de Connexion</h1>
       <label for="Login">Last Name</label>
       <input type="text" name="login" placeholder="Login"><br><br>
       <label for="prenom">First Name</label>
       <input type="password" name="password" placeholder="Password"><br><br>
       <button type="submit">Login</button>


       <?php
            
            if(isset($_GET['login']))
            {
                echo "Le nom de l'utilisateur est : ".$_GET['login'];
                echo"<br>";
                echo "Le prenom de l'utilisateur est : ".$_GET['password'];
                echo"<br>";
                loginBDD($_GET['login'],$_GET['password']);

                
        
            }
            else
            {
                echo "Aucune donnée recue ";
            }
            
            function loginBDD($log,$passwd){
                try
                {
                    $connect=mysqli_connect('localhost','root','','users');
                    echo "connexion réussie <br>";
                    $req=mysqli_query($connect,"SELECT * FROM users WHERE login='$log' AND passwd='$passwd'");
                    if(mysqli_num_rows($req)>0)
                    {
                      echo "vous êtes connecté";
                    }
                    else
                    {
                        echo "login ou mot de passe erroné";
                        header('Location:login1.php');
                        exit();
                    }

                }
                catch(Exception $e)
                {
                    echo "login  ou mot de passe incorrect !";
                }
            }

?>

</form>
</body>
</html>