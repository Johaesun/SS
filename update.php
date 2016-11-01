<?php
include "db.php";
$idx=$_GET['idx'];
$sql="select * from board where idx='$idx'";
$see=$pdo->prepare($sql);
$see->execute();
$result=$see->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
           <?php
   
            foreach($result as $row){
            ?>
    <form action="update_db.php?idx=<?=$idx?>" method="post">
        <table>
           
            <tr>
                <td>
                    글제목 : <input type="text" value="<?= $row['title']; ?>" name="title">
                    이름 : <input type="text" value="<?= $row['name']; ?>" name="name">
                </td>
            </tr>
        </table>
        <?php
        }
        ?>
        <button type="submit">글수정</button>
    </form>
</body>
</html>