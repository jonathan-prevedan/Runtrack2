<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT * FROM etudiants WHERE prenom like 'T%'";

$query = mysqli_query($connexion, $requete);

$resultat = mysqli_fetch_all($query);
?>

<html>
    <meta charset="utf-8">

    <table>

        <th>Prenom</th>
        <th>Nom</th>
        <th>Naissance</th>
        <th>Sexe</th>
        <th>E-mail</th>

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