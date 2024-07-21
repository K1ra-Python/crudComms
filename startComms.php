<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="wrapForma">
        <h1>Форма для добавления коментариев</h1>
        <form action="vendor/addComment.php" method="post">
            <div class="btnWrap">
                <input type="text" name="nameUser" placeholder="Введите ваше имя" />
                <label for="nameUser">
                    Ваше имя
                </label>
            </div>
            <div class="btnWrap">
                <textarea name="comment" rows="8" cols="40">
            </textarea>
            </div>
            <button type="submit">Отправить коментарий</button>
        </form>
    </div>
    <div class="wrapComments">
        <?php
        require_once "vendor/connect.php";

        $sqlQ = "SELECT * FROM comms";
        $stmt = $dbh->prepare($sqlQ);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            echo '<div class="com">';
            echo '<div class="nameUserComment">';
            echo $row['name'];
            echo '</div>';
            echo '<div class="textUserComment">';
            echo $row['text'];
            echo '</div>';
            //var_dump($row);
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>