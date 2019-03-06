<?php include "header.php"
// Backend:
// Skal have adgang til alle varene så de vises med navn,billed osv.
 ?>
<body onload="recalculateCart()">
  <h1>Kurv</h1>
  <link rel="stylesheet" type="text/css" href="CSS/KurvStyle.css">

  <div class="shopping-cart">

    <div class="column-labels">
      <label class="product-image">Billed</label>
      <label class="product-details">Produkt</label>
      <label class="product-price">Pris</label>
      <label class="product-quantity">Antal</label>
      <label class="product-removal">Fjern</label>
      <label class="product-line-price">Total</label>
    </div>
    <div class="product-list">
    </div> 

    

      <div class="totals">
      <div class="totals-item totals-item-total">
        <label>Pris i alt</label>
        <div class="totals-value" id="cart-total">0</div>
      </div>
    </div>
    <div style="text-align: center;">
        <form action="FrontPage.php">
          <button class="GoBack">
          Gå tilbage</button>
        </form>
        <form action="PlaceOrder.php">
          <button class="checkout" style="background-color: green;">Køb maden</button>
        </form>
    </div>
  </div>
</body>

<script type="text/javascript" src="JS/LoadKurvItems.js"></script>
<script defer type="text/javascript" src="JS/KurvScript.js"></script>