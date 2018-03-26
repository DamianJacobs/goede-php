<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="goede.css" type="text/css">
	<title>Tijd</title>
</head>
<body id="ochtend">
	<?php
	date_default_timezone_set("Europe/amsterdam");
	echo date("l jS \of F Y H:i:s");
	?>
	<p><?php
$t = date("H");

if ($t < "12") {
    echo "Goedemorgen";
		echo '<body style="background-image: url(backgrounds/morning.png);"';
} elseif ($t < "18") {
	echo "goedemiddag";
	echo '<body style="background-image: url(backgrounds/afternoon.png);"';
} elseif ($t < "24") {
	echo "goedeAvond";
	echo '<body style="background-image: url(backgrounds/evening.png);"';
} elseif ($t < "6") {
	echo "goedeNacht";
	echo '<body style="background-image: url(backgrounds/night.png);"';
}
?></p>
</body>
</html>
