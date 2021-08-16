<?php

$jsonfile = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=Tessenderlo&appid=b88e8a4d3b3a06798583071cab85454c&units=metric");

$jsondata = json_decode($jsonfile);

$api_temp = $jsondata->main->temp;

$api_pressure = $jsondata->main->pressure;

$api_mintemp = $jsondata->main->temp_min;

$api_maxtemp = $jsondata->main->temp_max;

$api_wind = $jsondata->wind->speed;

$api_humidity = $jsondata->main->humidity;

$api_desc = $jsondata->weather[0]->description;

$api_maind = $jsondata->weather[0]->main;







echo "<?xml version='1.0' encoding='UTF-8'?>

 <rss version='2.0'>

 <channel>

 <title>ESP-weatherstation RSS</title>";

 echo "<item>";

 echo "<H3>Weer in Tessenderlo</H3>";



    echo "<br>";

    echo "Wat voor weer: ";

    echo $api_maind;

    echo "<br>";

    echo "Temperatuur in &degC: ";

    echo $api_temp;

    echo "<br>";

    echo "Druk in hPa: ";

    echo $api_pressure;



    echo "<br>";

    echo "Minimum in &degC: ";

    echo $api_mintemp;

    echo "<br>";

    echo "Maximum in &degC: ";

    echo $api_maxtemp;

    echo "<br>";

    echo "Windkracht in Bft: ";

    echo $api_wind;

    echo "<br>";

    echo "Vochtigheid in %: ";

    echo $api_humidity;

    echo "<br>";





 echo" </item>";



 echo "</channel></rss>";



?>