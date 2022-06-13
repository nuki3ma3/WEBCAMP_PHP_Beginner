<?php

/* 四則演算 */
$i = random_int(1, 9999);
$j = random_int(1, 9999);
// 加算
$k = $i + $j;
echo "{$i} + {$j} = {$k} \n";
// 減算
$k = $i - $j;
echo "{$i} - {$j} = {$k} \n";
// 乗算
$k = $i * $j;
echo "{$i} * {$j} = {$k} \n";
// 除算
$k = $i / $j;
echo "{$i} / {$j} = {$k} \n";
// 剰余
$k = $i % $j;
echo "{$i} % {$j} = {$k} \n";
// 冪乗
$k = $i ** 3;
echo "{$i} ** 3 = {$k} \n";
$k = pow($i, 3);
echo "pow({$i}, 3) = {$k} \n";

// 区切り用の改行
echo "\n";


/* 文字列の結合 */
$string_1 = "Hello ";
$string_2 = "world.";

// .（ドット）を使った結合
$string_dot = $string_1 . $string_2 . "\n";
echo $string_dot;

// ダブルクォートを使った変数展開
$string_dquote = "{$string_1}{$string_2} \n";
echo $string_dquote;

// 区切り用の改行
echo "\n";


/* ビット演算子 */
$i = random_int(0, 255);
$j = random_int(0, 255);
// AND
$k = $i & $j;
printf("%x & %x = %x \n", $i, $j, $k);
// OR
$k = $i | $j;
printf("%x | %x = %x \n", $i, $j, $k);
// XOR
$k = $i ^ $j;
printf("%x ^ %x = %x \n", $i, $j, $k);
// NOT
$k = ~$ij;
printf("~%x = %x \n", $i, $k);