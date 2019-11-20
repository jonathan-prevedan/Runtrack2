<?php
    session_start();

    if(isset($_POST["resultat"]))
    {
        unset($_SESSION['nbvisites']);
    }
    if (!isset($_SESSION['nbvisites'])) 
    {
      $_SESSION['nbvisites'] = 0;
    } 
    else 
    {
      $_SESSION['nbvisites']++;
    }
    echo $_SESSION['nbvisites'];
?>

<form method="post" action="index.php">
    
    <input type="submit" name="resultat" value="Reinitialiser">

</form>
