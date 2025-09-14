<?php
// 1行の入力を受け取る
list($N, $R) = explode(" ", trim(fgets(STDIN)));

// スペースで分割して2つの変数に格納する
$arr = explode(" ", trim(fgets(STDIN)));

// echo " N = $N , R = $R \n";

// for ($z = 0; $z < $N; $z++) {
//   echo "$arr[$z],";
// }

// echo "\n";

$oc_count = 0;

// Rから、近い方の端っこのドアを特定する(1orN)
//  RがN/2と等しいならどっちでもいいので、1に向かって動くとする
// とおもったけどどっちでもいいので最初は1にむかうことにする

// Rから1もしくはRからNまで、以下の動作を行う
// 　進行方向のドアが閉まっていたら開ける
// 　進行方向へ進む。
// 　1もしくはNまで到達したら、次の動作へすすむ
// 1ならNまで、Nなら1まで、以下の操作を行う
// 　進行方向とは逆のドアを閉める
// 　進行方向のドアが閉まっていたら開ける
// 　進行方向へ進む

$start = 0;
$end = $N-1;

// 移動すべき部屋を算出する
// →端っこのドアが閉まっている場合は移動する必要がないため。
for($i=0;$i<$N;$i++){
  if($arr[$i] == 0){
    $start = $i;
    break;
  }
}
echo "start: $start ";

for ($i = $N-1; $i >= 0; $i--) {
  if ($arr[$i] == 0) {
    // echo $i;
    $end = $i;
    break;
  }
}
echo "end: $end \n";


// 1側に進む
for($i=$R-1;$i>=$start;$i--){
  // echo "ドア: $i ,";
  // echo "鍵  : $arr[$i] \n";
  if($arr[$i] == 1){
    // echo "ドア: $i が閉まってると進めないので開けるよ\n";
    $arr[$i] = 0;
    $oc_count++;

    // for ($z = 0; $z < $N; $z++) {
    //   echo "$arr[$z],";
    // }
    // echo "\n";

  }
}

// echo "\nNへむかうよ\n";

// N側に進む
for ($i = 1; $i <= $end; $i++) {
  // echo "ドア: $i ,";
  // echo "鍵  : $arr[$i] \n";
  if($arr[$i-1] == 0){
    // echo "ドア: ",$i-1," を締めたよ\n";
    $oc_count++;
    $arr[$i-1] = 1;

    // for ($z = 0; $z < $N; $z++) {
    //   echo "$arr[$z],";
    // }
    // echo "\n";

  }
  if ($arr[$i] == 1) {
    // echo "ドア: $i が閉まってると進めないので開けるよ\n";
    $arr[$i] = 0;
    $oc_count++;


    // for ($z = 0; $z < $N; $z++) {
    //   echo "$arr[$z],";
    // }
    // echo "\n";

  }
}

if($arr[$end] == 0){
  // echo "ドア: ",$N-1," を閉めるよ(最後)\n";
  $arr[$N-1] = 1;
  $oc_count++;
  // for ($z = 0; $z < $N; $z++) {
  //   echo "$arr[$z],";
  // }
  // echo "\n";
}
// echo "\n ans : ";

echo $oc_count;
?>
