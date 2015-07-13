<?php
$city_id = 34504;//Идентификатор города (https://pogoda.yandex.ru/static/cities.xml)
$data_file = "http://export.yandex.ru/weather-ng/forecasts/$city_id.xml";//Файл с метеоданными
$xml = simplexml_load_file($data_file);//Читаем файл с инфой в переменную