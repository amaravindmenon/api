<?php

//URL
$url="http://localhost:8888/api/apijson.php";
//CURL initialize
$ch = curl_init();
//(initialise, CURLOPT_URL , URL-variable)
curl_setopt($ch, CURLOPT_URL ,$url);
//(initialise, CURLOPT_RETURNTRANSFER, True)
curl_setopt($ch, CURLOPT_RETURNTRANSFER ,False);
//CURL Execute in result variable
$result = curl_exec($ch);
//Close CURL
curl_close($ch);
// hit the result
echo $result;

?>