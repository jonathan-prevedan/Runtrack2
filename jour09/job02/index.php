<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "SELECT * FROM salles";

$query= mysqli_query($connexion, $requete);

?>

<html>
    <meta charset="utf-8">

    <table>
        <th>Nom</th>
        <th>Capacite</th>

        <?php
        while($resulat = mysqli_fetch_array($query))
        { 
        ?>

        <tr>
        <td><?php echo $resulat['nom'] ?></td>
        <td><?php echo $resulat['capacite'] ?></td>
        </tr>

    <?php
        } 
    ?>

</table>

</html>