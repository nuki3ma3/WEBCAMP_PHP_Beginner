{"filter":false,"title":"interface.php","tooltip":"/interface.php","ace":{"folds":[],"scrolltop":249,"scrollleft":0,"selection":{"start":{"row":32,"column":17},"end":{"row":32,"column":17},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"1ad7033dd2689814939a5e993302d81b4c787951","mime":"application/octet-stream","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":32,"column":17},"action":"insert","lines":["<?php","//","interface インタフェースA","{","    public function メソッドA();","}","//","interface インタフェースB","{","    public function メソッドB(int $i);","}","","//","class Hoge implements インタフェースA, インタフェースB","{","    //","    public function メソッドA()","    {","        echo \"メソッドA \\n\";","    }","","    //","    public function メソッドB(int $i)","    {","        echo \"メソッドB {$i} \\n\";","    }","}","","//","$obj = new Hoge();","var_dump($obj);","$obj->メソッドA();","$obj->メソッドB(999);"],"id":1}]]},"timestamp":1653567621351}