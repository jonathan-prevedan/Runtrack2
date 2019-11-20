<?php 

$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete = "Select * from etudiants";

$query = mysqli_query($connexion, $requete);

?>

<html>
    <head>    
        <meta charset="UTF-8">
    </head>


    <table>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Naissance</th>
        <th>Sexe</th>
        <th>E-mail</th>

        <?php 
        while ($resultat = mysqli_fetch_array($query))
        {
        ?>

        <tr>
            <td><?php echo $resultat['prenom'] ?></td>
            <td><?php echo $resultat['nom'] ?></td>
            <td><?php echo $resultat['naissance'] ?></td>
            <td><?php echo $resultat['sexe'] ?></td>
            <td><?php echo $resultat['email'] ?></td>
        </tr>
        <?php } ?>
    </table>


    </html>