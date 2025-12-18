<?php
require_once 'config.php';

/* Soo saar dhammaan coaches */
$stmt = $pdo->query("SELECT full_name, role, experience FROM coaches");
$coaches = $stmt->fetchAll();

/* U kala saar role ahaan */
$coaches_by_role = [];
foreach ($coaches as $c) {
    $role = strtolower(trim($c['role']));
    $coaches_by_role[$role][] = $c;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Coaching Staff - Ocean Stars FC</title>

    <!-- CSS sax ah -->
    <link rel="stylesheet" href="sty.css">
</head>

<body>
  
<header class="navbar">
    <div class="logo">OCEAN STARS FC</div>
   

<main class="container page">
    <h1>Coaching Staff</h1>

    <?php foreach ($coaches_by_role as $role => $group): ?>
        <h2><?= ucfirst($role) ?></h2>

        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Role</th>
                    <th>Experience</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($group as $c): ?>
                    <tr>
                        <td><?= htmlspecialchars($c['full_name']) ?></td>
                        <td><?= htmlspecialchars($c['role']) ?></td>
                        <td><?= htmlspecialchars($c['experience']) ?> years</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>

</main>

</body>
</html>
