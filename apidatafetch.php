<?php

$url="http://localhost:8888/api/apijson.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL ,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER ,True);
$result = curl_exec($ch);
curl_close($ch);
//$result=json_decode($result); Object result
$result=json_decode($result, true); // array result
echo '<pre>';
print_r($result);
?>