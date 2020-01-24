<?
// путь до директории
$dirPath = "lesson4/img/big";

// Получаем массив с именами файлов
$images = scandir($dirPath);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Урок 4</title>
        <link rel="stylesheet" href="lesson4/style.css" type="text/css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="lesson4/script.js"></script>
    </head>
    <body>
        <h4>Без jQuery</h4>
        <div>
            <?
                // цикл по массиву с названием фалов
                foreach ($images as $key => $value) {
                    // выбираем файлы только с нужным расширением
                    if(strpos($value, ".jpg") || strpos($value, ".jpeg") || strpos($value, ".png")) { ?>
                        <a href="lesson4/show.php?img=<?= $value ?>" target="_blank">
                            <img src="lesson4/img/small/<?= $value ?>">
                        </a>
                    <? }
                }
            ?>
        </div>
        <h4>С jQuery</h4>
        <div>
            <?
                // цикл по массиву с названием фалов
                foreach ($images as $key => $value) {
                    // выбираем файлы только с нужным расширением
                    if(strpos($value, ".jpg") || strpos($value, ".jpeg") || strpos($value, ".png")) { ?>
                        <img src="lesson4/img/big/<?= $value ?>" class="image">
                    <? }
                }
            ?>
        </div>

    </body>
</html>