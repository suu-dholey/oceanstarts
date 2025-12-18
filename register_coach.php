<?php
require_once 'config.php';

$errors = [];
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['full_name'] ?? '');
    $experience = intval($_POST['experience'] ?? 0);
    $role = trim($_POST['role'] ?? '');

    if ($name === '' || $role === '') {
        $errors[] = "Full name and role are required.";
    }

    if (!$errors) {
        $stmt = $pdo->prepare("
            INSERT INTO coaches (full_name, role, experience)
            VALUES (?, ?, ?)
        ");
        $stmt->execute([$name, $role, $experience]);

        $success = "Coach registered successfully!";
        $_POST = [];
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="sty.css?v=2">

  <title>Register Coach</title>
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










<h2>Coach Registration</h2>

<?php if ($errors): ?>
  <div style="color:red"><?= implode('<br>', $errors) ?></div>
<?php elseif ($success): ?>
  <div style="color:green"><?= $success ?></div>
<?php endif; ?>

<form method="post">
  <input name="full_name" placeholder="Full Name" required><br><br>
  <input type="number" name="experience" placeholder="Experience"><br><br>

  <select name="role" required>
    <option value="">Select Role</option>
    <option>Head Coach</option>
    <option>Assistant Coach</option>
    <option>Goalkeeping Coach</option>
    <option>Fitness Coach</option>
  </select><br><br>

  <button type="submit">Submit</button>
</form>

</body>
</html>
