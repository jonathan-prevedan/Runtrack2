<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT etage.id, etage.nom, salles.nom, salles.id_etage FROM etage INNER JOIN salles on etage.id = salles.id_etage";

$query = mysqli_query($connexion, $requete);

$resultat = mysqli_fetch_all($query);
?>

<html>
    <meta charset="utf-8">

    <table>

        <th>nom des salles</th>
        <th>nom des etages</th>
        <th></th>

        <?php
        foreach($resultat as $keys)
        {
            echo "<tr>";

            foreach($keys as $value)
            {
                echo "<td>".$value."</td>";
            }
            echo "</tr>";
        } 
        ?>
    </table>
</html>