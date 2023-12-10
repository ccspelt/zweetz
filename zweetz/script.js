   // Winkelwagenobject om de geselecteerde producten op te slaan
   var winkelwagen = [];
   var expanded = true;

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

   function checkout() {
       // Plaats hier de code voor het afrekenen (bijvoorbeeld doorgeven aan een backend, verwerken van betalingen, etc.)
       alert('Bedankt voor uw aankoop!');
   }

   function winkelwagenmin(){


        if(expanded){
        document.getElementById('winkelwagen').style.display = 'flex';

             
        }
        else{
            document.getElementById('winkelwagen').style.display = 'none';

        }
        expanded = !expanded;
}
function showSlide(element, index) {
    const slider = element.closest('.product').querySelector('.slider');
    const slides = slider.querySelectorAll('.slide');

    if (index < 0) {
      index = slides.length - 1;
    } else if (index >= slides.length) {
      index = 0;
    }

    const translateValue = -index * 100 + '%';
    slider.style.transform = 'translateX(' + translateValue + ')';
  }

  function nextSlide(element) {
    const slider = element.closest('.product').querySelector('.slider');
    const currentIndex = Array.from(slider.querySelectorAll('.slide')).findIndex(slide => slide.style.transform === '');
    showSlide(element, currentIndex + 1);
  }

  function prevSlide(element) {
    const slider = element.closest('.product').querySelector('.slider');
    const currentIndex = Array.from(slider.querySelectorAll('.slide')).findIndex(slide => slide.style.transform === '');
    showSlide(element, currentIndex - 1);
  }

