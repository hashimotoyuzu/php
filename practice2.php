<?php
$name="yuzu";
//もし $nameがyuzu"ならifのあとの{}の中が実行される
//それ以外ならelseのあとの{}が実行される
if($name == "yuzum") {
  echo "私は" . $name . "です";
} else {
  echo $name . "ではありません";
}
echo "\n";
$total = 0;
echo $total;
for($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";
$fruits = array("apple","orange","banana","grapes","melon");
foreach($fruits as $fruit){
  echo "要素は" . $fruit;
  echo "\n";
}
echo "\n";
$start = 1;
$end = 100;
for($i = 1; $i <= 100; $i++){
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
echo "\n";








