<!DOCTYPE html>
<html>
<head>
    <title>ac3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="get">
    Puissance (W) : <input type="number" name="p"><br><br>
    Durée (s) : <input type="number" name="t"><br><br>
    <input type="submit" value="Envoyer">
</form>

<?php
if (isset($_GET['p']) && isset($_GET['t'])) {
    echo "<p>Puissance : ".$_GET['p']." W</p>";
    echo "<p>Durée : ".$_GET['t']." s</p>";
}
?>

<footer>Yōkitsune</footer>
</body>
</html>
