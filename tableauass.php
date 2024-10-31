<?php
    $produits=array("pomme"=>1,"banane"=>5,"orange"=>2);
    $produits["fraise"]=10;
    

    foreach($produits as $index=>$values)
    {
        echo $index." ".$values." <br>";
    }

    function returnValue($produits,$valeurRech){

        $a=array_search($valeurRech,$produits);
        foreach($produits as $index=>$values)
        {
            
            if($values==$valeurRech)
            {
                $cp=1;
            }
            else{
                 $cp=0;
            }
        }
        if($cp==1)
        {
            echo "valeur trouvé ".$index." ".$values." <br>";
        }else
        {
            echo "valeur non trouvé <br> ";
           
        }
        echo $a."<br>";
    }

    returnValue($produits,10);


   
    // $tab["David"]=23;
    // $tab["Eve"]=19;

    function ajoutEtudiants($tab1,$tab2){
        foreach($tab2 as $index=>$values){
            $tab1[$index]=$values;
        }
        return $tab1;
    }

    $tab=array("Alice"=>20,"Bob"=>22,"Claire"=>21);
    $tabs=array("David"=>23,"Eve"=>19);

    $tab3=ajoutEtudiants($tab,$tabs);
    foreach($tab3 as $index=>$values)
    {
        echo $index." ".$values." <br>";
    }

    echo "<br>";
    unset($tab['Bob']);
    
    foreach($tab3 as $index=>$values)
    {
        echo $index." ".$values." <br>";
    }

    $pays=array("France"=>"Paris","Canada"=>"Ottawa","Japan"=>"Tokyo");
    
    foreach($pays as $ind=>$valus)
    {
        if($ind=="Canada")
        {
           $cpt=1;
        }
        else
        {
           $cpt=0;
        }
    }

    if($cpt==1){
        echo "Clé trouvé <br>";
    }
    else{
        echo "Clé non trouvé <br>";
    }



        $capRech="Tokyo";
        $paysrech=array_search($capRech,$pays);
        foreach($pays as $index=>$values)
        {
            
            if($values==$capRech)
            {
                $cp1=1;
            }
            else{
                 $cp1=0;
            }
        }
        if($cp1==1)
        {
            echo "Pays trouvé ".$index." <br>";
        }else
        {
            echo "Pays non trouvé <br> ";
           
        }





?>