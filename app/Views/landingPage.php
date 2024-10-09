<?= $this->extend('layout/main') ?>

<?= $this->section('contents') ?>

<?= $this->include('components/landing/hero_section') ?>

<div>
    <h1>Landing</h1>
</div>

<!-- section.hero>(.left>(h3>lorem3)+(p>lorem50))+.right>((h4>lorem5)+(p>lorem100))*3 -->

<section id="Intro">
    <h2>Introduction</h2>
    <p>Welcome to our landing page. Here you will find the best deals and information about our services.</p>
</section>

<section id="WhyUs">
    <h2>Why Travel with Us</h2>
    <p>We offer unparalleled services and benefits that make your travel experience exceptional. Here are some reasons why you should choose us:</p>
    <table class="table">
        <thead>
            <tr>
                <th>BENEFITS</th>
                <th>Online Travel Sites</th>
                <th>Etihad</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Deals and discounted fares</td>
                <td>&#10004;</td>
                <td>&#10004;</td>
            </tr>
            <tr>
                <td>Multiple payment options</td>
                <td>&#10004;</td>
                <td>&#10004;</td>
            </tr>
            <tr>
                <td>No hidden charges or credit card fees</td>
                <td></td>
                <td>&#10004;</td>
            </tr>
            <tr>
                <td>Discounts on seats, bags, lounge access and more</td>
                <td></td>
                <td>&#10004;</td>
            </tr>
            <tr>
                <td>24/7 support</td>
                <td></td>
                <td>&#10004;</td>
            </tr>
            <tr>
                <td>Manage your flight bookings directly</td>
                <td></td>
                <td>&#10004;</td>
            </tr>
            <tr>
                <td>Make changes and request refunds directly</td>
                <td></td>
                <td>&#10004;</td>
            </tr>
            <tr>
                <td>Earn and spend Etihad Guest Miles</td>
                <td></td>
                <td>&#10004;</td>
            </tr>
            <tr>
                <td>Real-time flight updates</td>
                <td></td>
                <td>&#10004;</td>
            </tr>
            
        </tbody>
    </table>
</section>

<section id="Flights">
    <h2>Flights</h2>
    <div id="carouselFlights" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h3>Abu Dhabi</h3>
                <p>Discover the beauty of Abu Dhabi with our exclusive deals.</p>
            </div>
            <div class="carousel-item">
                <h3>Manila</h3>
                <p>Explore the vibrant city of Manila with our special offers.</p>
            </div>
            <div class="carousel-item">
                <h3>London</h3>
                <p>Experience the charm of London with our unbeatable prices.</p>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselFlights" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselFlights" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section id="Deals">
    <h2>Never Miss our Deals!</h2>
    <p>Make the most of your travel experiences with our offers, get our latest updates and more by subscribing to our alerts.</p>
    <form>
        <div class="form-group">
            <label for="contactMethod">Contact Method</label>
            <select class="form-control" id="contactMethod">
                <option>Whatsapp</option>
                <option>Email</option>
                <option>Both</option>
            </select>
        </div>
    </form>
</section>

<?= $this->endsection('contents') ?>