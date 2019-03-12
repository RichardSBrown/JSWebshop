<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="CSS/Stylesheet.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

 <script type="text/javascript" src="JS/Fbint.js"></script>



<div class="row">
	<div class="col-1">
	</div>
	<div class="col-10">
		<center><h1 style="font-size: 72px"> JS WEBSHOP </h1></center>
	</div>
	<div class="col-1">
		<!-- Hvis brugeren er logget ind skal den vise dette billed, ellers skal der ikke være noget -->
			<a href="Kurv.php"><img class="SmallIcon" style="float: right;" src="/pics/CartIcon.png"></a> <br><br><br>



		   <a href="FrontPage.php"> Forside </a>

		  <div id="updateUser" style="visibility: hidden; display: none; ">
		   <a href="Userdata.php"> Min konto </a>
		  </div>
		  <!-- Log ud -->
		  
		  <div id="fblogintrue" style="visibility: hidden; display: none;">
		   <a href="#" onClick="JavaScript:Logout();"> Log af [Med Facebook] </a> </div>
		  
		  <div id="fbloginfalse" style="visibility: hidden; display: none;">
		   <a href="index.php"> Log af </a> </div>

		  <!-- End of log out -->



	</div>
</div>

<script>

  function Logout() {
  	FB.logout(function(response) {
  		sessionStorage.clear();
  		window.location.href = 'index.php';
	});
  }

	function statusChangeCallback(response) {
		if (response.status === 'connected') {
			// The user did log in with facebook
			document.getElementById('fblogintrue').style.visibility = 'visible';
			document.getElementById('fblogintrue').style.display = 'block';
			document.getElementById('fbloginfalse').style.display = 'none';
			document.getElementById('updateUser').style.visibility = 'hidden';
			document.getElementById('updateUser').style.display = 'none';
		}
		else{
			// The user did not log in with facebook
			document.getElementById('fbloginfalse').style.visibility = 'visible';
			document.getElementById('fbloginfalse').style.display = 'block';
			document.getElementById('fblogintrue').style.display = 'none';
			document.getElementById('updateUser').style.visibility = 'visible';
			document.getElementById('updateUser').style.display = 'block';
		}
	}
</script>
