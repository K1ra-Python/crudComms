<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Форма для добавления коментариев</h1>
    <form action="vendor/addComment.php" method="post">
        <div class="btnWrap">
            <input type="text" name="nameUser" placeholder="Введите ваше имя"/>
            <label for="nameUser">
                Ваше имя
            </label>
        </div>
        <div class="btnWrap">
            <textarea name="comment">
                hai
            </textarea>
        </div>
    </form>
</body>
</html>