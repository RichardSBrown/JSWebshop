<body>
<?php 
include "header.php"
// Backend:
// Skal hente alle varene fra databasen og vise den i en pæn liste.
?>
 <script defer type="text/javascript" src="JS/AddToCart.js"></script>

<div class="row" style="border-style: dotted; border-color: blue">
	<div class="col-2">
		<p style="text-align: center;">  </p>
	</div>

	<div class="col-8">
		<center>
			<p> Søg efter din mad her </p>
		<input type="text" id="myInput" placeholder="Søg efter din mad.." title="Type in a name">
		</center>
	</div>

	<div class="col-2">
		<center>
			Kategori <br>
		<select id="Kategori">
			<option value=""></option>
		  	<option value="Salat">Salat</option>
		  	<option value="Snack">Snack</option>
		  	<option value="Drikkevare">Drikkevare</option>
		</select>
		</center>
	</div>
</div>


<div class="row" id="VareOverSigt">

<?php 
for ($i = 0; $i <= 30; $i++) {
?>
	<!-- For hver vare, loop igennem dette -->
	<div class="col-2" style="text-align: center;">
		<span class="item_name">Navn:<?= $i ?></span><br>
		<img src="https://via.placeholder.com/150" class="Productes"><br><br>
		<p style="display:inline">Pris:<p id="pris" style="display:inline"> <?= $i ?> </p></p>
		<button vare-id=<?= $i ?> class="bestil">Bestil</button>
		<span name="thor" class="vare-kategori" style="display: none;">Drikkevare</span> 
	</div>
	<!-- End of loop -->
<?php }  ?>

<!-- vare tester -->
	<div class="col-2" style="text-align: center;">
		<span class="item_name">Pølsehorn</span> <br>
		<img src="https://via.placeholder.com/150" class="Productes"><br>
		<p> Pris: 500 </p>
		<button>Bestil</button>
		<span name="thor" class="vare-kategori" style="display: none;">Snack</span> 
	</div>

	<div class="col-2" style="text-align: center;">
		<span class="item_name">Cærcar salat</span> <br>
		<img src="/pics/Stabbed_Guy.png" class="Productes"><br>
		<p> Pris: 495 </p>
		<button>Bestil</button>
		<span name="thor" class="vare-kategori" style="display: none;">Snack</span> 
	</div>
<!-- End of vare tester -->


</div>

</body>
</html>

 <script type="text/javascript" src="JS/Varesøg.js"></script>
