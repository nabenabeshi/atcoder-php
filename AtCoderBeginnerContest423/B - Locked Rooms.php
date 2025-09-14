<?php
// 1行の入力を受け取る
$N = trim(fgets(STDIN));

// スペースで分割して2つの変数に格納する
$lock = explode(" ", trim(fgets(STDIN)));

// 到達できたかを示す変数
$room = array_fill(0, $N+1, 1);

$room[0] = 0;
$room[$N] = 0;

// echo "N= $N \n";

// for ($i = 0; $i <= $N; $i++) {
//   echo " room $i : $room[$i] \n";
// }

// 0部屋には最初からいるのでループは1から開始する
for ($i = 0; $i < $N; $i++) {

  // 0の部屋にいる人
  if($lock[$i] == 0){
    $room[$i+1] = 0;
  }else{
    break;
  }
}
// echo "\n";

for ($i = $N-1; $i >= 1; $i--) {

  // Nの部屋にいる人
  if ($lock[$i] == 0) {
    $room[$i] = 0;
  } else {
    break;
  }
}

// for ($i = 0; $i <= $N; $i++) {
//   echo " room $i : $room[$i] \n";
// }

echo array_sum($room);

?>