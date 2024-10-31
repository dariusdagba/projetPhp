<?php
session_start();

if(isset($_COOKIE['nom']))
{
    echo "<pre>Le ministre montre notamment du doigt la gestion illogique des files d'attente dans certains cliniques. Ce qui n'est pas acceptable, c'est d'avoir des files d'attente de quatre, cinq heures, a-t-il indiqué. </pre>";
}
else
{
    echo "deconnecté, veillez vous reconnecté";

    header('Location:session.php');
}
?>