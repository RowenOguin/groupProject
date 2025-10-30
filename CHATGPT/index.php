<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Royal Cozy Haven — Home</title>

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">

  <style>
    /* ===== Elegant Cream Header ===== */
    .site-header {
      background-color: #FFF8F1; /* Cream white */
      color: #2B1B12; /* Dark brown text */
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .header-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 8%;
    }

    .brand {
      display: flex;
      align-items: center;
      text-decoration: none;
    }

    .brand-name {
      font-family: 'Playfair Display', serif;
      font-size: 1.4rem;
      font-weight: 700;
      color: #2B1B12;
      letter-spacing: 1px;
    }

    .logo {
      height: 50px;
      margin-right: 10px;
    }

    .main-nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      align-items: center;
    }

    .main-nav a {
      text-decoration: none;
      color: #2B1B12;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    .main-nav a:hover,
    .main-nav a.active {
      color: #8B5E3C;
      border-bottom: 2px solid #8B5E3C;
      padding-bottom: 4px;
    }

    .main-nav .cta {
      background-color: #8B5E3C;
      color: #FFF8F1;
      padding: 8px 14px;
      border-radius: 5px;
      transition: all 0.3s ease;
    }

    .main-nav .cta:hover {
      background-color: #2B1B12;
      color: #FFF8F1;
    }

    .mobile-menu-btn {
      display: none;
    }

    @media (max-width: 768px) {
      .main-nav ul {
        display: none;
      }
      .mobile-menu-btn {
        display: block;
        font-size: 1.5rem;
        background: none;
        border: none;
        cursor: pointer;
      }
    }

    /* Optional: smooth hero transition below header */
    .hero {
      margin-top: 0;
    }
  </style>
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a href="index.php" class="brand" aria-label="Royal Cozy Haven Home">
        <img src="logo.png" alt="Royal Cozy Haven logo" class="logo">
        <span class="brand-name">ROYAL COZY HAVEN</span>
      </a>

      <nav class="main-nav" aria-label="Main navigation">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="rooms.php">Rooms</a></li>
          <li><a href="amenities.php">Amenities</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a class="cta" href="register.php">Register</a></li>
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
        <li><a href="db/db_connect.php">Book</a></li>
      </ul>
    </div>
  </header>

  <main>
    <!-- HERO -->
    <section class="hero">
      <img class="hero-bg" src="assets/hero-1.jpg" alt="Luxurious cozy interior">
      <div class="hero-overlay"></div>
      <div class="container hero-content">
        <h1>Welcome to Royal Cozy Haven</h1>
        <p class="lead">Where regal elegance meets warm comfort. Book your restful escape with us.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="rooms.php">Explore Rooms</a>
          <a class="btn btn-ghost" href="gallery.php">View Gallery</a>
        </div>
      </div>
    </section>

    <!-- FEATURES -->
    <section class="container features">
      <article class="feature">
        <h3>Luxury Suites</h3>
        <p>Spacious rooms with carefully curated decor for a royal stay.</p>
      </article>
      <article class="feature">
        <h3>Cozy Lounges</h3>
        <p>Relax in elegantly lit lounges and reading nooks.</p>
      </article>
      <article class="feature">
        <h3>Personal Service</h3>
        <p>Dedicated staff for personalized hospitality and concierge services.</p>
      </article>
    </section>

    <!-- ROOMS HIGHLIGHT -->
    <section class="container rooms-preview">
      <header class="section-head">
        <h2>Featured Rooms</h2>
        <a href="rooms.php" class="view-all">View all rooms →</a>
      </header>

      <div class="card-grid">
        <article class="card">
          <img src="assets/room-1.jpg" alt="Deluxe Suite">
          <div class="card-body">
            <h4>Deluxe Suite</h4>
            <p class="muted">King bed • 45 m² • Sea view</p>
            <div class="card-actions">
              <a class="btn btn-outline" href="rooms.php">Details</a>
              <a class="btn btn-primary" href="contact.php">Book</a>
            </div>
          </div>
        </article>

        <article class="card">
          <img src="assets/room-2.jpg" alt="Cozy Classic">
          <div class="card-body">
            <h4>Cozy Classic</h4>
            <p class="muted">Queen bed • 30 m² • Garden view</p>
            <div class="card-actions">
              <a class="btn btn-outline" href="rooms.php">Details</a>
              <a class="btn btn-primary" href="contact.php">Book</a>
            </div>
          </div>
        </article>

        <article class="card">
          <img src="assets/room-3.jpg" alt="Royal Loft">
          <div class="card-body">
            <h4>Royal Loft</h4>
            <p class="muted">King bed • 65 m² • Rooftop access</p>
            <div class="card-actions">
              <a class="btn btn-outline" href="rooms.php">Details</a>
              <a class="btn btn-primary" href="contact.php">Book</a>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- GALLERY PREVIEW -->
    <section class="container gallery-preview">
      <header class="section-head">
        <h2>Gallery</h2>
        <a href="gallery.php" class="view-all">See more →</a>
      </header>

      <div class="gallery-grid">
        <img src="assets/g-1.jpg" alt="">
        <img src="assets/g-2.jpg" alt="">
        <img src="assets/g-3.jpg" alt="">
      </div>
    </section>

    <!-- TESTIMONIAL / CTA -->
    <section class="container cta-block">
      <div class="cta-inner">
        <div>
          <h3>Experience luxury and comfort</h3>
          <p class="muted">Reserve your stay today and enjoy exclusive benefits for early bookings.</p>
        </div>
        <a class="btn btn-primary large" href="contact.php">Reserve Now</a>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <img src="assets/logo.svg" alt="" class="logo-small">
        <p>© <span id="year"></span> Royal Cozy Haven. All rights reserved.</p>
      </div>

      <div class="footer-links">
        <a href="privacy.php">Privacy</a>
        <a href="#">Terms</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>
  </footer>

  <script src="scripts.js"></script>
  <script>document.getElementById('year').textContent = new Date().getFullYear();</script>
</body>
</html>
