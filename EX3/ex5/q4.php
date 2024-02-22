<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de jours par mois</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h2>Nombre de jours par mois</h2>
    <table>
        <thead>
            <tr>
                <th>Mois</th>
                <th>Nombre de jours</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nombre_jours_par_mois = array(
                "Janvier" => 31,
                "Février" => 28, 
                "Mars" => 31,
                "Avril" => 30,
                "Mai" => 31,
                "Juin" => 30,
                "Juillet" => 31,
                "Août" => 31,
                "Septembre" => 30,
                "Octobre" => 31,
                "Novembre" => 30,
                "Décembre" => 31
            );

            foreach ($nombre_jours_par_mois as $mois => $jours) {
                $m=ucfirst($mois);
                echo "<tr><td>$m</td><td>$jours</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
