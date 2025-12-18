<?php
session_start(); // ⭐ MUHIIM
require_once 'config.php';

$error = "";

/* Haddii hore loo login gareeyay, ha tusin login page */
if (isset($_SESSION['admin_logged']) && $_SESSION['admin_logged'] === true) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $password = $_POST['password'] ?? "";

    if ($password === "admin123") {
        $_SESSION['admin_logged'] = true;

        header("Location: index.php");
        exit;
    } else {
        $error = "Incorrect password";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin Login | Ocean Stars FC</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="styles.css">
</head>
<body>

     <!-- <a href="#">Home</a>
        <a href="#">First Team</a>
        <a href="#">Join as Player</a>
        <a href="#">Join as Coach</a>
        <a class="active" href="#">Legends</a>
        <a href="#">Admin Login</a>
    </nav> -->

<div style="
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:#f4f7fb;
">
  <form method="post" style="
      background:#fff;
      padding:30px;
      width:350px;
      border-radius:12px;
      box-shadow:0 20px 40px rgba(0,0,0,.1);
      text-align:center;
  ">
      <h2>Admin Portal</h2>
      <p style="color:#666;font-size:14px;">Restricted Access Only</p>

      <input
        type="password"
        name="password"
        placeholder="Enter Password"
        required
        style="
          width:100%;
          padding:12px;
          margin-top:15px;
          border-radius:8px;
          border:1px solid #ccc;
        "
      >

      <button
        type="submit"
        style="
          width:100%;
          margin-top:15px;
          padding:12px;
          background:#1e3a8a;
          color:#fff;
          border:none;
          border-radius:8px;
          font-size:15px;
          cursor:pointer;
        "
      >
        Login
      </button>

      <?php if ($error): ?>
        <p style="color:red;margin-top:10px;">
            <?= htmlspecialchars($error) ?>
        </p>
      <?php endif; ?>
  </form>
</div>

</body>
</html>
