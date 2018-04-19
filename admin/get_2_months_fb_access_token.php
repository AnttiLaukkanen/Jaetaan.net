<!DOCTYPE html>
<html>

<head>

  <meta name="robots" content="noindex">
  <meta charset='UTF-8'>

</head>

<body>

<?php

/*

To make this code work first take next steps:

1. Go to https://developers.facebook.com/tools/explorer
2. Click Graph Api Explorer and change it to your name
3. Click Get Token and choose Get User Access Token then click Get Access Token
4. Copy the string from the Access Token field
5. Paste the access token string to be the value of the $access_token variable right below in this code. 

*/

  $access_token = 'Paste here the access token string you just fetched.';

  $sivut = file_get_contents('https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id=your client id here&client_secret=your client secret here&fb_exchange_token=' . $access_token);
  $teksti = json_decode($sivut, true);

print_r($teksti);

/* 

Load this page on your browser and you'll get your access token that will be valid for two months.

 Use that access token in add_event_from_fb.php file (you find it in the same folder as this get_2_months_fb_access_token.php file) to make that file work 2 months (and not two hours).

*/

?>

</body>
</html>
