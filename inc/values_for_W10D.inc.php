<?php
    $dayX = date(D, strtotime($item["date"]));
    switch($dayX){
        case Mon:
            $dayX = "Пн";
            break;
        case Tue:
            $dayX = "Вт";
            break;
        case Wed:
            $dayX = "Ср";
            break;
        case Thu:
            $dayX = "Чт";
            break;
        case Fri:
            $dayX = "Пт";
            break;
        case Sat:
            $dayX = "Сб";
            break;
        case Sun:
            $dayX = "Вс";
            break;

    }

    $monthX = date(M, strtotime($item["date"]));
    switch($monthX) {
    case Jul:
        $monthX = "Июля";
        break;
}

    $dateX = date(d, strtotime($item["date"]));



    //Температура
    $temperature_avg_mor = $item->day_part[0]->{'temperature-data'}->avg;//Средняя температура(утро)
    $temperature_avg_day = $item->day_part[1]->{'temperature-data'}->avg;//Средняя температура(день)
    $temperature_avg_evn = $item->day_part[2]->{'temperature-data'}->avg;//Средняя температура(вечер)
    $temperature_avg_nig = $item->day_part[3]->{'temperature-data'}->avg;//Средняя температура(ночь)

    //Иконки
    $weather_icon_mor = $item->day_part[0]->{'image-v3'};//Погодная иконка(утро)
    $weather_icon_day = $item->day_part[1]->{'image-v3'};//Погодная иконка(день)
    $weather_icon_evn = $item->day_part[2]->{'image-v3'};//Погодная иконка(вечер)
    $weather_icon_nig = $item->day_part[3]->{'image-v3'};//Погодная иконка(ночь)

    //Состояние
    $weather_type_mor = $item->day_part[0]->weather_type;//Cостояние погоды(утро)
    $weather_type_day = $item->day_part[1]->weather_type;//Cостояние погоды(день)
    $weather_type_evn = $item->day_part[2]->weather_type;//Cостояние погоды(вечер)
    $weather_type_nig = $item->day_part[3]->weather_type;//Cостояние погоды(ночь)

    //Давление
    $pressure_mor = $item->day_part[0]->pressure;//Атмосферное давление(утро)
    $pressure_day = $item->day_part[1]->pressure;//Атмосферное давление(день)
    $pressure_evn = $item->day_part[2]->pressure;//Атмосферное давление(вечер)
    $pressure_nig = $item->day_part[3]->pressure;//Атмосферное давление(ночь)

    //Влажность
    $humidity_mor = $item->day_part[0]->humidity;//Влажность воздуха(утро)
    $humidity_day = $item->day_part[1]->humidity;//Влажность воздуха(день)
    $humidity_evn = $item->day_part[2]->humidity;//Влажность воздуха(вечер)
    $humidity_nig = $item->day_part[3]->humidity;//Влажность воздуха(ночь)

    //Скорость ветра
    $wind_speed_mor = $item->day_part[0]->wind_speed;//Скорость ветра(утро)
    $wind_speed_day = $item->day_part[1]->wind_speed;//Скорость ветра(день)
    $wind_speed_evn = $item->day_part[2]->wind_speed;//Скорость ветра(вечер)
    $wind_speed_nig = $item->day_part[3]->wind_speed;//Скорость ветра(ночь)

