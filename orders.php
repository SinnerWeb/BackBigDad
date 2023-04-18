<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

require_once '/OSPanel/domains/test1.com/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $postdata = file_get_contents("php://input");
   $request = json_decode($postdata);
   $phone = $mysql->real_escape_string($request->phone);
   $items = $mysql->real_escape_string(json_encode(array_column($request->items, 'name')));
   $price = $mysql->real_escape_string(json_encode(array_column($request->items, 'price')));
   $query = "INSERT INTO orders (phone, items, price) VALUES ('$phone', '$items' , '$price')";
   if ($mysql->query($query)) {
      echo json_encode(['message' => 'Order saved']);
   } else {
      echo json_encode(['error' => 'Error saving order']);
   }
} else {
   echo json_encode(['error' => 'Invalid request method']);
}
// sdsd