<?php 
function carre($a) {
    $carre = $a ** 2;
    return $carre;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrés des nombres de 1 à 30</title>
</head>
<body>
    <h1>Carrés des nombres de 1 à 30</h1>
    <section>
        <h2>Exercice 3 </h2>
        <ul>
            <?php
            for ($i = 1; $i <= 30; $i++){
                $carre = carre($i);
                echo "$i^2 = $carre<br>";
            }
            ?>
        </ul>
    </section>
</body>
</html>
