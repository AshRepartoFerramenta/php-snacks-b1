<!-- Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano
delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. -->

<?php
$matches = [
    [
        "casa" => "Elephant Basket CT",
        "punteggio casa" => 72,
        "ospite" => "Gravina Ct",
        "punteggio ospite" => 58,
    ],
    [
        "casa" => "Comiso",
        "punteggio casa" => 65,
        "ospite" => "Priolo",
        "punteggio ospite" => 53,

    ],
    [
        "casa" => "Orlandina Basket ME",
        "punteggio casa" => 102,
        "ospite" => "Giostra ME",
        "punteggio ospite" => 60,
    ],
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Php Snack 1</title>
</head>

<body>
    <h2 style=color:aqua;> Basket Sicilia Regionale Serie C anno 2009/10 <br>- 7a Giornata - </h2>

    <ul>
        <?php for ($i = 0; $i < count($matches); $i++) { ?>
            <?php $team_match = ($matches[$i]["casa"] . " - " . $matches[$i]["ospite"]); ?>
            <?php $team_match_score = ($matches[$i]["punteggio casa"] . " - " . $matches[$i]["punteggio ospite"]); ?>

            <li><?php echo ($team_match . " | " . $team_match_score) ?></li>
        <?php } ?>
    </ul>
</body>

</html>