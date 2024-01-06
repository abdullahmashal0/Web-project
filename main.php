<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Booking</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<header>
    <div class="logo"><h2> Travel Booking</h2></div>
 
  <ul>
    <li>  <a class="user" href="signin.php">sign in </a></li>
    <li>    <a class="user" href="signup.php">register</a></li>
  
  </ul>
    </div>
   
</header>

<section class="hero">
    <!-- Hero content goes here -->
    <div class="search-bar">
        <input type="text" placeholder="Enter destination">
        <input type="date" placeholder="Check-in">
        <input type="date" placeholder="Check-out">
        <input type="number" placeholder="Guests">
        <button id="search-btn">Search</button>
    </div>
</section>
<br>
<h2> Offers In Egypt : </h2>
<p>Promotions, deals and special offers for you</p>
<br>
<section class="search-results">
    <!-- Search results go here -->
    <ul id="hotels"> <li style="margin-left:5%;">
    <div class="./photos/result-item" >
        <img src="hotel.webp" alt="Hotel Image">
        <h3>Grand towers</h3>
        <br>
        <p> from 1200 EGP </p>
        <br>
        <p>"Savor Nile views, luxury, and serenity in our riverside retreat."</p>
        <br>
        <button id="book-btn">Book Now</button>
    </div>
    </li>
    <li>
    <div class="result-item">
        <img src="./photos/room.jpeg" alt="Hotel Image">
        <h3>swiss in </h3>
        <br>
        <p> from 3200 EGP </p>
        <br>
        <p>"Savor Nile views, luxury, and serenity in our riverside retreat."</p>
        <br>
        <button id="book-btn">Book Now</button>
    </div>
    </li>
    <li>
    <div class="result-item">
        <img src="./photos/conrad.jpeg" alt="Hotel Image">
        <h3>Tulip</h3>
        <br>
        <p> from 1100 EGP </p>
        <br>
        <p>"Savor Nile views, luxury, and serenity in our riverside retreat."</p>
        <br>
        <button id="book-btn">Book Now</button>
    </div>
    </li>
    <li>
    <div class="result-item">
        <img src="./photos/seasons.jpeg" alt="Hotel Image">
        <h3>FourSeasons</h3>
        <br>
        <p> from 2000 EGP </p>
        <br>
        <p>"Savor Nile views, luxury, and serenity in our riverside retreat."</p>
        <br>
        <button id="book-btn">Book Now</button>
    </div>
    </li>
    <li>
    <div class="result-item">
        <img src="./photos/hotel1.jpeg" alt="Hotel Image">
        <h3>Sunrise diamond </h3>
        <br>
        <p> from 2200 EGP </p>
        <br>
        <p>"Savor Nile views, luxury, and serenity in our riverside retreat."</p>
        <br>
        <button id="book-btn">Book Now</button>
    </div>
    </li>
   
</ul>
    
    
    
    <!-- Repeat for other results -->
</section>
<br>
<br>
<h2>Explore Wonderful Egypt :  </h2>
<br>
<section class="featured-section">
    <ul>
        <li>
            <div class="fe-item">
                <span> <h3>Cairo</h3></span>
                <img src="./photos/cairo.jpeg" alt="" class="imgs">
            </div>
        </li>
        <li>
            <div class="fe-item">
                <span> <h3>Siwa</h3></span>
                <img src="./photos/siwa.jpeg" alt="" class="imgs">
            </div>
        </li>
        <li>
            <div class="fe-item">
                <span> <h3>Sharm Elsheikh</h3></span>
                <img src="./photos/sharm.jpeg" alt="" class="imgs">
            </div>
        </li>
    
    </ul>
</section>

<br><br>
<footer>
    <div class="footer-links">
        <ul>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    <div class="social-media-links">
        <a href="#" ><i class="fab fa-facebook-f"></i></a>
        <a href="#" ><i class="fab fa-twitter"></i></a>
        <a href="#" ><i class="fab fa-instagram"></i></a>
    </div>
    <div class="app-download">
        <p style="color:white;">Download our app</p>
        <button>Download</button>
    </div>
</footer>
</body>
</html>
