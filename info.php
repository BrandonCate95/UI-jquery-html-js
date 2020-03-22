<?php
$url = $_POST['URL'];
$curl = curl_init($url);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
$output = curl_exec($curl);
$data = json_encode($output);
echo $data;
?>