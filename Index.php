<body>

<?php include "header.php" 
// Backend:
// Denne side skal bruges til log-in og lave en ny bruger.
?>

<div class="row">
  <div class="col-3 menu"> 
  	<h2 style="text-decoration: underline;"> Hvad er JS Webshop?</h2>

  	<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sit amet lobortis lectus, nec auctor nulla. Cras nec justo quis ante aliquet condimentum sed sit amet velit. Donec egestas vel metus sed dapibus. Fusce eget rhoncus tortor. Praesent dictum egestas dui vel hendrerit. Morbi eget pharetra ante. Ut quis magna massa. Sed fermentum porta vulputate. Aliquam dictum porttitor arcu non consectetur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus gravida nisi sed ligula lobortis, vel ornare lacus accumsan. Pellentesque sagittis ultricies lacus. Fusce condimentum, elit at condimentum pretium, odio metus porta massa, ac ornare nisl dui et nulla. Aenean lorem mi, ullamcorper vitae placerat ut, ultricies sit amet nulla. Duis non turpis in purus interdum facilisis ut luctus tortor. </p>

  </div>
  
  <div class="col-9">
  	<div style="text-align: center;">
  		<p> Login </p>
	  	<input placeholder="Bruger navn"> <br>
	  	<input placeholder="Adgangskode"> <br><br>
	  	
	  	<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
		</fb:login-button> <br>

		<div id="status">
		</div> <br>


	  	<form action="FrontPage.php">
	  		<!-- Check op imod databasen --->
	  	<button type="submit"> Login </button>
	  	</form>
	  	<form action="CreateUser.php">
	  		<!-- Check op imod databasen --->
	  		<button type="submit"> Lav en bruger </button>
		</form>
	<div>  
  </div>
</div>

</body>
</html>


<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        // If you get to here you are logged in.
        window.location.href = 'FrontPage.php';
    });
  }
</script>
