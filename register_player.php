<?php
require_once 'config.php';
$errors = [];
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['full_name'] ?? '');
    $age = intval($_POST['age'] ?? 0);
    $position = trim($_POST['position'] ?? '');
    $bio = trim($_POST['bio'] ?? '');

    if ($name === '' || $position === '') {
        $errors[] = "Full name and position are required.";
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare("INSERT INTO players (full_name, position, age, status, bio) VALUES (?, ?, ?, 'Active', ?)");
        $stmt->execute([$name, $position, $age ?: null, $bio]);
        $success = "Application submitted successfully. Mahadsanid!";
        // clear form
        $_POST = [];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Join as Player - Ocean Stars FC</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="styles.css">
</head>







<body>
<?php include 'index_navbar_stub.php'; ?>

<main class="container page">
  <div class="register-card">
    <div class="register-header">
      <h2>Player Registration</h2>
      <p>Submit your details for trial consideration.</p>
    </div>

    <?php if ($errors): ?>
      <div class="errors"><?=implode('<br>', array_map('htmlspecialchars', $errors))?></div>
    <?php elseif ($success): ?>
      <div class="success"><?=htmlspecialchars($success)?></div>
    <?php endif; ?>

    <form method="post" class="register-form">
      <div class="row">
        <div class="col"><label>Full Name</label><input name="full_name" value="<?=htmlspecialchars($_POST['full_name'] ?? '')?>" required></div>
        <div class="col"><label>Age</label><input name="age" type="number" value="<?=htmlspecialchars($_POST['age'] ?? '')?>"></div>
      </div>

      <label>Preferred Position</label>
      <select name="position">
        <option <?= (($_POST['position'] ?? '')=='Forward')?'selected':'' ?>>Forward</option>
        <option <?= (($_POST['position'] ?? '')=='Midfielder')?'selected':'' ?>>Midfielder</option>
        <option <?= (($_POST['position'] ?? '')=='Defender')?'selected':'' ?>>Defender</option>
        <option <?= (($_POST['position'] ?? '')=='Goalkeeper')?'selected':'' ?>>Goalkeeper</option>
      </select>

      <label>Short Bio & Strengths</label>
      <textarea name="bio" rows="5"><?=htmlspecialchars($_POST['bio'] ?? '')?></textarea>

      <button class="btn btn-primary" type="submit">Submit Application</button>
    </form>
  </div>
</main>

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
</html>
