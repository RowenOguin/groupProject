<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login — Royal Cozy Haven</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="container header-inner">
      <a href="index.php" class="brand">
        <img src="assets/logo.svg" alt="logo" class="logo">
        <span class="brand-name">ROYAL COZY HAVEN</span>
      </a>
    </div>
  </header>

  <main class="container auth-page">
    <section class="card auth-card">
      <h1>Sign in</h1>
      <p class="muted">Welcome back — log in to manage your bookings.</p>

      <form id="loginForm" class="form">
        <label for="emailLogin">Email</label>
        <input id="emailLogin" name="email" type="email" required>

        <label for="passwordLogin">Password</label>
        <input id="passwordLogin" name="password" type="password" required minlength="6">

        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Sign in</button>
        </div>

        <p class="muted">Don't have an account? <a href="register.html">Create one</a></p>
        <p id="loginMsg" class="form-msg" aria-live="polite"></p>
      </form>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <img src="assets/logo.svg" alt="" class="logo-small">
        <p>© <span id="year-login"></span> Royal Cozy Haven.</p>
      </div>
    </div>
  </footer>

  <script src="scripts.js"></script>
  <script>document.getElementById('year-login').textContent = new Date().getFullYear();</script>
</body>
</html>
