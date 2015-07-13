<?php
include "xml_config.inc.php";

//Выбираем нужные данные.Формируем переменные.
$time_now = date("H:i");//Время
$city = $xml[city];//Город
$country = $xml[country];//Страна
$temperature_now = $xml->fact->temperature;//Температура(Сейчас)
$weather_icon = "http://yastatic.net/weather/i/icons/svg/{$xml->fact->{'image-v3'}}.svg";//Погодная иконка
$weather_type_now = $xml->fact->weather_type;//Погода(Сейчас)
$humidity_now = $xml->fact->humidity;//Влажность(Сейчас)
$wind_speed_now = $xml->fact->wind_speed;//Скорость ветра(Сейчас)
$wind_direction_now = $xml->fact->wind_direction;//Направление ветра(Сейчас)
$mslp_pressure_now = $xml->fact->mslp_pressure;//Давление(Сейчас)
$wind_arrow;//Переменная стрелка-направление ветра(Сейчас)

switch ($wind_direction_now) {
    case n:
        $wind_arrow = "↑";
        break;
    case s:
        $wind_arrow = "↓";
        break;
    case w:
        $wind_arrow = "←";
        break;
    case e:
        $wind_arrow = "→";
        break;
    case nw:
        $wind_arrow = "&#8598";
        break;
    case sw:
        $wind_arrow = "&#8601";
        break;
}