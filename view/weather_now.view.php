<?php
//Подключаем файл с переменными для этого шаблона
include "./inc/values_for_WDN.inc.php";

//Вывод данных
echo<<<"WEATHER_DATA_NOW"
<div id = "header">$city. $time_now</div><div id = "now"><div id = temperature_now>+$temperature_now °С</div><div id = "weather_icon_now">
        <img src = $weather_icon />
    </div>
    <span id = "weather_type">$weather_type_now<br/>$humidity_now%<br/>$wind_speed_now $wind_arrow<br/>$mslp_pressure_now hPa</span>
</div>
WEATHER_DATA_NOW;
?>