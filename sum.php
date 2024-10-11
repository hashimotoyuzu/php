<?php
function double($num) {
  return $num * 2;
}
$result = double(10);
echo $result . "\n";
echo $result . PHP_EOL;
// echo double(30);
// echo "\n";
function add($a,$b) {
  return $a + $b;
}
echo add(5,3);
echo "\n";
$arr = array(1,3,5,7,9,11);
function nums($arr) {
  $result = 1;
  for ($i=0; $i < count($arr); $i++){
      // echo $arr[$i] . PHP_EOL;
      $result = $result * $arr[$i];
  }
  // foreach($arr as $data){
  //   $result = $result * $data;
  //     // echo $data . PHP_EOL;
  // }
  return $result;
}
echo nums($arr) . "\n";
// function max_array($arr){
//     $max_number += $arr[0];
//     foreach($arr as $a) {
//       if($max_number > $arr){
//          $max_number = $arr;
//       }
//     }
//     return $max_number;
//   }
//  echo max_array($arr) . "\n";
//  $animal = '<p>cat.</p><a href="#dummy">dog</a>';
//  echo strip_tags($animal,'p');
//  echo "\n";
//  $fruit = array("orange","apple");
//  array_push($fruit,"banana","melon");
//  print_r($fruit);
//  $array1 = array("spring","summer");
//  $array2 = array("autum","winter");
// $result = array_merge($array1,$array2);
// print_r($result);
// echo "\n";
// mktime(8,0,0,10,5,2024);
// echo date('Y/m/d H:i:s',mktime(8,0,0,10,5,2024));
// echo "\n";
















