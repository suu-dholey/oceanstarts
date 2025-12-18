


<?php
require_once 'config.php';

/* Soo saarodciyartoyda dhaman */
$stmt = $pdo->query("SELECT * FROM players ORDER BY created_at DESC");
$players = $stmt->fetchAll();

/* Xulid position ahaan */
$players_by_position = [];
foreach ($players as $p) {
    $position = strtolower(trim($p['position']));
    $players_by_position[$position][] = $p;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>First Team - Ocean Stars FC</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="styles.css">
</head>
<body>



<?php include 'index_navbar_stub.php'; ?>

<main class="container page">
  <h1 class="page-title">First Team Squad</h1>
  <p class="subtitle">Meet the Ocean Stars representing us on the pitch.</p>

  <?php foreach ($players_by_position as $position => $group): ?>
    
    <h2 class="section-title"><?= ucfirst($position) ?>s</h2>

    <div class="cards-row">
      <?php foreach ($group as $p): ?>
        <article class="player-card">
          
          <div class="card-top">
            <div class="card-gradient"></div>
            <div class="avatar">
              <img src="assets/avatar-placeholder.png" alt="avatar">
            </div>
            <div class="name-area">
              <h3><?= htmlspecialchars($p['full_name']) ?></h3>
              <span class="role"><?= htmlspecialchars($p['position']) ?></span>
            </div>
          </div>

          <div class="card-body">
            <div class="meta">
              <div class="meta-row">
                <strong>Age:</strong> <?= (int)$p['age'] ?>
              </div>
              <div class="status <?= strtolower($p['status']) ?>">
                <?= htmlspecialchars($p['status']) ?>
              </div>
            </div>

            <p class="bio">
              <?= nl2br(htmlspecialchars($p['bio'])) ?>
            </p>
          </div>

        </article>
      <?php endforeach; ?>
    </div>

  <?php endforeach; ?>
</main>

<footer class="site-footer">
  <div class="container footer-inner">
    <div>
      <h4>Ocean Stars FC</h4>
      <p>Building the future of Somali football.</p>
    </div>
    <div class="footer-links">
      <div>
        <strong>CLUB</strong><br>
        History<br>
        Stadium<br>
        Staff
      </div>
      <div>
        <strong>CONTACT</strong><br>
        info@oceanstars.so<br>
        Mogadishu, Somalia
      </div>
    </div>
  </div>
</footer>

<script src="script.js"></script>
</body>
</html>



