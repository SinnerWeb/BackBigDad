<?php
header("Access-Control-Allow-Origin: *");

require_once '/OSPanel/domains/test1.com/db.php';

$sql = "SELECT id, name_product, descrip, price, img_url FROM pizzaproduct";
$result = $mysql->query($sql);

$data = array();
if ($result->num_rows > 0) {
   while ($row = $result->fetch_assoc()) {
      $data[] = $row;
   }
}


$json_data = json_encode($data);

header('Content-type: application/json');
echo $json_data;
