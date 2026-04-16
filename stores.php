

<?php
require_once __DIR__ . '/Database.php';
$pdo = Database::connect();
$sql = "SELECT * FROM stores";
$stmt = $pdo->query($sql);
$recipes = $stmt->fetchAll();
?>
<!doctype html>
<html lang="en">
<head><meta charset="utf-8"><title>Stores</title></head>
<body>
<h1>Stores</h1>
<ul>
<?php foreach ($recipes as $r): ?>
<li>
<a href="store.php=<?= htmlspecialchars($r['id']) ?>">
<?= htmlspecialchars($r['id']) ?>
</a>
by <?= htmlspecialchars($r['name']) ?>
</li>
<?php endforeach; ?>
</ul>
</body>


