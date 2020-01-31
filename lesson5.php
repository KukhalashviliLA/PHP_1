<?php 

// Подключаем файл - соединение с БД
include_once('lesson5/db_connection.php');

// SQL запрос
$query = "SELECT * FROM images ORDER BY number_of_views DESC";

// Отправляет запрос в БД
$result = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="lesson5/style.css" type="text/css" />
    <title>Lesson 5</title>
</head>
<body>
    <div class="container">
        
        <? while ($image = mysqli_fetch_assoc($result)) { ?>
            
            <div class="image">
                <div class="image_file">
                    <a href="lesson5/img.php?id=<?= $image['id'] ?>">
                        <img src="<?= 'lesson5/' . $image['path_small'] . $image['name'] ?>">
                    </a>
                </div>
                <div class="image_views">
                    <span>Количество просмотров: <?= $image['number_of_views'] ?></span>
                </div>
            </div>
        
            <? } ?>
    
    </div>
</body>
</html>