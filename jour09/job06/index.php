<?php 

$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT COUNT(id) AS nb_etudiants FROM etudiants";


$query = mysqli_query($connexion, $requete);

$resultat= mysqli_fetch_all($query);
?>

<html>
    <meta charset="utf-8">
    <table>
        <th>nb_etudiants</th>
        <?php 
        foreach($resultat as $key)
        {
            echo "<tr>";
            foreach($key as $value)
            {
                echo"<td>".$value."</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</html>