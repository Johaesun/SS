<?php
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="view.php">
        <table>
            <tr>
                <td>이름 : <input type="text" name="name"></td>
            </tr>
            <tr>
                <td>글제목 : <input type="text"></td>
            </tr>
            <tr>
                <td><textarea name="content" id="content" cols="30" rows="10"></textarea></td>
            </tr>
        </table>
    </form>
</body>
</html>