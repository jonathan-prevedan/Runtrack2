<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT AVG(capacite) FROM salles";

$query = mysqli_query($connexion, $requete);

$resultat = mysqli_fetch_all($query);
?>

<html>
    <meta charset="utf-8">

    <table>

        <th>Capacite moyenne</th>

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