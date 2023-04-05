<?php
header("Access-Control-Allow-Origin: *");

require_once __DIR__ . '/db.php';

$phone = $_POST['phone'];
$adress = $_POST['adress'];
$items = $_POST['items'];

// Сохранение данных в базу данных

if (!$phone) {
   exit('Номер телефона не указан');
}


$stmt = $mysql->prepare("INSERT INTO `orders`(`id`, `phone`, `adress`, `items`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')");
$stmt->bind_param("sss", $phone, $adress, json_encode($items));
$stmt->execute();
if (!$stmt->execute()) {
   exit('Ошибка при сохранении данных в БД');
}

echo json_encode(['success' => true]);
