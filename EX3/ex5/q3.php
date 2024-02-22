<?php
// Tableau associatif avec les nombres de jours pour chaque mois de l'année
$nombre_jours_par_mois = array(
    "Janvier" => 31,
    "Février" => 28, // Non bissextile
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

// Affichage des mois et de leurs nombres de jours
foreach ($nombre_jours_par_mois as $mois => $jours) {
    echo "Le mois de $mois a $jours jours.<br>";
}
?>
