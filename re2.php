<!doctype html>
<html>
<head>
<script src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['gauge']}]}"></script>
<script>
google.load('visualization', '1', {packages: ['gauge']});
google.setOnLoadCallback(drawGauge);
function drawGauge() {
    var data = google.visualization.arrayToDataTable([
        ['Label', 'Value'],
        ['Energie', <?= isset($_GET['p']) ? $_GET['p']*$_GET['t'] : 0 ?>]
    ]);
    var options = {max:50,width:200};
    var chart = new google.visualization.Gauge(document.getElementById('gaug'));
    chart.draw(data, options);
}
</script>
</head>
<body>

<form>
    P : <input type="number" name="p">
    T : <input type="number" name="t">
    <input type="submit">
</form>

<div id="gaug"></div>
</body>
</html>
