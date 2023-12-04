<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>zweetz</title>
</head>
<script src="script.js"></script>
<body>
    <header class="nav-balk">
        <div>a</div>
        <div class="nav-balk">
            <div class="nav-items">
                <a href="#">Home</a>
                <a href="#">Producten</a>
                <a href="#">about</a>
            </div>
            <div class="winkelkarretje">
                <img id="karretje" src="img/winkelkartje.png">
            </div>
        </div>
    </header>

    <section id="producten">
        <!-- Producten worden hier weergegeven -->
        <div class="product">
            <h3>Product 1</h3>
            <p>Prijs: $10.00</p>
            <button onclick="addToCart('Product 1', 10.00)">Voeg toe aan winkelwagen</button>
        </div>
        <div class="product">
            <h3>Product 2</h3>
            <p>Prijs: $15.00</p>
            <button onclick="addToCart('Product 2', 15.00)">Voeg toe aan winkelwagen</button>
        </div>
        <!-- Voeg meer producten toe zoals hierboven -->
    </section>

    <section id="winkelwagen">
        <h2>Winkelwagen</h2>
        <ul id="winkelwagen-lijst">
            <!-- Winkelwagenitems worden hier weergegeven -->
        </ul>
        <p>Totaal: <span id="totaal-bedrag">0.00</span> EUR</p>
        <button href="#">Afrekenen</button>
    </section>
</body>
</html>
