<?php include "connect.php" ?>
<html><head><meta charset="utf-8"></head>
<body>
<div style="display:flex">
    <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
        $username = $_GET["username"];
        $stmt->bindParam(1, $username);
        $stmt->execute();
        $row = $stmt->fetch();
    ?>
    <div style="padding: 15px; text-align: center">
        <img src='img/<?=$row["name"]?>.jpg' width='100'><br>
    </div>
    <div style="padding: 15px; text-align: leftr">
        <b><?=$row["name"]?></b><br><br><?=$row["address"]?><br><br><?=$row["email"]?><br><?=$row["mobile"]?>
    </div>
</div></body></html>