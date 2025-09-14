<?php
// 1行の入力を受け取る (例: "3 5")
$input_line = trim(fgets(STDIN));

// スペースで分割して2つの変数に格納する
list($a, $b) = explode(" ", $input_line);

// 合計を計算して出力する
echo $a + $b . "\n";
?>