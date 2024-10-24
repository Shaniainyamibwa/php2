<?php
$a=2;
$b=3;
$c=5;
function solve($a,$b,$c){
    $delta=$b^2-4*$a*$c;
if($delta>0){
    echo "two real solution";
}
elseif($delta==0){
    echo "one real solution";
}
else{
    echo "no real solution";
}

}
solve($a,$b,$c);
?>