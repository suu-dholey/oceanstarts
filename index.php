




<!-- 



<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ocean Stars FC</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="styles.css">
</head>
<body>



<!-- NAV -->
<header class="site-header">
  <div class="container header-inner">
    <div class="brand">
      <div class="logo-circle">OS</div>
      <div class="brand-text">
        <strong>OCEAN STARS FC</strong>
        <small>2025</small>
      </div>
    </div>

    <nav class="top-nav">
      <a href="index.php" class="nav-link active">Home</a>
      <a href="first_team.php" class="nav-link">First Team</a>
      <a href="register_player.php" class="nav-link">Join as Player</a>
      <a href="coach_assister.php" class="nav-link">coach_assister</a>
      <a href="register_coach.php" class="nav-link">Join as Coach</a>
      <a href="legends.php" class="nav-link">Legends</a>
      <a href="logout.php" class="nav-link"> Logout</a>
    </nav>
  </div>
</header>
<?php

?>

<!-- HERO -->
<main>
  <section class="hero">
    <div class="hero-overlay">
      <h1>OCEAN <span>STARS</span></h1>
      <p>The heartbeat of Somali football. Join the legacy, train with the best, and become a legend.</p>
      <div class="hero-btns">
        <a class="btn btn-primary" href="first_team.php">Meet the Team</a>
        <a class="btn btn-ghost" href="register_player.php">Join Us</a>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="card">
      <div class="icon">🏆</div>
      <h3>Championship History</h3>
      <p>From regional tournaments to national glory, explore our trophy cabinet and rich history.</p>
    </div>

    <div class="card">
      <div class="icon">👤</div>
      <h3>Professional Development</h3>
      <p>Our youth academy provides world-class training facilities and expert coaching staff.</p>
    </div>

    <div class="card">
      <div class="icon">📍</div>
      <h3>Home Ground</h3>
      <p>We play our home matches at Mogadishu Stadium. Come support the Ocean Stars!</p>
    </div>
  </section>
</main>




<!-- FOOTER -->
<footer class="site-footer">
  <div class="container footer-inner">
    <div>
      <h4>Ocean Stars FC</h4>
      <p>Building the future of Somali football.</p>
    </div>
    <div class="footer-links">
      <div><strong>CLUB</strong><br>History<br>Stadium<br>Staff</div>
      <div><strong>CONTACT</strong><br>info@oceanstars.so<br>Mogadishu, Somalia</div>
    </div>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html> -->

<?php
session_start();
require_once 'config.php';

/* LOGIN CHECK – FIRST */
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Ocean Stars FC</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

