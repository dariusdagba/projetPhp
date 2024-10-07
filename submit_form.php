<?php
    if(isset($_GETT['nom'])){
        echo "Le nom de l'utilisateur est : ".$_GET['nom'];
        echo"<br>";
        echo "Le prenom de l'utilisateur est : ".$_GET['prenom'];
        echo"<br>";

    }
    else
    {
        echo "Aucune donnée recue ";
    }
    

?>