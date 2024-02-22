<!DOCTYPE html>
<html lang="fr">
<head>

    <title>Mois de l'année</title>
</head>
<body>
    <h1>Mois de l'année :</h1>
    <table border="1">
        <tr>
            <th>Mois</th>
        </tr>
        <?php
        $mois = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
        foreach ($mois as $m) {
            echo "<tr><td>$m</td></tr>";
        }
        ?>
    </table>
</body>
</html>
