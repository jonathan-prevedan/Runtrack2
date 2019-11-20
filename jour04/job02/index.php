<form method="$_GET" action="index.php">

    
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


echo "<table>";
foreach ($_GET as $cle => $valeur)
{
    echo "<tr>";
    echo "<td>$cle</td>";
    echo "<td>$valeur</td>";
    echo "</tr>";
#echo $cle." ".$valeur."<br>";

}
echo"</table>";
?>
