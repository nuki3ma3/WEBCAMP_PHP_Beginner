{"filter":false,"title":"type.php","tooltip":"/type.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":0,"column":0},"end":{"row":7,"column":22},"action":"insert","lines":["<?php","// 整数型の確認","$i = 123;","var_dump($i);","","// 整数型の最大/最小値の確認","var_dump(PHP_INT_MAX);","var_dump(PHP_INT_MIN);"],"id":1}],[{"start":{"row":7,"column":22},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":9,"column":0},"end":{"row":15,"column":21},"action":"insert","lines":["// 「最大値」を超えた値はどうなる？","$over_max = PHP_INT_MAX + 1;","var_dump($over_max);","","// 「最小値」を下回った値はどうなる？","$under_min = PHP_INT_MIN -1 ;","var_dump($under_min);"],"id":4}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":21},"end":{"row":15,"column":21},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1652963125946,"hash":"f5f67234ad5ff9ce894eecc0d92dc2a5ba3171c6"}