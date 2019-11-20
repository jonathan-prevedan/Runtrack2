<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-01-01'";

$query = mysqli_query($connexion, $requete);

$resultat = mysqli_fetch_all($query);
?>

<html>
    <meta charset="utf-8">

    <table>

        <th>prenom</th>
        <th>nom</th>
        <th>naissance</th>

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