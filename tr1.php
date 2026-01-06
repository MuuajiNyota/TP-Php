<?php
if (isset($_GET['p']) && isset($_GET['t'])) {
    $energie = $_GET['p'] * $_GET['t'];
    file_put_contents("energie.txt", $energie);
    echo "Énergie : $energie Wh";
}
?>
<form method="get">
    Puissance : <input type="number" name="p"><br>
    Durée : <input type="number" name="t"><br>
    <input type="submit">
</form>
