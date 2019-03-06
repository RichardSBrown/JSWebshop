// Søge
$("#myInput").bind("keyup", function() {
    Search()
});

// Dropdown menu
$("#Kategori").change(function(){    
    Search();
}); // End of Dropdown


function Search(){
	// Input
    // SearchWord er det der står i søgeboksen
    var SearchWord = document.getElementById("myInput").value.toLowerCase();
    // items henter alle spansne som hedder item_name, det bliver brugt til at få fat i vares navn
    var items = $(".item_name");

    // Dropdown
    // Kategori er den kategori som brugeren har valgt i dropdown boksen
    var Kategori = document.getElementById("Kategori").value.toLowerCase();
    // Vare er der det samme som items bare hvor den henter vare-kategori istedet
	var vare = $(".vare-kategori");

    // Først gemmer den alle divsne.
    items.parent().hide();

    if (SearchWord == "") {
        // Søger efter kategori

        // Viser alle ting der stemmer overens med kategorien 
        vare.filter(function () {
            return $(this).text().toLowerCase().indexOf(Kategori) == 0;
        }).parent().show();
    }
    else if(Kategori == ""){
        // Søger efter userinput

        // Viser alle ting der stemmer overens med user input
        items.filter(function () {
            return $(this).text().toLowerCase().indexOf(SearchWord) == 0;
        }).parent().show();

    }

    else{
        // Søg efter både kategori og text
        // Loop der looper igennem hver vare
        vare.filter(function () {

            // Hvis varen passer med den kategori brugen har valgt
            if ($(this).text().toLowerCase() == Kategori) {
                // Navet på varen
                var navnet = $(this).parent().children().get(0).innerHTML.toLowerCase()
                // Kategorien på varen
                var kat = $(this).text().toLowerCase()

                // Hvis navn og kategori passer vis div'en
                if (kat == Kategori && navnet.indexOf(SearchWord) == 0) {
                    return $(this).text().toLowerCase();
                }
            }
            // Viser varene der passer
        }).parent().show();

    }
}