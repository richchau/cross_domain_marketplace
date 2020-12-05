<?php

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "https://www.annasys.com/cafe9/logoutuser-api.php",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_SSL_VERIFYPEER => false,
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

print_r($err);

header('location: ../index.php');
exit();
