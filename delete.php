<?php
include "db.php";
$sql="delete from board where idx='{$_GET['idx']}'";
$go = $pdo -> query($sql);

echo "<script>location.href='sub1.php'</script>";
?>