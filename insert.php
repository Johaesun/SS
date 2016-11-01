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
   <form action="insert_db.php" method="post">
       <table>
           <tr>
               <td>글제목 : <input type="text" name="title"></td>
           </tr>
           <tr>
               <td>내용 : <input type="text" name="notice"></td>
           </tr>
       </table>
       <button type="submit">글작성</button>
   </form> 
</body>
</html>