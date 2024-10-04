<?php
function sum($max) {
  $result = 0;
  for($i = 1; $i <= $max; $i++){
    $result += $i;
  }
  return $result;
}
echo sum(100);
echo "\n";
function double($num) {
  return $num * 2;
}
echo double(30);
echo "\n";
function add($a,$b) {
  return $a + $b;
}
echo add(5,3);
echo "\n";
$arr = array(1,3,5,7,9);
  echo (array_product($arr));
  echo "\n";
  function max_array($arr){
    $max_number = $arr[0];
    foreach($arrs as $arr){
    }
  
    return $max_number;
  }
 echo max($arr);
 echo "\n";
 $animal = '<p>cat.</p><a href="#dummy">dog</a>';
 echo strip_tags($animal,'p');
 echo "\n";
 $fruit = array("orange","apple");
 array_push($fruit,"banana","melon");
 print_r($fruit);
 $array1 = array("spring","summer");
 $array2 = array("autum","winter");
$result = array_merge($array1,$array2);
print_r($result);
echo "\n";
mktime(8,0,0,10,5,2024);
echo date('Y/m/d H:i:s',mktime(8,0,0,10,5,2024));
echo "\n";
















