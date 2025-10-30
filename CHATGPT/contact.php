<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Contact — Royal Cozy Haven</title>
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
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php" class="active">Contact</a></li>
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
      <h1>Contact & Booking</h1>
      <p class="muted">Have questions? Want to reserve a room? Send us a message and we’ll get back promptly.</p>
    </section>

    <div class="contact-grid">
      <form id="contactForm" class="form card">
        <h3>Send a message</h3>
        <label for="name">Full name</label>
        <input id="name" name="name" type="text" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" required>

        <label for="phone">Phone (optional)</label>
        <input id="phone" name="phone" type="tel">

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <div class="form-actions">
          <button type="submit" class="btn btn-primary">Send message</button>
        </div>

        <p id="contactMsg" class="form-msg" aria-live="polite"></p>
      </form>

      <aside class="card contact-info">
        <h3>Contact Info</h3>
        <p><strong>Address:</strong> 123 Royal Avenue, City</p>
        <p><strong>Phone:</strong> +63 912 345 6789</p>
        <p><strong>Email:</strong> hello@royalcozyhaven.com</p>
        <div class="map-placeholder">Map placeholder (replace with iframe)</div>
      </aside>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <img src="assets/logo.svg" alt="" class="logo-small">
        <p>© <span id="year-contact"></span> Royal Cozy Haven. All rights reserved.</p>
      </div>
      <div class="footer-links">
        <a href="privacy.php">Privacy</a>
        <a href="#">Terms</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>
  </footer>

  <script src="scripts.js"></script>
  <script>document.getElementById('year-contact').textContent = new Date().getFullYear();</script>
</body>
</html>
