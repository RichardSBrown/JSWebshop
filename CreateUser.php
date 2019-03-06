<!DOCTYPE html>
<?php 
// Backend:
// Skal bruges til at lave en ny bruger.
?>
<html>
<head>
	<title></title>
</head>
<body>
<?php include "header.php" ?>

<div>
	<div class="col-4">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas at magna vel massa euismod aliquam. Curabitur eu tincidunt felis. Sed ultricies viverra facilisis. Sed semper felis enim, non facilisis ex auctor vel. Pellentesque eu felis felis. Etiam efficitur diam mi, at fermentum augue egestas in. Praesent at lorem porta, pulvinar sem vel, auctor neque. Duis molestie lectus id quam tempor luctus. Aenean dui justo, tristique et elementum mattis, porta ut dui.
	</div>
</div>

<div>
	<div class="col-4">

<form action="FrontPage.php">
	<center>
	<input placeholder="Fornavn" type="Text" name="Fornavn"> <br>
	<input placeholder="Efternavn" type="Text" name="Efternavn"> <br>
	<input placeholder="Telefon nr." type="tel" name="Telefon" maxlength="8"> <br>
	<input placeholder="Brugernavn" type="Text" name="Brugernavn"> <br>
	<input placeholder="Adgangskode" type="Password" name="Adgangskode"> <br> <br>
	<!-- Check op imod databasen --->
	<button type="submit"> Opret Bruger </button>
</form>
<form action="index.php">
	<button type="submit"> Tilbage</button>
	</center>
</form>
	</div>
</div>

<div>
	<div class="col-4">
		Donec in eleifend odio, vel laoreet nulla. Mauris id faucibus purus. Fusce vitae urna facilisis, tristique ex sit amet, finibus sem. Mauris cursus, diam nec lacinia ultricies, purus turpis varius nunc, ac pharetra purus massa quis ipsum. Sed posuere nec enim a bibendum. Quisque vitae nisi quis enim ornare aliquet quis lobortis odio. Suspendisse ac tellus in magna dictum euismod sit amet at quam. Fusce ut quam sit amet urna molestie finibus a aliquet risus. Sed vitae rhoncus neque. Phasellus iaculis vehicula libero, in lobortis odio. Nunc maximus vulputate feugiat. Donec viverra ex et leo luctus mollis. Sed ut erat vitae massa elementum blandit. Morbi sit amet risus et ligula cursus euismod.
	</div>
</div>


</body>
</html>