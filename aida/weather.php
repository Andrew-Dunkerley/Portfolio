<?php
$string= file_get_contents ("http://api.wunderground.com/api/5e8af95dbdebbd73/geolookup/conditions/forecast/q/England/Leeds.json");
$jsondecoded = json_decode($string, true);

print_r($jsondecoded);

$location_full = $jsondecoded['current_observation']['current_location']['full'];
$location_city = $jsondecoded['current_observation']['current_location']['city'];
$location_country = $jsondecoded['current_observation']['current_location']['country'];

echo "location Full Name:".$location_full;
echo "location city:".$location_city;
echo "Country:".$location_country;





?>