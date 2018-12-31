<?php
$products = array(
  array('marc 相機包', 'marc-相機包', '4k件商品', '209','https://via.placeholder.com/800x500?text=Product','67',date('Y-m-d h:i:s')),
  array('iphone手機殼', '液態矽膠殼-iphone手機殼-i7plus素色防摔抗震', '液態矽膠殼-iphone手機殼-i7plus素色防摔抗震', '899','https://via.placeholder.com/800x500?text=Product','3',date('Y-m-d h:i:s')),
  array('【Geometry】Dickies I-27087 Backpack', 'Dickies-I-27087-Backpack', 'Dickies I-27087 Backpack', '870','https://via.placeholder.com/800x500?text=Product','2',date('Y-m-d h:i:s')),
  array('iPhone XR 64G【限量到貨】', 'iPhone-XR-64G', 'iPhone-XR-64G', '350000','https://via.placeholder.com/800x500?text=Product','4',date('Y-m-d h:i:s'))
);

$tmp = array();
foreach($products as $product) {
  $str = implode("','", $product);
  array_push($tmp, sprintf("('%s')", $str));
}
$sql = sprintf("INSERT INTO `products`(`title`,`slug`,`description`,`price`,`image`,`stock`, `created_at`) 
 VALUES %s", implode(",", $tmp));
 
echo $sql;