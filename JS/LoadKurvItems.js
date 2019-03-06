for (var i = 0; i < sessionStorage.length; i++) {

  var y = sessionStorage.key(i);
  var f = JSON.parse(sessionStorage.getItem(y));

  $(".product-list").append(
  	'<div class="product">' +
  	'<div class="product-image"><img src="' + f.img + '">' +
    '</div>' +
    '<div class="product-details">' +
      '<div class="product-title">' + f.name+ '</div>' +
      '<p class="product-description">[Vare beskrivelse]</p>' +
    '</div>' +
    '<div class="product-price">'+ f.price +'</div>' +
    '<div class="product-quantity">' +
      '<input id="qty'+ f.id +'" name=' + f.name + ' type="number" value="'+ f.quantity +'" min="1">' +
    '</div>' +
    '<div class="product-removal">' +
      '<button name=' + f.name +' class="remove-product">' +
        'Fjern' +
      '</button>' +
    '</div>' +
    '<div class="product-line-price">'+ f.price * f.quantity +'</div>' +
  '</div></div>'
  )
}
