<?php

if(!isset($_POST["host"]) && $_POST["host"] == "" &&
    !isset($_POST["password"]) && $_POST["password"] == "" &&
    !isset($_POST["port"]) && $_POST["port"] == "") die("error");

require_once("WebsenderAPI.php");

$wsr = new WebsenderAPI();
$wsr->timeout = 1; // Timeoutu kısaltıyoruz.

$wsr->host = $_POST['host'];            // Gelen IP Verisini belirltiyoruz.
$wsr->port = $_POST['port'];            // Gelen Port verisini belirtiyoruz.
$wsr->password = $_POST['password'];    // Gelen Şifre verisini belirtiyoruz.


if($wsr->connect()){
    $wsr->sendCommand("MineWebTR.com - Websender Bağlantısı Başarılı.");
    die("ok");
}else{
    die("error");
}
?>