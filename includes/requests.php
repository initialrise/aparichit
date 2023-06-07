<?php

function getRequest($url){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

function postRequest($url,$data){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Host: erp.kathmandu.gov.np',
    'User-Agent: Dart/2.19 (dart:io)',
    'Content-Type: application/json; charset=utf-8',
    'Content-Length: 18',
]);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}


?>