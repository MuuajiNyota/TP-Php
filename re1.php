<?php
$e = 0;
if (isset($_GET['p']) && isset($_GET['t'])) {
    $e = $_GET['p'] * $_GET['t'];
}
?>
<form method="get">
    P : <input type="number" name="p">
    T : <input type="number" name="t">
    <input type="submit">
</form>

<div style="background:blue;height:30px;width:<?= $e ?>px"></div>
