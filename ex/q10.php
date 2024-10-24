<?php
$bmi=30;
if($bmi<18.5){
    echo"under weight";
}
elseif(24.9>$bmi&&$bmi>=18.5){
    echo"normal weight";
}
elseif(29.9>$bmi&&$bmi>=25){
    echo"over weight";
}
elseif($bmi>=30){
    echo"obese";
}

?>