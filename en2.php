<?php
if (isset($_GET['p']) && isset($_GET['t'])) {
    file_put_contents("puissance.txt", $_GET['p']);
    file_put_contents("duree.txt", $_GET['t']);
}
?>
<form method="get">
    Puissance : <input type="number" name="p"><br>
    Durée : <input type="number" name="t"><br>
    <input type="submit">
</form>
