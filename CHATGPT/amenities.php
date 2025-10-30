<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Amenities — Royal Cozy Haven</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <!-- header -->
  <header class="site-header">
    <div class="container header-inner">
      <a href="index.html" class="brand">
        <img src="assets/logo.svg" alt="logo" class="logo">
        <span class="brand-name">ROYAL COZY HAVEN</span>
      </a>
      <nav class="main-nav" aria-label="Main navigation">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="rooms.php">Rooms</a></li>
          <li><a href="amenities.php" class="active">Amenities</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a class="cta" href="login.php">Login</a></li>
        </ul>
      </nav>
      <button class="mobile-menu-btn" aria-expanded="false" aria-controls="mobileMenu" aria-label="Toggle navigation">☰</button>
    </div>
    <div id="mobileMenu" class="mobile-menu" hidden> 
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
      <h1>Amenities</h1>
      <p class="muted">Enjoy our curated amenities designed for relaxation and convenience.</p>
    </section>

    <div class="amenities-grid">
      <div class="amenity">
        <h4>Complimentary Breakfast</h4>
        <p class="muted">Fresh local produce and chef-curated options each morning.</p>
      </div>
      <div class="amenity">
        <h4>Spa & Wellness</h4>
        <p class="muted">Massages, facials, and restorative experiences by appointment.</p>
      </div>
      <div class="amenity">
        <h4>Rooftop Lounge</h4>
        <p class="muted">Evening drinks and spectacular city views.</p>
      </div>
      <div class="amenity">
        <h4>Concierge</h4>
        <p class="muted">Local recommendations, reservations, and travel planning.</p>
      </div>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <img src="assets/logo.svg" alt="" class="logo-small">
        <p>© <span id="year-amenities"></span> Royal Cozy Haven. All rights reserved.</p>
      </div>
      <div class="footer-links">
        <a href="privacy.html">Privacy</a>
        <a href="#">Terms</a>
        <a href="contact.html">Contact</a>
      </div>
    </div>
  </footer>

  <script src="scripts.js"></script>
  <script>document.getElementById('year-amenities').textContent = new Date().getFullYear();</script>
</body>
</html>
