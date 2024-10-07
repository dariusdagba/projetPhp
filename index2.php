<?php
    function Capitale($pays){
        switch($pays){
            case "France": 
                echo " la capitale est Paris";
                break;
            case "Allemangne" :
                echo "la capitale est Berlin";
                break;
            case "Italie" :
                echo "la capitale est Rome";
                break;
            case "Maroc" :
                echo "la capitale est Rabat";
                break;
            case "Espagne" :
                echo "la capitale est Madrid";
                break;
            case "Portugal" :
                echo "la capitale est Lisbonne";
                break;
            case "Angleterre" :
                echo "la capitale est Londres";
                break;
            default :
             echo "la capitale est Iconnu";
        }
            
    }

    Capitale("Togo"); echo "<br>";
    Capitale("Maroc"); echo "<br>";
    Capitale("Espagne"); echo "<br>";
    Capitale("Russie");echo "<br>";

   
?>