 

<?php$access_token = '1/rOu668TPSyoboXfr94yvhF1ZsE8xPVuY0T92XSpS+I3DKP6EjhPVILvvu0tNKaOyMRCPXmCscK0LYMYNYv3IQqnIqaX6KhLEWHQLU7Vy7Cf0rt3TtPkLude/Q0uKlVTsnwTL9/T+GksKyvTb6ymAdB04t89/1O/w1cDnyilFU=
';$url = 'https://api.line.me/v2/oauth/verify';$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);$result = curl_exec($ch);curl_close($ch);echo $result; ?>
