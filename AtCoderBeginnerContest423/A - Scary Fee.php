<?php
// 1行の入力を受け取る (例: "3 5")
$input_line = trim(fgets(STDIN));

// スペースで分割して2つの変数に格納する
list($X, $C) = explode(" ", $input_line);

// 合計を計算して出力する
// echo "X = " ,$X , ", C  = " , $C . "\n";

// 引き出せる数
$num = round($X / 1000, 0);

$ans = $X;

for($i=$num;$i>=0;$i--){
  // echo $i , ",";

  $ans = $i * 1000;
  $cost = $i * $C;
  $sum = $ans + $cost;
  // echo "下ろす金額: $ans \n";
  // echo "手数料    : $cost \n";
  // echo "合計      : $sum \n";

  if($sum <= $X){
    echo $ans;
    exit;
  }
}
?>