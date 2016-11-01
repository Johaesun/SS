<?php

include "db.php";
$update="update board set 
title='{$_POST["title"]}',
name='{$_POST["name"]}' 
where idx='{$_GET['idx']}'";
$pdo->query($update);
echo "<script>location.href='sub1.php'</script>";
?>