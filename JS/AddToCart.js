const Bestil = document.getElementById("VareOverSigt");
var totalinfo;

Listen();

function Listen(){
	// Når der bliver trykket på en knap der lægger inden for VareOverSigt, køre den function Check
	Bestil.addEventListener('click', Check, false);

}

function Check(e){
	// E er knappen der er blevet trykket på, og dette stopper den fra at reloade siden
	e.preventDefault();

	if (e.target.classList.contains('bestil')) {
		// Henter div'en med knappen man har trykket på
		const parent = e.target.parentElement;

		AddToList(parent);
	}	
}



function AddToList(parent) {

	var cart = {
	// Den tager textcontent fra 'span'
	name: parent.querySelector('span').textContent, 
	price: parent.querySelector('#pris').textContent,
	quantity: 1,
	img: parent.querySelector('img').src,
	id: parent.querySelector('button').getAttribute('vare-id')}


	if (sessionStorage.getItem(cart.name) === null) {
		// Tilføjer varen til sessionStorage hvis navnet ikke allerede eksistere
		sessionStorage.setItem(cart.name, JSON.stringify(cart));

	}
	else{
		// Quantity++
		// Henter info fra sessionStorage og lave den samme vare igen, bare med qty++
		var vare = JSON.parse(sessionStorage.getItem(cart.name));
		var cart = {
			name: vare.name, 
			price: vare.price,
			quantity: vare.quantity +1,
			img: vare.img,
			id: vare.id}
		// Smider varen ind igen på sessionStorage
		sessionStorage.setItem(cart.name, JSON.stringify(cart));
    }

}