<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des mois de l'année</title>
</head>
<body>
    <h1>Mois de l'année</h1>
    <ol>
        <?php
        // Tableau contenant les noms des mois
        $mois = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");

        // Boucle pour afficher chaque mois dans une liste ordonnée
        foreach ($mois as $m) {
            echo "<li>$m</li>";
        }
        ?>
    </ol>
</body>
</html>
