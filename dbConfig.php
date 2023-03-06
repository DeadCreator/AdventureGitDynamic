<?php

$host = 'localhost';
$dbname = 'adventuregit';
$user = 'root';
$pass = 'mysql';

$dbh = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8;", $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);