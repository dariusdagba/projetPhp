<?php
    $name="nbvisistes";
   
    if(isset($_COOKIE[$name]))
    {
        $temp=unserialize(data: $_COOKIE[$name]);
        $visites=$temp;
        $visites[]=date("d-m-Y H:i:s");
        setcookie($name,serialize($visites),time()+300);
        echo "Nombre de visites ".count($visites);
        //var_dump($visites);
        foreach($visites as $index=>$values)
        {
            echo ($index+1)." ".$values."<br>";
        }
    }
    else
    {
        $visites=[date("d-m-Y H:i:s")];
        setcookie($name,serialize($visites),time()+300);
        echo "c'est votre premiére visite ";
        echo "<br>";
        echo $visites[0];
    }
    // echo "<br>";
    // echo " Bienvenue sur ma page ";
?>