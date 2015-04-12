<?php

require 'import/meli.php';
session_start();

//if(!isset($_GET['code'])){
$meli = new Meli("2634203647737077", "RMR3lwj030Q66a6VNAfyPEWwRLdPhiwA");
$redirectUrl = $meli->getAuthUrl('http://localhost');

if (!isset($_GET['code'])){
    header("Location:".$redirectUrl);
}

$user = $meli->authorize($_GET['code'], 'http://localhost');
$_SESSION['access_token'] = $user['body']->access_token;
echo $_SESSION['access_token'];

?>