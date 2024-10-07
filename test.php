<?php
    try
    {
        $connect=mysqli_connect('localhost','root','','commerce1');
        echo "connexion réussie <br>";
        $requete=mysqli_query($connect,'SELECT * FROM etudiant');
        if(mysqli_num_rows($requete)>0){
            while($row=mysqli_fetch_assoc($requete))
            {
                echo $row["id"]. " de prenom : ". $row["prenom"]. " et de nom ". $row["nom"]; echo "<br>";
            }
        }
    }
    catch(Exception $e)
    {
        echo "il n'y a une erreur dans le code de ma connexion";
    }

   
?>