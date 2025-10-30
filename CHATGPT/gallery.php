<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Gallery — Royal Cozy Haven</title>
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
          <li><a href="rooms.php">Rooms</a></li>
          <li><a href="amenities.php">Amenities</a></li>
          <li><a href="gallery.php" class="active">Gallery</a></li>
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
      <h1>Gallery</h1>
      <p class="muted">A curated collection of interior shots, lounges, and guest rooms.</p>
    </section>

    <div class="masonry">
      <img src="assets/gallery-1.jpg" alt="">
      <img src="assets/gallery-2.jpg" alt="">
      <img src="assets/gallery-3.jpg" alt="">
      <img src="assets/gallery-4.jpg" alt="">
      <img src="assets/gallery-5.jpg" alt="">
      <img src="assets/gallery-6.jpg" alt="">
    </div>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <img src="assets/logo.svg" alt="" class="logo-small">
        <p>© <span id="year-gallery"></span> Royal Cozy Haven. All rights reserved.</p>
      </div>
      <div class="footer-links">
        <a href="privacy.php">Privacy</a>
        <a href="#">Terms</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>
  </footer>

  <script src="scripts.js"></script>
  <script>document.getElementById('year-gallery').textContent = new Date().getFullYear();</script>
</body>
</html>
