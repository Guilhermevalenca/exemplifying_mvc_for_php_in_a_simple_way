<?php
require 'conf/Database.php';

use Database\Database;

$sql = file_get_contents('db.sql');

$db = new Database();

$host = $db->getHost();
$port = $db->getPort();

$dsn = "mysql:host=$host;port=$port";
$pdo = new PDO($dsn, $db->getUsername(), $db->getPassword());

$result = $pdo->exec($sql);

var_dump($result);