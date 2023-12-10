   var winkelwagen = [];
   var expanded = true;

   function addToCart(productNaam, productPrijs) {
       // Voegt de producten toe aan de winkelwagen
       winkelwagen.push({
           naam: productNaam,
           prijs: productPrijs
       });


       updateCartView();
   }


   function updateCartView() {
       var winkelwagenLijst = document.getElementById('winkelwagenLijst');
       var totaalBedragElement = document.getElementById('totaalBedrag');
       
       // niet wissen anders voegt hij het dubble toe aan de lijst
       winkelwagenLijst.innerHTML = '';

       // Vul de weergave opnieuw in met de bijgewerkte gegevens
       var totaalBedrag = 0;
       winkelwagen.forEach(function(item) {
           var listItem = document.createElement('li');
           listItem.textContent = item.naam + ' - $' + item.prijs.toFixed(2);
           winkelwagenLijst.appendChild(listItem);

           totaalBedrag += item.prijs;
       });

       // simple reken som voor het winkel wagen bedrag
       totaalBedragElement.textContent = totaalBedrag.toFixed(2) + ' EUR';
   }

// winkelwagen voor minialiseren en verkleinen
   function winkelwagenMin(){


        if(expanded){
        document.getElementById('winkelwagen').style.display = 'flex';

             
        }
        else{
            document.getElementById('winkelwagen').style.display = 'none';

        }
        expanded = !expanded;
}

// functie voor de als net op de website kom
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

  // als ik naar de volgen foto wil gaan
  function nextSlide(element) {
    const slider = element.closest('.product').querySelector('.slider');
    const currentIndex = Array.from(slider.querySelectorAll('.slide')).findIndex(slide => slide.style.transform === '');
    showSlide(element, currentIndex + 1);
  }
// als ik naar de vorige foto wil gaan
  function prevSlide(element) {
    const slider = element.closest('.product').querySelector('.slider');
    const currentIndex = Array.from(slider.querySelectorAll('.slide')).findIndex(slide => slide.style.transform === '');
    showSlide(element, currentIndex - 1);
  }

