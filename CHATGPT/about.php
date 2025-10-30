<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | Royal Cozy Haven</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css" />
  <style>
    /* Elegant additions for About page */
    .about-hero {
      position: relative;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      overflow: hidden;
      border-radius: 0 0 40px 40px;
    }

    .about-hero img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(0.5);
    }

    .about-hero h1 {
      font-family: "Playfair Display", serif;
      font-size: 3rem;
      letter-spacing: 1px;
      margin-bottom: 0.4em;
    }

    .about-hero p {
      font-size: 1.2rem;
      font-weight: 400;
      max-width: 700px;
      text-align: center;
    }

    .about-story,
    .mission-vision,
    .core-values,
    .team-section,
    .cta-banner {
      margin: 70px auto;
      max-width: 1100px;
      line-height: 1.7;
      color: #333;
    }

    .about-story h2,
    .mission-vision h2,
    .core-values h2,
    .team-section h2 {
      font-family: "Playfair Display", serif;
      font-size: 2.2rem;
      color: #8b5e3c;
      text-align: center;
      margin-bottom: 20px;
    }

    .about-story p {
      text-align: justify;
      margin-bottom: 1em;
    }

    .mission-vision {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: space-between;
    }

    .mv-box {
      flex: 1 1 45%;
      background: #fffaf5;
      padding: 25px 30px;
      border-radius: 14px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    .mv-box h3 {
      color: #8b5e3c;
      font-family: "Playfair Display", serif;
      margin-bottom: 10px;
    }

    .core-values {
      text-align: center;
    }

    .values-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .value-item {
      background: #ffffff;
      border-radius: 14px;
      padding: 20px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
    }

    .value-item h4 {
      color: #8b5e3c;
      font-family: "Playfair Display", serif;
      margin-bottom: 8px;
    }

    .team-section .team-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 30px;
      margin-top: 30px;
    }

    .team-member {
      background: #fff;
      border-radius: 16px;
      padding: 20px;
      box-shadow: 0 4px 18px rgba(0, 0, 0, 0.05);
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .team-member:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
    }

    .team-member img {
      width: 100%;
      height: 230px;
      object-fit: cover;
      border-radius: 12px;
      margin-bottom: 12px;
    }

    .team-member h4 {
      margin: 8px 0 4px;
      font-family: "Playfair Display", serif;
      color: #8b5e3c;
    }

    .cta-banner {
      background: linear-gradient(135deg, #8b5e3c, #c89b6f);
      color: white;
      text-align: center;
      padding: 60px 20px;
      border-radius: 20px;
    }

    .cta-banner h2 {
      font-family: "Playfair Display", serif;
      font-size: 2rem;
      margin-bottom: 10px;
    }

    .cta-banner a {
      display: inline-block;
      margin-top: 15px;
      background: white;
      color: #8b5e3c;
      text-decoration: none;
      font-weight: 600;
      padding: 10px 22px;
      border-radius: 10px;
      transition: background 0.3s;
    }

    .cta-banner a:hover {
      background: #f4e9dd;
    }

    @media (max-width: 768px) {
      .mission-vision {
        flex-direction: column;
      }

      .mv-box {
        flex: 1 1 100%;
      }
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="site-header">
    <div class="container header-inner">
      <div class="brand">
        <img src="logo-placeholder.png" alt="Royal Cozy Haven" class="logo" />
        <span class="brand-name">ROYAL COZY HAVEN</span>
      </div>
      <nav class="main-nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php" class="active">About</a></li>
          <li><a href="rooms.php">Rooms</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="about-hero">
    <img src="about-hero.jpg" alt="Elegant hotel interior" />
    <div class="hero-content">
      <h1>About Royal Cozy Haven</h1>
      <p>Where timeless elegance and cozy comfort meet — creating moments you’ll always remember.</p>
    </div>
  </section>

  <!-- Story -->
  <section class="about-story">
    <h2>Our Story</h2>
    <p>
      Founded in 2015, Royal Cozy Haven began as a simple dream — to create a sanctuary where luxury feels like home.
      Our founders believed that every guest deserves not just comfort, but care and sophistication in every detail.
    </p>
    <p>
      Today, we are known for blending royal-inspired architecture with modern hospitality. Every stay is a journey
      through calm, charm, and class — from our signature suites to the warm smiles of our staff.
    </p>
  </section>

  <!-- Mission and Vision -->
  <section class="mission-vision">
    <div class="mv-box">
      <h3>Our Mission</h3>
      <p>
        To deliver unforgettable experiences by combining refined elegance with heartfelt hospitality,
        ensuring that every guest feels valued, relaxed, and truly at home.
      </p>
    </div>
    <div class="mv-box">
      <h3>Our Vision</h3>
      <p>
        To become the most beloved boutique haven in the region — a place where grace, comfort, and excellence come together naturally.
      </p>
    </div>
  </section>

  <!-- Core Values -->
  <section class="core-values">
    <h2>Our Core Values</h2>
    <div class="values-grid">
      <div class="value-item">
        <h4>Warm Hospitality</h4>
        <p>We welcome every guest with open hearts and genuine smiles.</p>
      </div>
      <div class="value-item">
        <h4>Excellence</h4>
        <p>Every detail is crafted with precision and passion to exceed expectations.</p>
      </div>
      <div class="value-item">
        <h4>Integrity</h4>
        <p>Honesty and transparency guide all that we do — with guests and team alike.</p>
      </div>
      <div class="value-item">
        <h4>Elegance</h4>
        <p>We believe true luxury is found in simplicity, grace, and comfort.</p>
      </div>
    </div>
  </section>

  <!-- Meet the Team -->
  <section class="team-section">
    <h2>Meet Our Team</h2>
    <div class="team-grid">
      <div class="team-member">
        <img src="team1.jpg" alt="General Manager">
        <h4>Maria Santos</h4>
        <p>General Manager</p>
      </div>
      <div class="team-member">
        <img src="team2.jpg" alt="Head Chef">
        <h4>James Cruz</h4>
        <p>Head Chef</p>
      </div>
      <div class="team-member">
        <img src="team3.jpg" alt="Front Desk Officer">
        <h4>Ella Reyes</h4>
        <p>Front Desk Officer</p>
      </div>
      <div class="team-member">
        <img src="team4.jpg" alt="Housekeeping Lead">
        <h4>Mark Dela Cruz</h4>
        <p>Housekeeping Lead</p>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="cta-banner">
    <h2>Experience True Comfort and Royalty</h2>
    <p>Book your stay today and discover why guests call us their home away from home.</p>
    <a href="rooms.php">Explore Our Rooms</a>
  </section>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container footer-inner">
      <p>© <span id="year"></span> Royal Cozy Haven. All rights reserved.</p>
    </div>
  </footer>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();
  </script>
</body>
</html>
