<?php
include "db.php";
$insert = "insert into board set 
title='{$_POST["title"]}',
notice='{$_POST["notice"]}'";
$result=$pdo->query($insert);

echo "<script>location.href='sub1.php'</script>";
?>
