<?php
for($i=1;$i <= 100; ++$i){

if(($i % 15) === 0){
echo "FizzBizz";

}else if(($i % 5) === 0){
    
    echo "Bizz";
    
    
}else if(($i % 3) ===0 ){
 echo "Fizz";


}else{
echo "{$i}" ;
}   
}