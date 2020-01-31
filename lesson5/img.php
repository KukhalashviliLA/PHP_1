<?

// Подключаем файл - соединение с БД
include_once('db_connection.php');

// Получем переданный ID и делаем его типа Integer
$id = (int)$_GET['id'];

// Инициализируем переменные
$error = null;
$image_obj = null;

// SQL запрос
$query = "SELECT * FROM images WHERE id = $id LIMIT 1";

// Отправляет запрос в БД
$result = mysqli_query($link, $query);

// Проверка наличие записи в БД
if(mysqli_num_rows($result) === 1) {
    while ($image = mysqli_fetch_assoc($result)) {
        // Записываем полученный объект
        $image_obj = $image;
    }

    // Получаем количество просмотров у картинки
    $img_views = $image_obj['number_of_views'];
    
    // Увеличиваем количество на 1
    $inc_img_views = ++$img_views;

    // SQL запрос
    $query = "UPDATE `images` SET `number_of_views` = $inc_img_views WHERE id = $id";

    // Отправляет запрос в БД
    $result = mysqli_query($link, $query);
} else {
    $error = "Файл не найден!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Lesson 5 - Show Image</title>
</head>
<body>
    <? if(is_null($error)) {?>
        <div class="full_image">
            <img src="<?= $image_obj['path_big'] . $image_obj['name'] ?>" />
            <a class="link_back" href="../lesson5.php">Вернуться в галлерею</a>
        </div>
    <? } else { ?>
        <div class="error">
            Ошибка: <?= $error ?>
        </div>
    <? } ?>
</body>
</html>

