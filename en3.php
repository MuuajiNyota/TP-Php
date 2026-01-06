<?php
if (isset($_GET['p']) && isset($_GET['t'])) {
    $ligne = $_GET['p']." ".$_GET['t']."\n";
    file_put_contents("log.txt", $ligne, FILE_APPEND);
}
?>
<form method="get">
    Puissance : <input type="number" name="p"><br>
    Durée : <input type="number" name="t"><br>
    <input type="submit">
</form>
