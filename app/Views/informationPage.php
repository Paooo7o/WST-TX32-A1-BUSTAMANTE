<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<!-- <div>
    <h1>Information</h1>
</div> -->

<section id="ExpEtihad">
    <h2>Experience Etihad</h2>
    <h3>Always the best seat on board</h3>
    <div style="display: flex; justify-content: space-around;">
        <img src="assets/images/Etihad-Economy.png" alt="Economy" class="Classes">
        <p>Choice, value and an experience that is designed exclusively around you. <a href="economy.html">Economy</a>
        </p>
        <img src="assets/images/Etihad-Business.png" alt="Business" class="Classes">
        <p>Work when you want, sleep when you need to and dine whenever you're ready. <a
                href="economy.html">Business</a></p>
        <img src="assets/images/Etihad-First.png" alt="First" class="Classes">
        <p>Close the sliding doors and immerse yourself into your private suite. <a href="economy.html">First</a></p>
    </div>
</section>

<section id="Fleet">
    <h2>Our Fleet</h2>
    <p>Our sophisticated fleet of aircraft represents the ultimate in performance and operational efficiency. From cargo
        aircraft to our new-generation Boeing 787, the Etihad fleet is one of the most advanced in the world.

        On board, you’ll experience choice, comfort and leading hospitality, with cleverly designed seats, the latest
        entertainment and mouth-watering food.

        We’re also taking positive strides to becoming much greener. We’ve reduced plastic on all of our flights and
        significantly cut fuel emissions as we work towards becoming an even more sustainable airline.</p>
    <h3>Current Fleet</h3>
    <!-- <div style="display: flex; justify-content: space-around;"> -->
    <div>
        <img src="assets/images/Airbus-A380.png" alt="A380F" class="FleetsClass">
        <h4>Airbus A380 Family</h4>
        <li>Number of Aircraft: 4</li>
        <li>Capacity: up to 486 pax</li>
        <li>Range: up to 15,200 km</li>
        <li><a href="seatmap.html">Seat Maps: A380-800</a></li>

        <img src="assets/images/Airbus-A350.png" alt="A350F" class="FleetsClass">
        <h4>Airbus A350 Family</h4>
        <li>Number of Aircraft: 5</li>
        <li>Capacity: up to 371 pax</li>
        <li>Range: up to 16,100 km</li>
        <li><a href="seatmap.html">Seat Maps: A350-1000</a></li>

        <img src="assets/images/Airbus-A320.png" alt="A320F" class="FleetsClass">
        <h4>Airbus A320 Family</h4>
        <li>Number of Aircraft: 29</li>
        <li>Capacity: up to 223 pax</li>
        <li>Range: up to 6,500 km</li>
        <li><a href="seatmap.html">Seat Maps: A321-200, A320-200 (v2), A320 (v1)</a></li>

        <img src="assets/images/Boeing-787.png" alt="Boeing787F" class="FleetsClass">
        <h4>Boeing 787 Family</h4>
        <li>Number of Aircraft: 10</li>
        <li>Capacity: 300</li>
        <li>Range: 8000 km</li>
        <li><a href="seatmap.html">Seat Maps: B787-9 (2 class v1), B787-9 (2-class V2),
                B787-9 (3 class), B787-10 (2 class)</a></li>

        <img src="assets/images/Boeing-777.png" alt="Boeing777F" class="FleetsClass">
        <h4>Boeing 777 Family</h4>
        <li>Number of Aircraft: 9</li>
        <li>Capacity: up to 402 pax</li>
        <li>Range: up to 15,900 km</li>
        <li><a href="seatmap.html">Seat Maps: B777-300ER (2-class v1), B777-300ER (2-class v2),
                B777-300ER (3-class)</a></li>
    </div>
</section>

<section id="Fleet">
    <h3>Cargo Fleet</h3>
    <div>
        <img src="assets/images/BoeingC-777.png" alt="Boeing777C" class="FleetsClass">
        <h4>Boeing 777 Freighter</h4>
        <li>Number of Aircraft: 5</li>
        <li>Capacity: 102,800 kg</li>
        <li>Range: 9,000 km</li>
    </div>
</section>

<?= $this->endsection('contents') ?>