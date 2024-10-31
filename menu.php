
 <a href="https://www.teccart.qc.ca/">Home</a>
 <a href="https://www.teccart.qc.ca/nouvelles.php">Nouvelles</a>
<a href="https://www.teccart.qc.ca/etudiants.php">Etudiants</a>
<a href="https://www.teccart.qc.ca/emplois.php">Emplois</a>
<br>
<?php
    include("page_visite.php");

    $tab=array( 1=>"rata", "id"=>2, 1.5=>3);
    foreach($tab as $index=>$values)
    {
        echo $index." ".$values;
    }

    
?>
