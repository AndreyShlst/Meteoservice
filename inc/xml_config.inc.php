<?php
$city_id = 34504;//������������� ������ (https://pogoda.yandex.ru/static/cities.xml)
$data_file = "http://export.yandex.ru/weather-ng/forecasts/$city_id.xml";//���� � ������������
$xml = simplexml_load_file($data_file);//������ ���� � ����� � ����������