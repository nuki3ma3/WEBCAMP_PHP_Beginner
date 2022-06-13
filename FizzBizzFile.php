

<?php
//
$file_name = "./FizzBuzzFile.txt";

//
for($i = 1; $i <= 100; ++$i) {
    if ( ($i % 15) === 0 ) {
        // 数字が「3でも5でも割り切れる」ときは、数字の代わりに Fizz Bizz と出力してください
        file_put_contents($file_name, "Fizz Bizz \n", FILE_APPEND | LOCK_EX);
    } else if ( ($i % 5) === 0 ) {
        // 数字が「5で割り切れる」ときは、数字の代わりに Bizz と出力してください
        file_put_contents($file_name, "Bizz \n", FILE_APPEND | LOCK_EX);
    } else if ( ($i % 3) === 0 ) {
        // 数字が「3で割り切れる」ときは、数字の代わりに Fizz と出力してください
        file_put_contents($file_name, "Fizz \n", FILE_APPEND | LOCK_EX);
    } else {
        // 1から100までの数字を出力してください
        file_put_contents($file_name, "{$i} \n", FILE_APPEND | LOCK_EX);
    }
}