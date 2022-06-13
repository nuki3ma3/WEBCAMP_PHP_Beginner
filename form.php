<?php
//
var_dump($_GET);
// 出力
// XXX 危険!! XSSがある!! 危険!!
echo "あなたが入力したのは " , $input , " ですね";