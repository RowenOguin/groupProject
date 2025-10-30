<?php
// config.php - keep this file private (outside webroot if possible)

// Database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'royal_cozy');


// Admin basic-auth credentials for admin.php (change username & strong password)
define('ADMIN_USER', 'adminuser');
define('ADMIN_PASS', 'replace_with_strong_password');

// SMTP (PHPMailer) - fill these on the server only
define('SMTP_HOST', 'smtp.gmail.com');       // usually smtp.gmail.com
define('SMTP_PORT', 587);                    // 587 (TLS) or 465 (SSL)
define('SMTP_USER', 'your-sender@gmail.com'); // sender email (Gmail)
define('SMTP_PASS', 'YOUR_APP_PASSWORD');     // Gmail App Password (DO NOT share)

// Email addresses & names
define('FROM_EMAIL', 'no-reply@yourdomain.com'); // ideally same domain
define('FROM_NAME', 'Royal Cozy Haven Reservations');
define('ADMIN_EMAIL', 'joreyoguin@gmail.com');   // notifications to owner

// Site
define('SITE_NAME', 'Royal Cozy Haven');
