
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Rooms — Royal Cozy Haven</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- header -->
  <header class="site-header">
    <div class="container header-inner">
      <a href="index.php" class="brand">
        <img src="assets/logo.svg" alt="logo" class="logo">
        <span class="brand-name">ROYAL COZY HAVEN</span>
      </a>
      <nav class="main-nav" aria-label="Main navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="rooms.php" class="active">Rooms</a></li>
          <li><a href="amenities.php">Amenities</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a class="cta" href="login.php">Login</a></li>
        </ul>
      </nav>
      <button class="mobile-menu-btn" aria-expanded="false" aria-controls="mobileMenu" aria-label="Toggle navigation">☰</button>
    </div>
    <div id="mobileMenu" class="mobile-menu" hidden> <!-- same as before --> 
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="rooms.php">Rooms</a></li>
        <li><a href="amenities.php">Amenities</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </header>

  <main class="container">
    <section class="section-head">
      <h1>Rooms & Suites</h1>
      <p class="muted">Refined rooms to match every taste — from cozy classics to grand suites.</p>
    </section>

    <div class="card-grid">
      <article class="card large">
        <img src="assets/room-1.jpg" alt="">
        <div class="card-body">
          <h3>Deluxe Suite</h3>
          <p class="muted">Luxurious suite with sea view, lounge, and private balcony.</p>
          <ul class="room-features">
            <li>King bed</li>
            <li>Ensuite bathroom</li>
            <li>Complimentary breakfast</li>
          </ul>
          <div class="card-actions">
            <a class="btn btn-outline" href="reservation.php">View details</a>
            <a class="btn btn-primary" href="reservation.php">Reserve</a>
          </div>
        </div>
      </article>

      <article class="card large">
        <img src="assets/room-2.jpg" alt="">
        <div class="card-body">
          <h3>Cozy Classic</h3>
          <p class="muted">Comfortable room ideal for couples and short stays.</p>
          <ul class="room-features">
            <li>Queen bed</li>
            <li>City / garden view</li>
            <li>Tea & coffee station</li>
          </ul>
          <div class="card-actions">
            <a class="btn btn-outline" href="reservation.php">View details</a>
            <a class="btn btn-primary" href="reservation.php">Reserve</a>
          </div>
        </div>
      </article>

      <article class="card large">
        <img src="assets/room-3.jpg" alt="">
        <div class="card-body">
          <h3>Royal Loft</h3>
          <p class="muted">Spacious loft with rooftop access — perfect for longer stays.</p>
          <ul class="room-features">
            <li>King bed</li>
            <li>Rooftop lounge access</li>
            <li>Kitchenette</li>
          </ul>
          <div class="card-actions">
            <a class="btn btn-outline" href="reservation.php">View details</a>
            <a class="btn btn-primary" href="reservation.php">Reserve</a>
          </div>
        </div>
      </article>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <img src="assets/logo.svg" alt="" class="logo-small">
        <p>© <span id="year-rooms"></span> Royal Cozy Haven. All rights reserved.</p>
      </div>
      <div class="footer-links">
        <a href="privacy.php">Privacy</a>
        <a href="#">Terms</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>
  </footer>

  <script src="scripts.js"></script>
  <script>document.getElementById('year-rooms').textContent = new Date().getFullYear();</script>
</body>
</html>
