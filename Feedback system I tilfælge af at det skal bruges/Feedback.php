<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

if (isset($_GET['count'])) {
	$count = $_GET['count'];
	$i = 1;
	
	
	while ($i <= $count) {
		$ID = $_GET['ID' . $i];
		echo $i . "= " . $_GET[$i];
		echo " ID: " . $ID;
		echo "<br>";
		$i++;
	}

}
 ?>


</body>
</html>
