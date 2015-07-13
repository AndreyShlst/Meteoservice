<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="view/css/style.css" rel="stylesheet">
    <title>Погода.Днепропетровск.</title>
</head>
<body>
<?php
    //Подключаем шаблон для отображения текущих метеоданных.
    include "view/weather_now.view.php";

    include "view/weather_for10days.view.php";
?>

</body>
</html>