<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'big_dad');

$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysql->connect_errno) exit('Ошибка подключения к БД');
// ______________________________________________________________
// $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// if ($mysql->connect_errno) {
//    echo json_encode(['error' => 'Ошибка подключения к БД']);
//    exit();
// }

// $phone = $_POST['phone'];
// $adress = $_POST['adress'];
// $items = $_POST['items'];

// // Сохранение данных в базу данных
// $stmt = $mysql->prepare("INSERT INTO orders (phone, adress, items) VALUES ($phone, $adress, $items)");
// $stmt->bind_param("sss", $phone, $adress, json_encode($items));
// $stmt->execute();

// echo json_encode(['success' => true]);
