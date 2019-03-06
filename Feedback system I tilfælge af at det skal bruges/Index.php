<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
// "Databsen"
$arr = array('Glad','Køn',"Smuk",'Somthing','en til');

?>

Feedback

<form action="Feedback.php" method="get">
	<?php 
	// i bliver brugt som en slags midlertidig ID.
	$i = 1;
	// count tæller hvor mange spørsmål der er og sender det med over så vi ved hvor mange gange vi skal loppe igennem koden.
	$count = 0;

	// Denne skal ikke være der!
	$ID = 1;
	foreach ($arr as $value) {
			// ID bliver hentet fra databsen
			// $ID = værdig fra databasen;
	?>
		<p> Hvor <?= $value ?> er du? </p>
	    <input type="radio" name="<?= $i ?>" value="1"> 1
	  	<input type="radio" name="<?= $i ?>" value="2"> 2
	  	<input type="radio" name="<?= $i ?>" value="3"> 3
	  	<input type="radio" name="<?= $i ?>" value="4"> 4
	  	<input type="radio" name="<?= $i ?>" value="5"> 5
	  	<input type="radio" name="<?= $i ?>" value="6"> 6
	  	<input type="radio" name="<?= $i ?>" value="7"> 7
	  	<input type="radio" name="<?= $i ?>" value="8"> 8
	  	<input type="radio" name="<?= $i ?>" value="9"> 9
	  	<input type="radio" name="<?= $i ?>" value="30"> 10
	  	<input style="display: none;" type="" name="<?= 'ID' . $i ?>" value="<?= $ID ?>">
	<?php 
	$i++;
	$count++;
	// Igen dette skal ikke være der, det er bare fordi der ikke er sat en database til dette.
	$ID++;
	} ?>
	  	<br><br>
	  	<input style="display: none;" type="" name="count" value="<?= $count ?>">
	  	
	  	<input type="submit" value="Submit">

	  	<br><br>
	  	<?= "TotalCount: " . $count ?>
</form>

</body>
</html>