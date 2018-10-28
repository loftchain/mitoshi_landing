<?php
$ip = get_ip();

$mysqli = connect_db();

    $sql = "INSERT INTO `white_list`(`name`, `country`, `email`, `phone`, `ip`) 
        VALUES ('" . $_POST['name'] . "','" . $_POST['country'] . "','" . $_POST['email'] . "','" . $_POST['phone'] . "','$ip')";

if (!$mysqli->query($sql)) {
    echo("error recovery bd");
    exit;
}

$mysqli->close();

function get_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function connect_db()
{
    $mysqli = new mysqli(
        "localhost",
        "mitoshi",
        "S0zFxph2qx",
        "white_list"
    );

    $mysqli->set_charset("utf8");

    if ($mysqli->connect_errno) {
        echo("error connect bd");
        exit;
    }

    return $mysqli;
}

send_hook($_POST['name'], $_POST['country'], $_POST['email'], $_POST['phone'], $ip);

function send_hook($name, $country, $email, $phone, $ip){
// Создаём POST-запрос
  $request = [
    'content' => '**name: **' . $name. "\n" .
    			 '**country: **' . $country. "\n" .
    			 '**email: **' . $email. "\n" .
    			 '**phone: **' . $phone. "\n" .
			     '**ip: **' . $ip. "\n" .
			     '--------------------------',
  ];

// Устанавливаем соединение
  $ch = curl_init("https://discordapp.com/api/webhooks/506046166350430209/X20Y6KprC3JE7eB-FfbOILh3eY_Bn4B1d6LBEPNw6HacIXss6QyjFQBn8w5O_PLUrFCh");
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($request));

  $result = curl_exec($ch);

  if ($result) {
    echo $result;
  }
}
