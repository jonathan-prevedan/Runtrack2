<form method="get" action="index.php">

    
        <input type="text" placeholder="Prenom" name="prenom" /><br>

        <label>Nom</label>
            <input type="text" name="nom" /><br>

            <label>Âge</label>
            <input type="text" name="âge" /><br>

            <label>e-mail</label>
            <input type="e-mail" name="mail" /><br>
            <input type="submit" value="YES">
</form>

<?php 
foreach($_GET as $keys => $value)
echo $keys." ".$value;

?>
