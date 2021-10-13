<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

'https://youtube.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=Ks-_Mh1QhMc&key=[YOUR_API_KEY]' \
  --header 'Authorization: Bearer [YOUR_ACCESS_TOKEN]' \
  --header 'Accept: application/json' \
  --compressed

-->
<?php
$video_id = 'YlimglzQ6Sk';
$api_key = "AIzaSyBYxuU21UwZNGa_iwnZ1vflKXDq48bKaMc";
$video_url = 'https://youtube.googleapis.com/youtube/v3/videos?part=status'
        . '&id=' . $video_id
        . '&key=' . $api_key;
$curl_h = curl_init();
curl_setopt($curl_h, CURLOPT_URL, $video_url);
curl_setopt($curl_h, CURLOPT_CUSTOMREQUEST , 'GET');
curl_setopt($curl_h, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($curl_h);
if (!$res) {
    $curl_er = curl_error($curl_h);
}
curl_close($curl_h)
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <hr />
        <span style="color: #FF0000;">Error: <?= $curl_er ?></span>
        <pre><?= $res ?></pre>
    </body>
</html>
