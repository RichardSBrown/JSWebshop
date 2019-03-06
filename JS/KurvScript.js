var fadeTime = 2;

$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


function recalculateCart()
{
  var total = 0;
    // Udrenger total prisen
    $('.product').each(function () {
      total += parseFloat($(this).children('.product-line-price').text());
    });
    
    // Updater total prisen
    $('.totals-value').fadeOut(fadeTime, function() {
      $('#cart-total').html(total.toFixed(2));
      if(total == 0){
        $('.totals-value').fadeOut(fadeTime);
        $('.checkout').fadeOut(fadeTime);
      }else{
        $('.totals-value').fadeIn(fadeTime);
        $('.checkout').fadeIn(fadeTime);
      }
    });
}


function updateQuantity(quantityInput)
{
  var vare = JSON.parse(sessionStorage.getItem(quantityInput.name));
  // En checker der sikre sig at vare antal ikke kan være under 1
  if (document.getElementById("qty" + vare.id).value <= 0){
    document.getElementById("qty" + vare.id).value = vare.quantity;
  }
  else {
    // Laver en ny udgave af vare, for at update hvor mange antal brugeren vil have
    var cart = {
      name: vare.name, 
      price: vare.price,
      quantity: document.getElementById("qty" + vare.id).value,
      img: vare.img,
      id: vare.id}
    sessionStorage.setItem(cart.name, JSON.stringify(cart));

    // Updater vare rækken
    var productRow = $(quantityInput).parent().parent();
    var price = parseFloat(productRow.children('.product-price').text());
    var quantity = $(quantityInput).val();
    var linePrice = price * quantity;
    
    // Update det hele
    productRow.children('.product-line-price').each(function () {
      $(this).fadeOut(fadeTime, function() {
        $(this).text(linePrice.toFixed(2));
        recalculateCart();
        $(this).fadeIn(fadeTime);
      });
    });  
  }
}


function removeItem(removeButton)
{
  // Fjern varen fra sessionStorage 
  sessionStorage.removeItem(removeButton.name);
  // Fjerner vare rækken
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}