<?php include "classes/graphic.php"?>
<!DOCTYPE html>
<html>
<head>
    <title>Graphic</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<input type="hidden" id="name" value="<?=$url?>">
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<script>
    var jsVar = <?php echo $datearray ?>;
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="js/myFunctions.js"></script>
</body>
</html>