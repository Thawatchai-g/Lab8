<?php include "connect.php"; ?>
<?php
   $stmt = $pdo->prepare("SELECT name,address,email FROM member");
   $stmt->execute();
?>  
<html>
<head><meta chaset="utf-8"></head>
<body>
<?php
   while($row = $stmt->fetch()):
?>
ชื่อสมาชิก: <?=$row["name"]?><br>ที่อยู่: <?=$row["address"]?><br>อีเมล: <?=$row["email"]?><br><img src='img/<?=$row["name"]?>.jpg'><hr>
<?php endwhile; ?>
</body>
</html>