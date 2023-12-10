<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>zweetz</title>
</head>


<body>
    <header class="nav">
        <div id="navBalk">  
            <p></p>
            <div class="navItems">
                <a href="#">Home</a>
                <a href="#">Producten</a>
                <a href="#">about</a>

            </div>
            <div> 
            <div class="winkelkarretje">
                <img id="karretje" onclick="winkelwagenMin()" src="img/winkelkartje.png">
                <!-- winkelwagen knop en plaatje. -->
            
            </div>
            
            </div>
        </div>

    </header>
    <div id="alles">
        <P></P>
        <div id="ontWinkelwagen">
        <div id="winkelwagen">
                <h2>Winkelwagen</h2>
                <ul id="winkelwagenLijst">

                </ul>
                <p>Totaal: <span id="totaalBedrag">0.00</span> </p>
                <button href="#">Afrekenen</button>
                <script src="script.js"></script>
            </div>
        </div>
        <div id="producten">
        <!-- Producten worden hier weergegeven bij elk loopt class"product" werkt het zelfde-->
            
    <div class="product">
        <h3>Product 1</h3>      
            <div class="sliderContainer">
                <!-- hier onder staan de fotos moet veranderen naar de fotos die nodig zijn voor de producten -->
                <div class="slider">
                <div class="slide"><img class="img_pro" src="img/ik.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/koe.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/Naamloos.jpg"></div>
            </div>


                <p>Prijs: €10.00</p>
                <!-- hier onder moet je de "product 1" veranderen naaer het product naam en "10.00" naar de prijs die nodig is  -->
                <button onclick="addToCart('Product 1', 10.00)">Voeg toe aan winkelwagen</button>
                <button class="Btn" onclick="prevSlide(this)">❮</button>
                <button class="Btn" onclick="nextSlide(this)">❯</button>
                <!-- hier boven staan de knopen om de foto's kunnen verandren -->
            </div>
            
            <div class="product">
        <h3>Product 2</h3>      
            <div class="sliderContainer">
                <div class="slider">
                <div class="slide"><img class="img_pro" src="img/ik.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/koe.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/Naamloos.jpg"></div>
            </div>

                <p>Prijs: €15.00</p>
                <button onclick="addToCart('Product 2', 15.00)">Voeg toe aan winkelwagen</button>
                <button class="Btn" onclick="prevSlide(this)">❮</button>
                <button class="Btn" onclick="nextSlide(this)">❯</button>
            </div>    
            
            <div class="product">
        <h3>Product 3</h3>      
            <div class="sliderContainer">
                <div class="slider">
                <div class="slide"><img class="img_pro" src="img/ik.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/koe.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/Naamloos.jpg"></div>
            </div>

                <p>Prijs: €25.00</p>
                <button onclick="addToCart('Product 3', 25.00)">Voeg toe aan winkelwagen</button>
                <button class="Btn" onclick="prevSlide(this)">❮</button>
                <button class="Btn" onclick="nextSlide(this)">❯</button>
            </div>        
            
            <div class="product">
        <h3>Product 4</h3>      
            <div class="sliderContainer">
                <div class="slider">
                <div class="slide"><img class="img_pro" src="img/ik.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/koe.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/Naamloos.jpg"></div>
            </div>

                <p>Prijs: €30.00</p>
                <button onclick="addToCart('Product 4', 30.00)">Voeg toe aan winkelwagen</button>
                <button class="Btn" onclick="prevSlide(this)">❮</button>
                <button class="Btn" onclick="nextSlide(this)">❯</button>
            </div>
            
            <div class="product">
        <h3>Product 5</h3>      
            <div class="sliderContainer">
                <div class="slider">
                <div class="slide"><img class="img_pro" src="img/ik.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/koe.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/Naamloos.jpg"></div>
            </div>

                <p>Prijs: €50.00</p>
                <button onclick="addToCart('Product 5', 50.00)">Voeg toe aan winkelwagen</button>
                <button class="Btn" onclick="prevSlide(this)">❮</button>
                <button class="Btn" onclick="nextSlide(this)">❯</button>
            </div>                    

            <div class="product">
        <h3>Product 6</h3>      
            <div class="sliderContainer">
                <div class="slider">
                <div class="slide"><img class="img_pro" src="img/ik.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/koe.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/Naamloos.jpg"></div>
            </div>

                <p>Prijs: €27.50</p>
                <button onclick="addToCart('Product 6', 27.50)">Voeg toe aan winkelwagen</button>
                <button class="Btn" onclick="prevSlide(this)">❮</button>
                <button class="Btn" onclick="nextSlide(this)">❯</button>
            </div>
            
            <div class="product">
        <h3>Product 7</h3>      
            <div class="sliderContainer">
                <div class="slider">
                <div class="slide"><img class="img_pro" src="img/ik.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/koe.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/Naamloos.jpg"></div>
            </div>

                <p>Prijs: €99.99</p>
                <button onclick="addToCart('Product 7', 99.99)">Voeg toe aan winkelwagen</button>
                <button class="Btn" onclick="prevSlide(this)">❮</button>
                <button class="Btn" onclick="nextSlide(this)">❯</button>
            </div> 
            
            <div class="product">
        <h3>Product 8</h3>      
            <div class="sliderContainer">
                <div class="slider">
                <div class="slide"><img class="img_pro" src="img/ik.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/koe.jpg" ></div>
                <div class="slide"><img class="img_pro" src="img/Naamloos.jpg"></div>
            </div>

                <p>Prijs: €5.00</p>
                <button onclick="addToCart('Product 8', 5.00)">Voeg toe aan winkelwagen</button>
                <button class="Btn" onclick="prevSlide(this)">❮</button>
                <button class="Btn" onclick="nextSlide(this)">❯</button>
            </div>            
        </div>

        


</body>
</html>
