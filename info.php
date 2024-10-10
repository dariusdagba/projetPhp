<?php
session_start();

if(isset($_SESSION['nom']))
{
    echo "<pre>Le ministre montre notamment du doigt la gestion illogique des files d'attente dans certains cliniques. Ce qui n'est pas acceptable, c'est d'avoir des files d'attente de quatre, cinq heures, a-t-il indiqué. </pre>";
}
?>

<form action="info.php" name="suppression" method="POST">
<input type="submit" name="deconnexion" value="deconnexion"/>
<input type="hidden" name="deco" value="deco"/>
</form>

<?php
    if(isset($_POST['deco']))
    {
        session_destroy();
        header('Location:session.php');
    }
?>