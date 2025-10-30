<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Register — Royal Cozy Haven</title>
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
      <h1>Create account</h1>
      <p class="muted">Sign up to manage bookings and view member-only offers.</p>

      <form id="registerForm" class="form">
        <label for="fullName">Full name</label>
        <input id="fullName" name="fullName" type="text" required>

        <label for="emailReg">Email</label>
        <input id="emailReg" name="emailReg" type="email" required>

        <label for="passwordReg">Password</label>
        <input id="passwordReg" name="passwordReg" type="password" required minlength="6">

        <label for="confirmPassword">Confirm password</label>
        <input id="confirmPassword" name="confirmPassword" type="password" required minlength="6">

        <div class="form-actions">
          <button class="btn btn-primary" type="submit">Create account</button>
        </div>

        <p class="muted">Already have an account? <a href="login.php">Sign in</a></p>
        <p id="registerMsg" class="form-msg" aria-live="polite"></p>
      </form>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-brand">
        <img src="assets/logo.svg" alt="" class="logo-small">
        <p>© <span id="year-register"></span> Royal Cozy Haven.</p>
      </div>
    </div>
  </footer>

  <script src="scripts.js"></script>
  <script>document.getElementById('year-register').textContent = new Date().getFullYear();</script>
</body>
</html>
