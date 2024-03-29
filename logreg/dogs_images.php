<?php
//API

$url = 'https://dog.ceo/api/breeds/image/random/3';
$options = array(
    'units' => 'metric',
    'lang' => 'en'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));

$response = curl_exec($ch);

//Преобразование данных в более читаемый вид
$data = json_decode($response, true);

curl_close($ch);

echo '<pre>';

//Вывод данных на экран
print_r($data);

