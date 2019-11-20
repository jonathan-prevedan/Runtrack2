<?php 

setcookie('nbvisites',($_COOKIE['nbvisites']+1));

if(isset($_POST['resultat']))
{
    unset($_COOKIE['nbvisites']);
}

if(!isset($_COOKIE['nbvisites']))
{
    $_COOKIE['nbvisites'] =0;
}


echo $_COOKIE['nbvisites'];

?>

<form method="post" action="index.php">
    
    <input type="submit" name="resultat" value="Reinitialiser">

</form>