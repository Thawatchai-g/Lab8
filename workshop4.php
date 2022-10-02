<?php include "connect.php" ?>
<html><head><meta charset="utf-8"></head>
<body>
<form>
<input type="text" name="keyword">
<input type="submit" value="ค้นหา">
</form>
<?php
$stmt = $pdo->prepare("SELECT name,address,email FROM member WHERE name LIKE ?");
if (!empty($_GET))
$value = '%' . $_GET["keyword"] . '%';
$stmt->bindParam(1, $value);
$stmt->execute();
?>
<?php while ($row = $stmt->fetch()) : ?>
ชื่อสมาชิก: <?=$row["name"]?><br>ที่อยู่: <?=$row["address"]?><br>อีเมล: <?=$row["email"]?><br><img src='img/<?=$row["name"]?>.jpg'><hr>
<?php endwhile; ?>
</body></html>