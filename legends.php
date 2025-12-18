<?php
$legends = [
    [
        "name" => "Ciise abdi",
        "nickname" => "The Golden Foot",
        "bio" => "A legendary striker who carried the hopes of a nation on his shoulders during the toughest tournaments."
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ocean Stars FC | Legends</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <div class="logo">OCEAN STARS FC</div>
    <nav>

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

<section class="hero">
    <h1>Legends of the Horn</h1>
    <p>Honoring the players who paved the way.</p>
</section>

<section class="cards">
    <?php foreach ($legends as $legend): ?>
        <div class="card">
            <div class="badge">🏅</div>
            <h3><?= $legend['name']; ?></h3>
            <span><?= $legend['nickname']; ?></span>
            <p><?= $legend['bio']; ?></p>
        </div>
    <?php endforeach; ?>
</section>

<footer>
    <p>© 2026 Ocean Stars Football Club. All rights reserved.</p>
</footer>

<script src="script.js"></script>
</body>
</html>