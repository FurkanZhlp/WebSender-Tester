<?php

if((!isset($_POST["host"]) || $_POST["host"] == "") || (!isset($_POST["password"]) || $_POST["password"] == "") || (!isset($_POST["port"]) || $_POST["port"] == "")){
    die("fill");
}

require_once("classes/WebsenderAPI.php");

$wsr = new WebsenderAPI($_POST['host'],$_POST['password'],$_POST['port']);
$wsr->timeout = 1; // Timeoutu kısaltıyoruz.

if($wsr->connect()){
    $wsr->sendCommand("broadcast test.");
    die("ok");
}else{
    die("error");
}
?>