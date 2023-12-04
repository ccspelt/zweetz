var winkelwagen = [];

function addToCart(productNaam, productPrijs) {
    // Voeg het product toe aan de winkelwagen
    winkelwagen.push({
        naam: productNaam,
        prijs: productPrijs
    });

    // Werk de winkelwagenweergave bij
    updateCartView();
}

function updateCartView() {
    var winkelwagenLijst = document.getElementById('winkelwagen-lijst');
    var totaalBedragElement = document.getElementById('totaal-bedrag');
    
    // Wis de huidige weergave
    winkelwagenLijst.innerHTML = '';

    // Vul de weergave opnieuw in met de bijgewerkte gegevens
    var totaalBedrag = 0;
    winkelwagen.forEach(function(item) {
        var listItem = document.createElement('li');
        listItem.textContent = item.naam + ' - $' + item.prijs.toFixed(2);
        winkelwagenLijst.appendChild(listItem);

        totaalBedrag += item.prijs;
    });

    // Werk het totaalbedrag bij
    totaalBedragElement.textContent = totaalBedrag.toFixed(2) + ' EUR';
}

