<?php
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
function nums($arr) {
  return $arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
}
echo nums($arr) . "\n";
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a) {
      if($max_number > $arr){
         $max_number = $arr;
      }
    }
    return $max_number;
  }
 echo max_array($arr) . "\n";
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
















