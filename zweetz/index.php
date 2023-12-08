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
        <div id="navbalk">  
            <p></p>
            <div class="nav-items">
                <a href="#">Home</a>
                <a href="#">Producten</a>
                <a href="#">about</a>

            </div>
            <div> 
            <div class="winkelkarretje">
                <img id="karretje" onclick="winkelwagenmin()" src="img/winkelkartje.png">
            
            </div>
            
            </div>
        </div>

    </header>
    <div id="alles">
        <P></P>
        <div id="ont-winkelwagen">
        <div id="winkelwagen">
                <h2>Winkelwagen</h2>
                <ul id="winkelwagen-lijst">
                <!-- Winkelwagenitems worden hier weergegeven -->
                </ul>
                <p>Totaal: <span id="totaal-bedrag">0.00</span> </p>
                <button href="#">Afrekenen</button>
                <script src="script.js"></script>
            </div>
        </div>
        <div id="producten">
            <!-- Producten worden hier weergegeven -->
            <div class="product">
                <h3>Product 1</h3>
                <p>Prijs: €10.00</p>
                <button onclick="addToCart('Product 1', 10.00)">Voeg toe aan winkelwagen</button>
            </div>
            <div class="product">
                <h3>Product 2</h3>
                <p>Prijs: €15.00</p>
                <button onclick="addToCart('Product 2', 15.00)">Voeg toe aan winkelwagen</button>
            </div>
            <div class="product">
                <h3>Product 3</h3>
                <p>Prijs: €20.00</p>
                <button onclick="addToCart('Product 3', 20.00)">Voeg toe aan winkelwagen</button>
            </div>
            <div class="product">
                <h3>Product 4</h3>
                <p>Prijs: €25.00</p>
                <button onclick="addToCart('Product 4', 25.00)">Voeg toe aan winkelwagen</button>
            </div>
            <div class="product">
                <h3>Product 5</h3>
                <p>Prijs: €30.00</p>
                <button onclick="addToCart('Product 5', 30.00)">Voeg toe aan winkelwagen</button>
            </div>
            <div class="product">
                <h3>Product 6</h3>
                <p>Prijs: €35.00</p>
                <button onclick="addToCart('Product 6', 35.00)">Voeg toe aan winkelwagen</button>
            </div>
            
            
        </div>
    </div>


</body>
</html>
